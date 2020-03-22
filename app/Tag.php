<?php

namespace App;

class Tag extends Model
{
    public function snippet()
    {
        return $this->hasMany('App\Snippet'::class);
    }
}
