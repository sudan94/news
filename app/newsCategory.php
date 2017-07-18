<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsCategory extends Model
{
    protected $fillable=['name'];
    protected $table='newsCategorys';

    public function news()
    {
        return $this->hasMany(news::class);
    }
}
