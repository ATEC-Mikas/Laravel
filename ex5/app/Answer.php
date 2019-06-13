<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
