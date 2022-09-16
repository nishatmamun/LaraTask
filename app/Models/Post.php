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
        'post_id',
        'user_id',
        'title',
        'body',
    ];

    protected $primaryKey = 'post_id';

    public function users(){
    return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(){
    return $this->hasMany(Comment::class, 'post_id');
    }
}