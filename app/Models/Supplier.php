<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory; 
    protected $fillable =[
        'first_name','last_name','supplier_image','company_name','vat_num','email','Phone','address_1','address_2','country','district','thana','postal'
    ];
}

