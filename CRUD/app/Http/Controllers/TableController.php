<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function table(){
        return view('Table');
    }

    public function form(){
        return view('Form');
    }
}