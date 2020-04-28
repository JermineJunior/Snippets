<?php

namespace App;

class Snippet extends Model
{
    public function path()  
    {
        return '/snippets/{$this->tag->slug}/{$this->id}';
    }

    public function forks()
    {
        return $this->hasMany(Snippet::class,'forked_id');
    }

    public function originalSnippet()
    {
        return $this->belongsTo(Snippet::class,'forked_id');
    }

    public function isAFork()
    {
        return  $this->originalSnippet;
    }

    public function tag()
    {
        return $this->belongsTo('App\Tag'::class,'tag_id'); 
    }
}
