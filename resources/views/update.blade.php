@extends('Layout');

@section('content')
<div class="container p-3 ">

    <form action="{{route('update',$dataEdit->ownerID)}}" method="post" >
        @csrf   
        
        <div class="col-lg-12  ">
          <label for="customerId" class="me-2">CustomerId</label>
          <input type="text" id="customerId" name="customerId" value="{{$dataEdit->customerID}}">
        </div>
    
        <div class="col-lg-12 mt-4">
         <label for="carId" class="me-2">CarId</label>
         <input type="text"  id="carId" name="carId" value="{{$dataEdit->carID}}" >
        </div>
        
    
        
        <div class="col-lg-12 mt-4">
            <label for="buy" class="me-2">Date of Purchest</label>
            <input type="date" id="buy" name="dateOfPurchest" value="{{$dataEdit->dateOfPurchest}}">
        </div>
    
        <button class="mt-3 p-2" type="submit">store data</button>
    
    
      
    
    </form>

</div>


@endsection