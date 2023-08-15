@extends("layout")

@section("title") Racers @endsection

@section("main-content")

@foreach ($result as $key => $value)

    <ul>
        <li><a href={{route('racer', [
            'driver_id' => $key,
        ])}}>{{$key}}</a> {{$value}}</li>
    </ul>
    
@endforeach


@endsection
