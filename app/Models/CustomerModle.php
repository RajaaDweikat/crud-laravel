<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModle extends Model
{
    protected $table='customers';
    protected $fillable=['customerId','customerName'];
    use HasFactory;
}
