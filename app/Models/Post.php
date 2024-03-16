<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /**
     * $id
     * $user_id
     * $location_id
     * @property string $content
     * $created_at
     * $updated_at
     * $deleted_at
     */

    use SoftDeletes;

    /** @var array 差分 */
    // protected $fillable = [
    //     'user_id',
    //     'location_id',
    //     'content',
    // ];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getPaginateByLimit()
    {
        $user_id = auth()->id();
        return $this::where('user_id', $user_id)
            ->with('location')
            ->orderBy('updated_at', 'DESC')
            ->paginate(6);
    }

    /**
     * userテーブルとリレーションする
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * userテーブルとリレーションする
     * @return void
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
