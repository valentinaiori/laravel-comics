@extends('layouts.layout')
@section('content')
    <div class="bg-main">
        <div class="container-card">
            @foreach ($comic as $element)
                <div class="card">
                    <img src="{{ $element['thumb'] }}" alt="">
                    <h6>{{ $element['title'] }}</h6>
                </div>
            @endforeach
        </div>
    </div>
@endsection
