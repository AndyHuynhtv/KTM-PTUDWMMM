<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'category_id',
        'title',
        'price',
        'discount',
        'thumbnail',
        'description',
        'deleted'
    ];

    public function category()
    {
        return $this->hasMany(category::class,'category_id','id');
    }
    public function order_detail()
    {
        return $this->belongsTo(order_detail::class,'order_id','id');
    }
    public function cart()
    {
        return $this->belongsTo(cart::class,'product_id','id');
    }
    public function gallery()
    {
        return $this->hasMany(gallery::class,'product_id','id');
    }
}
