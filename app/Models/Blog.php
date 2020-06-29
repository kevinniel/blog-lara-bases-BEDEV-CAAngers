<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";

    protected $fillable = [
        "id", "content", "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
