@extends('layouts.base')

@section('content')

<section class="jumbotron text-center  bg-light mb-4">
    <div class="container">
        <h1 class="jumbotron-heading">Contact</h1>
        <p class="lead text-muted mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus commodi laboriosam nisi possimus nesciunt veritatis a praesentium voluptatibus, sunt cumque ad fuga accusantium totam corrupti cupiditate in libero fugit! Quidem?</p>
    </div>
</section>

<div class="container py-5 my-5">
    <div class="row d-flex justify-content-center " >

            @foreach ($categories as $categorie)
            @include('partials.catunit')
        @endforeach

    </div>

    {{ $categories->links() }}
</div>

@endsection