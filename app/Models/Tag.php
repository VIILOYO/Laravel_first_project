<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts(): BelongsToMany
    {
        return $this->BelongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id');
    }
}
