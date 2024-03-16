<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    /**
     * @$id
     * $location_id
     * @property string $store_name
     * @property string $address
     * @property string $gourmet
     * @property string $keyword
     * $created_at
     * $updated_at
     * $deleted_at
     */

    /**
     * locationテーブルとリレーションする
     * @return void
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * niceMapテーブルとリレーションする
     * @return void
     */
    public function niceMaps()
    {
        return $this->hasMany(NiceMap::class);
    }
}
