<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NiceLocation extends Model
{
    /**
     * $id
     * $user_id
     * $location_id
     * $created_at
     * $updated_at
     * $deleted_at
     */

    /**
     * userテーブルとリレーションする
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * locationテーブルとリレーションする
     * @return void
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
