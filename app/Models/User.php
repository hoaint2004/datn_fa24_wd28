<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    const TYPE_ADMIN = 'admin';
    const TYPE_MEMBER = 'user';

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isAdmin()
    {
        return $this->type === self::TYPE_ADMIN;
    }

    public function isMember()
    {
        return $this->type === self::TYPE_MEMBER;
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'user_id', 'id');
    }

    // // Quan hệ một-nhiều với order histories
    // public function orderHistories()
    // {
    //     return $this->hasMany(OrderHistory::class);
    // }
    // // Quan hệ một-nhiều với orders
    public function orders()
    {

        return $this->hasMany(Order::class, 'user_id', 'id');
    }
    
    // // Quan hệ một-nhiều với comments
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }
}
