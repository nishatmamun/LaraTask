<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'postId',
        'name',
        'email',
        'body'
    ];

    public function posts(){
    return $this->belongsTo(Post::class, 'postId');
    }
}