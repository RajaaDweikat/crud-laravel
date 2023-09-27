<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarOwnerModle;

class CarOwnerController extends Controller
{
     public function  index(){
          $carowners = CarOwnerModle::select('*')->get();
          return view('read',['carowners'=>$carowners]);
     } 



   public function storedata(Request $request){
     $data = [
          'customerID' => $request->customerId,
          'CarID' => $request->carId,
          'dateOfPurchest' => $request->dateOfPurchest
      ];
      
      
        CarOwnerModle::create([
               'customerID'=>$data['customerID'],
               'CarID'=>$data['CarID'],
               'dateOfPurchest'=>$data['dateOfPurchest']  

        ]);

        return redirect()->route('back');

   }

   public function viewEdit(){
     $carowners = CarOwnerModle::select('*')->get();
     return view('viewEdit',['carowners'=>$carowners]);

   }

   public function edit($id){
     $dataEdit= CarOwnerModle::where('ownerID',$id)->get()[0];
    return view('update',['dataEdit'=>$dataEdit]);
      
   }

   public function update(Request $request , $id){
     $data = [
          'customerID' => $request->customerId,
          'CarID' => $request->carId,
          'dateOfPurchest' => $request->dateOfPurchest
     ];
      
      
      CarOwnerModle::where('ownerID',$id)->update([
               'customerID'=>$data['customerID'],
               'CarID'=>$data['CarID'],
               'dateOfPurchest'=>$data['dateOfPurchest']  

     ]);

     return redirect()->route('viewEdit');

   }

   public function viewdelete(){
          $carowners = CarOwnerModle::select('*')->get();
          return view('viewDelete',['carowners'=>$carowners]);
     
        }
        public function destroy($id){
          CarOwnerModle::where('ownerID',$id)->delete();
          return redirect()->route('viewDelete');
        }


}
