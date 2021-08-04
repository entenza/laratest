<?php

namespace App\Http\Controllers;

use App\Events\SyncEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        
        $hijos = [
            'abner',
            'marcos',
            'samuel',
            'moises'

        ];
        $request->session()->put('hijos', $hijos);
        return view('post.create');
    }

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'titulo' => 'bail|required|max:25',
        //     'nombre' => 'required',
        //     'email' => 'required',
        // ]);


        // echo $validated ? "datos validos" : "error en los datos";
        if (true){
            SyncEvent::dispatch();
            
            var_dump($request->session()->get('hijos'));
        }
            
            
        
    }
}