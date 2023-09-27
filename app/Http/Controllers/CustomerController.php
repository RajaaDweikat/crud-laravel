<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModle;

class CustomerController extends Controller
{
   public function  index(){
     $customers=customerModle::select('customerId','customerName')->where('customerName','omar')->get();
     return view('test',['customers'=>$customers]);
   } 


}
