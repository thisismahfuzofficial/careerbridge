<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('layouts.home');
    }
    public function saved()
    {
        return view('layouts.saved');
    }
   
}
