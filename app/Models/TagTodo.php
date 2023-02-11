<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TagTodo extends Model
{
    use HasFactory;

    protected $fillable = ["tag_id", "todo_id"];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function todo()
    {
        return $this->belongsTo(Todo::class);
    }
}
