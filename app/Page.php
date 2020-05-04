<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = [
        'name','featured_image','title','heading','content','no_index','meta_title','meta_description'
    ];
}
