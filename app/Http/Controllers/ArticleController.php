<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
	public function show($id)
	{
	    
		DB::update('update articles set num=num+1 where id= ?',[$id]);
//		DB::table('articles')->increment('num',1,['id' => $id ]);
		
		
		return view('article/show')->withArticle(Article::with('hasManyComments')->find($id));
	}
	public function add_star($id)
	{
//		echo 1;die;
		DB::update('update articles set star=star+1 where id= ?',[$id]);
//		return redirect('article');
		return view('article/show')->withArticle(Article::with('hasManyComments')->find($id));
	}
}
