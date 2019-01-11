<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$articles = DB::table('articles')->orderBy('id','desc')->paginate(5);
		return view('home', ['articles' => $articles]);
//        return view('home')->withArticles(\App\Article::all());
//        return view('home')->with('articles',\App\Article::all());
    }
}
