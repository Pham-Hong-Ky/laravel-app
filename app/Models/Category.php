<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'parent_id',
        'is_active',
        'is_delete',
        'image',
    ];

    // Relationship with parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Relationship with children categories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
