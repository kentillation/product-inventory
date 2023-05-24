<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = "tbl_products";
    protected $fillable = ['name', 'price', 'description', 'unit_id', 'availability', 'quantity', 'category_id'];

    public function category()
    {
        return $this->belongsTo(CategoryModel::class);
    }

    public function unit()
    {
        return $this->belongsTo(UnitModel::class);
    }
}