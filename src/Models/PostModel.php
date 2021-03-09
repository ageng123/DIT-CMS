<?php

namespace Cms\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class PostModel extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['post_author', 'status', 'post_title', 'pid'];
    protected $hidden = [];
    protected $primaryKey = 'pid';
    
}
