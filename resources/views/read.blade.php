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
            </tr>
        </thead>
        <tbody>
            @foreach($carowners as $carowner)
                <tr>
                    <td>{{ $carowner->ownerID }}</td>
                    <td>{{ $carowner->customerID }}</td>
                    <td>{{ $carowner->carID }}</td>
                    <td>{{ $carowner->dateOfPurchest }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @endsection
  
   
        
