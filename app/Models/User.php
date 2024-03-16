<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /**
     * $id
     * @property string $name
     * @property string $email
     * @property string $password
     * $created_at
     * $updated_at
     * $deleted_at
     */

    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * niceLocationテーブルとリレーションする
     * @return void
     */
    public function niceLocations()
    {
        return $this->hasMany(Nicelocation::class);
    }

    /**
     * niceMapテーブルとリレーションする
     * @return void
     */
    public function niceMaps()
    {
        return $this->hasMany(Nicemap::class);
    }

    /**
     * postテーブルとリレーションする
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
