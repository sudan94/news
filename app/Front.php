<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Front extends Model
{
    protected $table = 'news';
    public function news()
    {
        return $this->hasMany(news::class);
    }
}
