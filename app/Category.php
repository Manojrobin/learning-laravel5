<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function pages()
    {
        return $this->belongsToMany('App\Page');
    }
}
