<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    /**
     * Follow's owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Followed to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function followed_user()
    {
        return $this->belongsTo(User::class);
    }
}
