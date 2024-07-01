
@extends('layouts.nomelayout')

@section('content')

<div class="container-fluid">
    <h4>{{ $fumetto['title'] }}</h4>
    <h4>{{ $fumetto['price'] }}</h4>
    <img src="{{$fumetto['thumb']}}" alt="">

</div>
        
@endsection