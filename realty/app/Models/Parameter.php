<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность параметра объекта недвижимости
 *
 * Class Parameter
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 */
class Parameter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Объекты недвижимости, имеющие данный параметр
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function estateObjects()
    {
        return $this->belongsToMany('EstateObject', 'parameters-estate_objects');
    }
}
