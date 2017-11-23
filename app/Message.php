<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = 'messages';

    public $fillable = ['name', 'phone', 'email', 'content'];
}