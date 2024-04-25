<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    //định nghĩa
    protected $table = "order_details";
    protected $primaryKey = "id";
    public $timestamps = true;
}
