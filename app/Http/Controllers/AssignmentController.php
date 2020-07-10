<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AssignmentController extends Controller
{
    public function about()
    {
        $articles = Article::all();
        return view('about',compact('articles'));
    }
}
