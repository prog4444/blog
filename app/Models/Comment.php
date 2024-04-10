<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'parent_id', 'content', 'rating', 'like', 'dislike',
    ];

    // Скрытые поля не будут возвращаться при выборке
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    // Определение отношения с пользователем
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
