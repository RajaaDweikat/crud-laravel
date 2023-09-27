
@extends('Layout')

@section('content')
<div class="container">
    
</div>
<h1> Cars Information</h1>
@foreach ( $cars as $car )
<a href="{{route('info',['id'=>$car->carID])}}"> <p>{{$car->carName}} </p></a>
@endforeach
@endsection
 

