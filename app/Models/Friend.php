<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'friends';
    protected $guarded = [];
}
