<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'category_id',
        'description',
        'photo',
        'price',
        // Thêm các trường khác nếu cần
    ];
}
