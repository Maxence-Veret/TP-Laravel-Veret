@extends('Layouts.base')

@section('content')

{{-- entête sous le menu --}}
<section class="jumbotron text-center">
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
</div>

<div>{{ $products->links() }}</div>


<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>A propos</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informations</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home ms-2"></i> My company</li>
                    <li><i class="fa fa-envelope ms-2"></i> email@example.com</li>
                    <li><i class="fa fa-phone ms-2"></i> + 33 12 14 15 16</li>
                    <li><i class="fa fa-print ms-2"></i> + 33 12 14 15 16</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <button class="btn btn-primary"><a class="text-white text-decoration-none" href="#">Back to top</a></button>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
