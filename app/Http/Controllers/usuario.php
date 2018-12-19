<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuario extends Controller
{
    public function listar(){
        return view usuario_adicionar.blade.php
    }
        public function adicionar(){
        return view usuario_adicionar.blade.php
    }
    //
}
