<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = [
        'cron_settings_id',
        'domain',
        'category_selector',
        'title_selector',
        'image_selector',
        'price_bgn_selector',
        'price_pennies_selector',
    ];
    public function cronSetting()
    {
        return $this->belongsTo('App\Cron_setting');
    }
}
