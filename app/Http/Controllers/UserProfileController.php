<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserProfileController extends Controller
{
    
    public function index()
    {
        return view('admin.view_user', ['user' => Auth::user()]);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.view_user', ['user' => $user]);
    }

    public function edit()
    {
        $roles = DB::table('roles')->get();
        $user = User::findOrFail(Auth::user()->id);
        return view('admin.edit_profile', ['user'=>$user, 'roles' => $roles]);
    }


    public function update(Request $request)
    {
        $data = $request->all(); 
        $user = User::find(Auth::user()->id);
        
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

        return back()->with('info','Informações atualizadas com sucesso!');
    }

    public function destroy($id)
    {
        //
    }
}
