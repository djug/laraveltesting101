<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreArticle;
use App\Article;
use Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:manage,article")->only('edit', 'update', 'delete');
        $this->middleware("auth")->only('create');
    }

    public function index()
    {
        $articles = Article::with('author')->OrderBy('id', 'desc')->get();
        return view('articles.index')->with(compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function save(StoreArticle $request)
    {
        $data = $request->all();

        $data['author_id'] = Auth::user()->id;
        $article = Article::Create($data);

        return redirect()->route('view_article', ['id' => $article->id]);
    }

    public function view(Article $article)
    {
        $user = Auth::user();

        return view('articles.view')->with(compact('article', 'user'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit')->with(compact('article'));
    }

    public function update(Article $article, StoreArticle $request)
    {
        $article->update($request->all());

        return  redirect()->route('view_article', ['id' => $article->id])->with('successMessage', 'Article updated');
    }

    public function delete(Article $article)
    {
        $article->delete();

        return redirect()->route('get_all_articles')->with('successMessage', 'Article deleted');
    }
}
