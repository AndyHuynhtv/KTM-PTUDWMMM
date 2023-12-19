<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';

    protected $fillable = [
        'product_id',
        'thumbnail'
    ];
    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }
}
