<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;
    protected $fillable=['name','email','mobileno','address','country','city','state','pincode','productname','totalbill','paymentmode'];

}
