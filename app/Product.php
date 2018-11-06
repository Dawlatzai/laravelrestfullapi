<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Transaction;
use App\Seller;

class Product extends Model
{
    const UNAVAILABLE_PRODUCTS = 'unavailable';
    const AVAILABLE_PRODUCTS = 'available';

    protected $fillable = [
        'name',
        'description', 
        'quantity', 
        'image', 
        'status', 
        'seller_id'
    ];

    public function isAvailable() {
        return $this->status == Product::AVAILABLE_PRODUCTS;
    }

    
    public function categories() 
    {
        return $this->belongsToMany(Category::class);
    }

    public function transactions() 
    {
        return $this->hasMany(Transaction::calss);
    }

    public function seller() 
    {
        return $this->belongsTo(Seller::class);
    }
}
