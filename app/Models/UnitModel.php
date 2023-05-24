<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitModel extends Model
{
    use HasFactory;

    protected $table = "tbl_units";
    protected $fillable = ['unit'];

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'unit_id');
    }
}