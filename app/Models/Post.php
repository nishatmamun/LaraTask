<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'userId',
        'title',
        'body',
    ];

    public function users(){
    return $this->belongsTo(User::class, 'userId');
    }

    public function comments(){
    return $this->hasMany(Comment::class, 'postId');
    }
}