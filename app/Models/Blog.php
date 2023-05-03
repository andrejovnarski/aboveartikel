<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blogs';
    public $timestamps = true;

    protected $fillable = [
        "title",
        "story",
        "image",
        "category_id",
        "trending"
    ];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
