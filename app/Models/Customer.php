<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'khachhang';
    // khai báo các cột trong bảng có thể được save, create thông qua model
    protected $fillable = ['kh_id','tenkh','email','sodienthoai','diachi','gioitinh'];
    public $timestamps = false;
    //khi nao co table users thi se goi den function co ham belongTo de truyen foreign key...
    
    
}
