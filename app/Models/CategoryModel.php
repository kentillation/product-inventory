<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = "tbl_category";
    protected $fillable = ['category'];

    public function products()
    {
        return $this->hasMany(ProductsModel::class, 'category_id');
    }
}