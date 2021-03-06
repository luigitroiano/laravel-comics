<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novel;
use App\Article;
use App\Novel_series;
class PageController extends Controller
{
    public function index()
    {
        $novels = Novel::all();
        $articles = Article::all();
        $series = Novel_series::all();
        return view('guests.index', compact('novels', 'articles', 'series'));

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
