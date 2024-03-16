<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * $id
     * @property string $celebrity
     * @property string $date
     * @property string $place
     * @property string $overview
     * @property string $key_phrase
     * $created_at
     * $updated_at
     * $deleted_at
     */

    /**
     * Undocumented function
     *
     * @return void
     */
    public function paginateLocationByLimit()
    {
        return $this->orderBy('updated_at', 'DESC')->paginate(6);
    }

    /**
     * mapテーブルとリレーションする
     * @return void
     */
    public function maps()
    {
        return $this->hasMany(Map::class);
    }

    /**
     * niceLocationテーブルとリレーションする
     * @return void
     */
    public function niceLocations()
    {
        return $this->hasMany(NiceLocation::class);
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
