<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Mark
 *
 * @property integer $id
 * @property integer $brand_id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Mark whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mark whereBrandId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mark whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mark whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mark whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Mark extends Model
{
    protected $fillable = ['title', 'brand_id'];
}