<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guard = ['id'];


    public function category()
    {
    	// Satu Postingan hanya memiliki 1 kategory
    	return $this->belongsTo(Category::class);
    }
    public function author()
    {
    	// satu postingan hanya bisa dimiliki satu user
    	return $this->belongsTo(User::class,'user_id');
    }
}
