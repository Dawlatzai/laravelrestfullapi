<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Transaction;
use App\Seller;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    const UNAVAILABLE_PRODUCTS = 'unavailable';
    const AVAILABLE_PRODUCTS = 'available';

    protected $dates = ['deleted_at'];
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
