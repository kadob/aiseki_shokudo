<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NiceMap extends Model
{
    /**
     * $id
     * $user_id
     * $map_id
     * $created_at
     * $updated_at
     * $deleted_at
     */

    /**
     * mapテーブルとリレーションする
     * @return void
     */
    public function map()
    {
        return $this->belongsTo(Map::class);
    }

    /**
     * userテーブルとリレーションする
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
