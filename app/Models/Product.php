<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //tidak langsung menghapus data(masih ada di table sql nya)
    use SoftDeletes;

    protected $fillable = [
        'products_id', 'name', 'slug', 'type', 'description', 'price', 'quantity'
    ];

    protected $hidden = [
        
    ];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class,'products_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
}
