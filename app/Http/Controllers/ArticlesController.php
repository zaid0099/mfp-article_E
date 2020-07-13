<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Tag;
use App\Article_tag;
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
        // return $article;
        return view('articles.show', compact('article'));
    }




    public function creat()
    {
        $tags = Tag::all();
        $users = User::all();
        return view("articles.creat", compact("tags", "users") );
    }


    public function store(Request $reguest)
    {
        
        Article::create($this->validateArticle());
        $article = Article::latest()->first();

        // -------- create article_tag --------
        Article_tag::create([
            'article_id' => $article->id,
            'tag_id' => request('tag_id')
        ]);


        return redirect("/articles");


        // $x = request('tag_id');
        // dd($x);

        // dump(request()->all());

        // dd($this->validateArticle());


        // $article_id = $article->id;
        // $tag_id = request('tag_id');
        // Aritcle_tag::create($article_id, $tag_id);
        

        // dd($article->id);

        // Tag::create([
        //     'article_id' => $article->id,
        //     'tag_id' => request('tag_id')
        // ]);


        // dd($this->validateArticle());

        // // Tag::create( request(["tag_id"]) );
        // // Tag::create();
        // // Tag::create(request('tags'));



        // dump(request()->all());
        // $article = new Article();
        // $article->title = request("title");
        // $article->excerpt = request("excerpt");
        // $article->body = request("body");
        // $article->save();

        // $article_tag = new Article_tag();
        // $article_tag->article_id = $article->id;
        // $article_tag->tag_id = request('tag_id');

        // $article_tag->save();

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
