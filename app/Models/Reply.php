<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];

    public function topic(){//一个回复属于一个话题
        return $this->belongsTo(Topic::class);
    }

    public function user(){//一个回复属于一个用户
        return $this->belongsTo(User::class);
    }
}
