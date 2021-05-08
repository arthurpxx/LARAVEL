<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index (){
        return view ('index');
    }

    public function login (Request $request){
        $nome = $request->nome;
        if($nome == 'arthur' || $nome='nando' && $request->senha == 123){
            return view ('contato');
        }
        return view ('index');
    }
}
