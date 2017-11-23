<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    public $table = 'site_configs';

    public $timestamps = false;

    public $primaryKey = 'key';
}
