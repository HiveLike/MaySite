<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'description',
      'count',
      'order_count',
      'price',
      'image_path'
    ];

    public function getImageUrlAttribute(){
        return url(Storage::url($this->image_path));
    }
}
