<?php

namespace App;

use App\Snippet;
class Tag extends Model
{
    public function snippet()
    {
        return $this->hasMany(Snippet::class);
    }
}
