<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'picture',
        'description',
        'comments_id',
    ];
}
