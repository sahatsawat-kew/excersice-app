<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beginerModePage()
    {
        return view('beginer.mode');
    }

    public function nomalModePage()
    {
        return view('nomal.mode');
    }
    
    public function sportModePage()
    {
        return view('sport.mode');
    }
}
