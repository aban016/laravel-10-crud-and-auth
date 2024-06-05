<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'tbl_products';

    protected $fillable = [
        'name',
        'price',
        'category',
        'user_id', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
