<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'job_categories';
    protected $filiable = [
        'job_cat',


    ];
}
