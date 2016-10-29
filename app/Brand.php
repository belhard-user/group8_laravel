<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Brand
 *
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Brand whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brand whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brand whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Brand extends Model
{
    protected $fillable = ['title'];
}
