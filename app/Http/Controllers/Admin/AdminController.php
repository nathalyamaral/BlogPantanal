<?php

namespace App\Http\Controllers\Admin;

use View;
use Illuminate\Http\Request;
use AdinanCenci\Climatempo\Search;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use AdinanCenci\Climatempo\Climatempo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    
    public function showView($name)
    {
        if(View::exists("admin.$name")){
            return view("admin.$name");
        }
        else{
            return view('admin.404');
        }
    }
    
    public function gallery(){
        return view('admin.gallery');
    }

    public function calendar(){
        return view('admin.calendar');
    }
    
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/admin/login');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //$token      = 'b8c301934455a4fe404de927274a7b97';
        //$id         = 6549; /*Corumbá*/
        
        //$climatempo = new Climatempo($token);
        //$previsao   = $climatempo->fifteenDays($id);
        
        /*foreach ($previsao->days as $dia) {
            echo 
            "Cidade: <b>$previsao->city ($dia->date)</b>: <br>
            Temp. mínima: $dia->minTemp °C <br>
            Temp. máxima: $dia->maxTemp °C <br>
            Probab. de precipitação: $dia->pop % <br>
            Precipitação: $dia->mm mm <br>
            Frase: $dia->textPt <hr>";
        }*/

        return view('admin.home', ["previsao" => "Corumbá"]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        return Redirect::to('admin.users');
    }
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
    }
}
