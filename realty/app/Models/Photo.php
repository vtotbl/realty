<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Сущность для фотографии
 *
 * Class Photo
 * @package App\Models
 *
 * @property int $id
 * @property int $user_id
 * @property string $path
 * @property Carbon $uploaded_at
 */
class Photo extends Model
{
    /**
     * Дата создания записи - дата загрузки фото
     */
    const CREATED_AT = 'uploaded_at';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'path',
        'uploaded_at',
    ];

    /**
     * Атрибуты, которые должны быть преобразованы к датам.
     *
     * @var array
     */
    protected $dates = [
        'uploaded_at',
    ];
}
