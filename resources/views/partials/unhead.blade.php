<a href="/product/{{ $product->id }}">
    <div class="col-12 col-md-3">
        <div class="card h-100">
            <div class="card-header bg-success text-white text-uppercase">
                <i class="fa fa-heart"></i> Le plus vendu
            </div>
            <img class="img-fluid border-0" src="{{ $product->image }} alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title text-center"><a href="/product/{{ $product->id }}" title="View Product" class="text-reset text-decoration-none">{{ $product->nom }}</a></h4>
                <p class="card-text">{{ $product->description }}</p>
                <div class="row">
                    <div class="col">
                        <p class="btn btn-danger w-100">{{ $product->prix }}</p>
                    </div>
                    <div class="col">
                        <a href="product.html" class="btn btn-success w-100">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>