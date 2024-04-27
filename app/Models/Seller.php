<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Seller as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller extends Model
{
    use HasFactory;

    //moi san pham thuoc ve 1 danh muc , duoc lien ket qua category_id , va khoa chinh cung la 'category_id'
   
    protected $table = 'tbl_sellers';
    protected $primaryKey = 'id';
    public function product()
    {
        return $this->hasMany(Product::class,'id','id');
    }

   
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'id',
        'name',
        'user_id',
        'phone',
        'img',
        'sex',
        'DOB',
        'address',
        'name_company',
        'type_business',
        
      
    ];
     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
      /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
