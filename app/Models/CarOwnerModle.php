<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarOwnerModle extends Model
{
    protected $table='carowner';
    protected $fillable=['ownerID','customerID','CarID','dateOfPurchest'];
    use HasFactory;
}
