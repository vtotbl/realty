<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Encore\Admin\Auth\Database\Permission;
use Illuminate\Support\Facades\Auth;

/**
 * Сущность пользователя
 *
 * Class User
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return Permission[]|\Illuminate\Database\Eloquent\Collection
     */
    public function allPermissions() {
        return Permission::all();
    }

    /**
     * Определяет показывать ли меню в админке
     *
     * @param array $roles
     * @return bool
     */
    public function visible(array $roles): bool
    {
        if ($this->allPermissions()->first()->slug === 'all') {
            return true;
        }
        return false;
    }

    /**
     * Метод определяет является ли пользователь админом
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->allPermissions()->first()->slug === 'all';
    }
}
