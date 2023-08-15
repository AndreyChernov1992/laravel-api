@extends("layout")

@section("title") Racers @endsection

@section("main-content")

@foreach ($result as $key => $value)

@if (str_contains(url()->full(), $key))
    <ul>
        <li><a href={{route('racer', [
            'driver_id' => $key,
        ])}}>{{$key}}</a> {{$value}}</li>
    </ul>
@endif  
    
@endforeach

@endsection
