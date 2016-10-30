<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testdrive2 extends Model
{
    protected $table = 'testdrive2';
    
    protected $fillable = ['address'];

    public $timestamps = false;

    public function myMaster()
    {
        return $this->belongsTo(\App\Testdrive::class, 'testdrive_id');
    }
}
