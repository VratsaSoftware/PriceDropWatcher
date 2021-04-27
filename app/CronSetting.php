<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CronSetting extends Model
{
    public function websites()
    {
        return $this->hasMany('App\Website');
    }
}
