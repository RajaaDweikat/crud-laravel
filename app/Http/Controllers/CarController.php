<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;

class CarController extends Controller
{
    public function index(){
        $cars=CarModel::select('carID' ,'carName','CarCost')->get();
        return view ('carView',['cars'=>$cars]);
    }

    public function showDetails($id){
        $details=CarModel::select('carName' ,'CarCost')->where('carID',$id)->get();
        return view ('details',['details'=>$details]);
    }
    
}
