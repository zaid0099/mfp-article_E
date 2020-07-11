<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $article = Article::latest()->get();
        return view("articles.articleS", ['articles' => $article]);
    }

    public function show(Article $article)
    {
        // $article = Article::findOrfail($id);
        return view('articles.show', compact('article'));
    }

    public function creat()
    {
        $tags = Tag::all();
        $users = User::all();
        return view("articles.creat", compact("tags", "users") );
    }

    public function store()
    {
        // dump(request()->all());

        Article::create($this->validateArticle());
        // Tag::create( request(["tag_id"]) );
        // Tag::create();

        return redirect("/articles");


        // dump(request()->all());
        // $article = new Article();
        // $article->title = request("title");
        // $article->excerpt = request("excerpt");
        // $article->body = request("body");
        // $article->save();
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact("article"));
    }

    public function update(Article $article)
    {

        $article->update($this->validateArticle());

        return redirect($article->path());
    }


    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'user_id' => 'required'
        ]);
    }
}
