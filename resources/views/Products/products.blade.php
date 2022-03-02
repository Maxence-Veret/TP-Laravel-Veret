@extends('Layouts.base')

@section('content')

<div class="h-100%">

{{-- entête sous le menu --}}
<section class="jumbotron text-center bg-light mb-4">
    <div class="container">
        <h1 class="jumbotron-heading">Produits</h1>
        <p class="lead text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, veniam, eius aliquam quidem rem sunt nam quaerat facilis ex error placeat ipsa illo sed inventore soluta ipsum cumque atque ea?</p>
    </div>
</section>

{{-- debut nav bar --}}
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="/products">Produits</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Filtres</div>
                <form action="" method="post">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input type="checkbox" name="color[]" value="bleu" class="form-check-input" id="color-bleu">
                                        <label class="form-check-label" for="color-bleu">Bleu</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input type="checkbox" name="color[]" value="rouge" class="form-check-input" id="color-red">
                                        <label class="form-check-label" for="color-red">Rouge</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input type="checkbox" name="color[]" value="vert" class="form-check-input" id="color-vert">
                                        <label class="form-check-label" for="color-vert">Vert</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <button class="btn btn-primary w-100">Filtrer</button>
                                </li>
                            </ul>
                </form>
            </div>
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Catégories</div>
                        <ul class="list-group category_block">
                            <li class="list-group-item"><a href="/category">Cras justo odio</a></li>
                            <li class="list-group-item"><a href="/category">Dapibus ac facilisis in</a></li>
                            <li class="list-group-item"><a href="/category">Morbi leo risus</a></li>
                            <li class="list-group-item"><a href="/category">Porta ac consectetur ac</a></li>
                            <li class="list-group-item"><a href="/category">Vestibulum at eros</a></li>
                        </ul>
                    </div>
                <div class="card bg-light mb-3">
                        <div class="card-header bg-success text-white text-uppercase">Dernier produit</div>
{{-- fin nav bard gauche --}}
                </div>
            </div>   
    @foreach($products as $product)
        @include('partials.unite')
    @endforeach
<div class="mb-4">{{ $products->links() }}</div>
        </div>
    </div>
</div>

</div>

@endsection
