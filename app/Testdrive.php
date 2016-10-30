<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Testdrive
 *
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property integer $age
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Testdrive whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Testdrive whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Testdrive whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Testdrive whereAge($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Testdrive whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Testdrive whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $my_time
 * @method static \Illuminate\Database\Query\Builder|\App\Testdrive whereMyTime($value)
 */
class Testdrive extends Model
{
    protected $table = 'testdrive';
    
    protected $fillable = [
        'email',
        'name',
        'age'
    ];

    protected $dates = ['my_time'];

    // Testdrive::youngMan()->get();
          // scopeYoungMan
    public function scopeYoungMan($query, $age=35)
    {
        return $query->where('age', '<', $age);
    }

    // 'get'.Str::studly($key).'Attribute'
    public function getUserEmailAttribute($value)
    {
        return strtoupper($this->attributes['email']);
    }

    public function addresses()
    {
        return $this->hasMany(\App\Testdrive2::class);
    }
    
    public function addAddress($data)
    {
        $this->addresses()->create($data);
    }
}