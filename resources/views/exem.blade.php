@extends('layouts.base')

@section('content')

    <div>
        @foreach ($products as $product)
            @include('partials.unite')
        @endforeach
    </div>
    
@endsection