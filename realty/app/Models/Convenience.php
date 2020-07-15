<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность удобств
 *
 * Class Convenience
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 */
class Convenience extends Model
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
     * Объекты недвижимости, имеющие данное удобство
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function estateObjects()
    {
        return $this->belongsToMany('EstateObject', 'conveniences-estate_objects');
    }
}
