<?php

namespace App;

use App\Mark;
use Illuminate\Database\Eloquent\Model;

class Mods extends Model
{
    protected $fillable = [
        'mark_id', 'color', 'engine_type',
        'box', 'engine_value', 'year'
    ];

    public static $engineType = [
        1 => 'газ',
        2 => 'бензин',
        3 => 'газ/бензин',
        4 => 'дизель'
    ];
    
    public static $box = [
        1 => 'механическая',
        2 => 'автомат',
    ];
    
    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }

    public function getCarNameAttribute()
    {
        return  $this->mark->brand->title . ' ' . $this->mark->title;
    }
}
