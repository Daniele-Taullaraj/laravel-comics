@extends('layouts.nomelayout')

@section('content')

<h4 class="text-center fw-bold text-danger">TUTTI I COMICS</h4>

<div class="container-fluid">

    <div class="row">

    @foreach($fumetti as $indice=>$fumetto)

            <div class="col-2 bg-dark text-white border" style="height: 28rem">
                <img src="{{$fumetto['thumb']}}" alt="" class="w-100 h-75">
                <a href="/card/{{$indice}}"><h5>{{ $fumetto['title'] }}</h5></a>
            
            <p>{{ $fumetto['price'] }}</p>
            </div>
    @endforeach

    </div>

</div>

@endsection