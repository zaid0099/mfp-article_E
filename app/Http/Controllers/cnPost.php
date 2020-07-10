<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Postt;
use App\P;
class cnPost extends Controller
{
    public function show($slug){
        //$slug="first-post";
        $post = DB::table('post')->where('slug', $slug)->first();//firstOrFail()
        //$post = P::where('slug', $slug)->first();
        //$post="hhhhhh";
        if(! $post){
            abour(404);
        }

        return view("posts",[
            "post" => $post]);
        
    }
}
