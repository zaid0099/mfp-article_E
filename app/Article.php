<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('article.show', $this);
    }

    public function author()
    {
        // $this->belongsToMany(User::class);
        return $this->belongsTo(User::class, 'user_id');

    }

    // public function getRoutKeyName() //OVER WRITE INSTEAD  (( ID ))
    // {
    //     return 'slug' // Article::where('slug', $article)->first()
    // }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


}



// <?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Article extends Model
// {

// }
