<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'description',
    ];
    // In every query load also category info and author info
    protected $with = [
        'category',
        'author',
    ];

    public function scopeFilter($query, array $filters) {
        if (isset($filters['search']) && $filters['search'] !== '') {
            $query->where(
                function ($query) use ($filters) {
                    $query->where('title', 'like', '%' . $filters['search'] . '%')->orWhere('subtitle', 'like', '%' . $filters['search'] . '%');
                }
            );
        }

        if (isset($filters['category']) && $filters['category'] !== '') {
            $query->whereHas(
                'category',
                function ($query) use ($filters) {
                    $query->where('slug', $filters['category']);
                }
            );
        }

        if (isset($filters['author']) && $filters['author'] !== '') {
            $query->whereHas(
                'author',
                function ($query) use ($filters) {
                    $query->where('username', $filters['author']);
                }
            );
        }
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
