<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'price',
        'num',
        'total_money'
    ];

    public function order()
    {
        return $this->belongsTo(order::class,'order_id','id');
    }

    public function product()
    {
        return $this->hasMany(product::class,'product_id','id');
    }
}
