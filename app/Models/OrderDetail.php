<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    //nối bảng 
    public function Product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    //định nghĩa
    protected $table = "order_details";
    protected $primaryKey = "id";
    public $timestamps = true;
}
