<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    protected $fillable = [
        'product_id',
        'user_id',
        'price',
        'num'
    ];

    public function user()
    {
        return $this->belongsTo(user::class,'user_id','id');
    }
    public function product()
    {
        return $this->hasMany(product::class,'product_id','id');
    }
}
