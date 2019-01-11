<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    //
	public function index()
	{
		return view('admin/article/index')->withArticles(Article::all());
	}
	public function create()
	{
//		return view('admin/article/create');
		return view('admin/article/add');
	}
	public function store(Request $request)
	{
		$this->validate($request,[
			'title' => 'required|unique:articles|max:255',
			'body' => 'required',
		]);
		$article = new Article();
		$article->title = $request->get('title');
		$article->body = $request->get('body');
		$article->keywords = $request->get('keywords');
//		$article->articlesort = $request->get('articlesort');
//		$article->articlecolumn = $request->get('articlecolumn');
//		$article->articletype = $request->get('articletype');
////	$article->author = $request->get('author');
//		$article->allowcomments = 1;
//		$article->commentdatemin = $request->get('commentdatemin');
//		$article->commentdatemax = $request->get('commentdatemax');
		$article->user_id = $request->user()->id;
		if($article->save()) {
//			return redirect('admin/articles');
			return array('code'=>0,'msg'=>'保存成功');
		} else {
//			return redirect()->back()->withInput()->withErrors('保存失败！');
			return array('code'=>1,'msg'=>'保存失败');
		}
	}
	public function destroy(Request $request)
	{
		$id = $request->get('id');
		$a = Article::find($id)->delete();
		if($a) {
			return array('code'=>0);
		} else {
			return array('code'=>1,'msg'=>'删除失败');
		}
//		return redirect()->back()->withInput()->withErrors('删除成功！');
	}
	public function edit($id)
	{
		$articles = DB::table('articles')->where('id', $id)->first();
		return view('admin/article/edit',['articles' => $articles]);
	}
	public function edit_update(Request $request)
	{
		$a = DB::table('articles')
			->where('id', $request->get('id'))
			->update([
				'title' => $request->get('title'),
				'body' => $request->get('body'),
				'keywords' => $request->get('keywords'),
				'user_id' => $request->user()->id,
			]);
		if($a) {
//			return redirect('admin/articles');
			return array('code'=>0,'msg'=>'保存成功');
		} else {
//			return redirect()->back()->withInput()->withErrors('保存失败！');
			return array('code'=>1,'msg'=>'保存失败');
		}
	}
}
