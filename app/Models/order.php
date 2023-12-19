<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';

    protected $fillable = [
        'id',
        'user_id',
        'fullname',
        'email',
        'phone_number',
        'address',
        'note',
        'order_date',
        'status',
        'total_money'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id'); 
    }
    public function order_detail()
    {
        return $this->hasMany(order_detail::class,'order_id','id');
    }

}
