<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SingleController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saludar(Request $request){
        // $uri = $request->path();
        
        // $uri = $request->fullUrl();
        $ip = $request->ip();
        
        return "Controller SALUDAR ".$ip;
    }   

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saludos(){
        // return redirect('/saludar');
        return redirect()->route('photos.index');

        return "SALUDOS controller";
    }


    public function lista(){
        return view('amigos', [
            'amigos' => [
                'Ariolys',
                'Yaxer',
                'Mariselys'
            ]
        ]);
    }
}
