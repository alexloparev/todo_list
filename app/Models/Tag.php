<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "label", "todo_id","color", "created_at", "updated_at"];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function todo(): BelongsToMany
    {
        return $this->belongsToMany(Todo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
