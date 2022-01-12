<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'search_key', 'order_index', 'show_in_list'];

    public static function getShowInListData(){
        return self::where('show_in_list', true)->get();
    }
    
    public function Subcategories(){
        return $this -> hasMany(Subcategory::class);
    }

    public function subcategoriesInOrder(){
        return $this -> Subcategories()->orderBy('order_index','desc');
    }

    public function subcategoriesToShow(){
        return $this -> Subcategories()->where('show_in_list', true)->orderBy('order_index','asc');
    }


    public function products(){
        return $this -> hasManyThrough(Product::class, Subcategory::class);
    }
}
