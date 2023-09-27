<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table='cars';
    protected $filaable=['carID','carName','CarCost'];
    use HasFactory;
}
