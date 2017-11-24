<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'pid'];

    
    public static function getCategoriesByPid($pid)
    {
        return self::select('id', 'name')->where('pid', $pid)->get();
    }
}
