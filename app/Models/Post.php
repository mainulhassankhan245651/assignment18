<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;
    protected $table = 'posts';
    protected $fillable = ['titrle','short_des'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function getTotalPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
    
    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
   
}
