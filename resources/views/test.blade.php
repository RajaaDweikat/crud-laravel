@extends('Layout')

@section('content')
    <h1>This is a test view</h1>
    @foreach ($customers as $customer )
    <p>{{$customer->customerId}} {{$customer->customerName}}  </p>   
    @endforeach
    @endsection
  
   
        
