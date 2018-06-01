<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class  CategoryPage extends Model
{
    protected $fillable = [
        'category_id','page_id',
    ];

    protected $table = "category_pages";
}
