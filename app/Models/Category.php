<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guard = ['id'];


    public function posts()
    {
    	// satu kategory bisa dimiliki banyak postingan
    	return $this->hasMany(Post::class);
    }
}
