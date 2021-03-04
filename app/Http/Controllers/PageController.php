<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.index');
    }

    public function novels()
    {
        return view('guests.novels');
    }

    public function articles()
    {
        return view('guests.articles');
    }
}
