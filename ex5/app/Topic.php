<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
