
@extends('Layout')
@section('content')
    <p>This is details page</p>
    @foreach ($details as $detail )
    <p>carName is: {{$detail->carName}}</p>
    <br>
    <span> carCost is: {{$detail->CarCost}}</span>
        
    @endforeach
@endsection