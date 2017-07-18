<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';
    protected $fillable=['newsTitle','newsBody','author','category','newsCategory_id','filename','videoName'];

    public function newsCategory()
    {
        return $this->belongsTo(newsCategory::class);
    }
}
