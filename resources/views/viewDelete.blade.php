@extends('Layout')

@section('content')
    <h1>This is a test view</h1>
    <table>
        <thead>
            <tr>
                <th>Owner ID</th>
                <th>Customer ID</th>
                <th>Car ID</th>
                <th>date Of Purchest</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carowners as $carowner)
                <tr>
                    <td class="p-2">{{ $carowner->ownerID }}</td>
                    <td class="p-2">{{ $carowner->customerID }}</td>
                    <td class="p-2">{{ $carowner->carID }}</td>
                    <td class="p-2">{{ $carowner->dateOfPurchest }}</td>
                    <td class="p-2"><a href="{{route('delete',['id'=>$carowner->ownerID])}}" class="btn btn-primary btn-sm">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @endsection
  
   
        
