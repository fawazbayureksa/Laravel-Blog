<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // agar di controller tidak harus di tulis kan Post::With([..]) untuk fungsi relasinya
    protected $with = ['category','author'];


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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // fungsi cari di models menggunakan fiture scope yang dimiliki eloquent / laravel
    public function scopeFilter($query, array $filters)
    {   

        // Cara 1

        // if (isset($filters['search']) ? $filters['search'] : false); 
        // {
        //     //jika ada title seperti yang dicari , atau ada di dalam body
        // return $query->where('title','like','%'.$filters['search'].'%') 
        //              ->orWhere('body','like','%'.$filters['search'].'%'); 
        // }

        // Cara 2 , agar memudahkan saat mencari data berdasarkan kategori dan lebih mudah dengan fitur collection when() di laravel

        $query->when($filters['search'] ?? false, function ($query, $search){
            return $query->where('title','like','%'.$search.'%')
                         ->orWhere('body','like','%'.$search.'%');
        });
        $query->when($filters['category'] ?? false,function($query, $category){
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug',$category);
            });
        });
        $query->when($filters['author'] ?? false,function($query, $author){
            // author di whereHas diambil dari relasi di atas
            return $query->whereHas('author', function($query) use ($author) {
                $query->where('username',$author);
            });
        });
    }
}
