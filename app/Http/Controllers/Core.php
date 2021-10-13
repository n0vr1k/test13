<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Core extends Controller
{
    public function index(){
        $test13 = 'nail';
        return view('default.index', compact('test13'));
    }
    //
}
