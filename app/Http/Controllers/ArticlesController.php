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
        return view("articles.creat");
    }

    public function store()
    {
        // dump(request()->all());

        Article::create($this->validateArticle());

        $user = new User();
        

        $tag = new Tag();

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
            'body' => 'required'
        ]);
    }
}
