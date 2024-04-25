<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //định nghĩa
    protected $table = "orders";
    protected $primaryKey = "id";
    public $timestamps = true;

}
