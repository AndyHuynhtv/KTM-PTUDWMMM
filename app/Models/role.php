<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $fillable = [
        'id',
        'name'
    ];

    public function user()
    {
        return $this->hasMany(User::class,'user_id','id');
    }
}
