<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'pid'];


    public static function hasChild($pid)
    {
        return self::where('pid', $pid)->count();
    }
}
