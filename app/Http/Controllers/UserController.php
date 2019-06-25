<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.users', ['users'=>$users]);
    }
    
    public function indexUsersDeleted()
    {
        $users = User::onlyTrashed()->get();
        return view('admin.delete_user', ['users'=>$users]);
    }
    
    public function create()
    {
        $roles = Role::all();
        return view('admin.add_user', ['roles' => $roles]);
    }
    
    
    public function store(Request $request)
    {
        $data = $request->all(); 
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/images/profiles/' . $filename ) );
            $data['image'] = $filename; 
        }
        
        $data['password'] = bcrypt($data['password']);
        $user = new User($data);
        $user->save();
        
        
        $user->roles()->sync($request['role'], false);
        $roles = DB::table('roles')->get();
        return back()->with('success','Usuario cadastrado com sucesso!');
        
    }
    
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $roles = DB::table('roles')->get();
        $user = User::findOrFail($id);
        return view('admin.edit_user', ['user'=>$user,'roles' => $roles]);
    }
    
    
    public function update(Request $request, $id)
    {
        $data = $request->all(); 
        $user = User::find($request->id);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/images/profiles/' . $filename ) );
            $data['image'] = $filename; 
        }
        
        if($request->password){
            $data['password'] = bcrypt($data['password']);
        }else{
            $data['password'] = $user->password;
        }
        
        $user->update($data);
        
        if(isset($request['role'])){
            $user->roles()->sync($request['role']);
        }else{
            $user->roles()->sync(array());
        }
        
        return back()->with('info','Informações atualizadas com sucesso!');
    }
    
    
    public function destroy($id)
    {
        $user = User::find($id);
        
        $sucess = $user->delete();
        
        if($sucess==true)
        {
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
    
    public function destroyUserPermanent($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        if($user->deleted_at != null){
            $user->forceDelete();
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    public function restoreUser($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        if($user->deleted_at != null){
            $user->restore();
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
