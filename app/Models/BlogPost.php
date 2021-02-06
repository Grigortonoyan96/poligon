<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'category_id','user_id','content_raw','content_html'];

    public function User(){
        return $this->BelongsTo(User::class);
    }

    public function Category(){
        return $this->BelongsTo(BlogCategory::class);
    }

}
