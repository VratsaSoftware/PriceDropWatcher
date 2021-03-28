<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cron_setting extends Model
{
    public function websites()
    {
        return $this->hasMany('App\Website');
    }
}
