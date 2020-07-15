<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Сущность объекта недвижимости
 *
 * Class EstateObject
 * @package App\Models
 *
 * @property int $id
 * @property string $description
 * @property string $address
 * @property float $lat
 * @property float $lng
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class EstateObject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'address',
        'lat',
        'lng',
    ];

    /**
     * Параметры объекта недвижимости
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parameters()
    {
        return $this->belongsToMany('Parameter', 'parameters-estate_objects');
    }

    /**
     * Удобства объекта недвижимости
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function conveniences()
    {
        return $this->belongsToMany('Conveniences', 'conveniences-estate_objects');
    }
}
