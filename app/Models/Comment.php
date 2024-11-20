<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ với comment cha
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    // Quan hệ với các comment con
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('id', 'DESC');
    }

    public function totalComments()
    {
        $count = Comment::count();
        foreach ($this->replies as $reply) {
            $count += $reply->totalComments(); // Đệ quy đếm bình luận con
        }

        return $count;
    }
}
