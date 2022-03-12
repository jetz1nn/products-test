<?php

namespace App\Domains\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = ['name', 'description', 'brand', 'category', 'price', 'color', 'created_at', 'updated_at'];
    protected $guarded = [];




}
