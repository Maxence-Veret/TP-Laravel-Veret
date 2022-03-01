<div class="col-sm">
    <a href="/product/{{ $product->id }}">
        <div class="card">
            <img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><a href="/product/{{ $product->id }}" title="View Product" class="text-reset text-decoration-none">{{ $product->nom }}</a></h4>
                <p class="card-text">{{ $product->description }}</p>
                <div class="row">
                    <div class="col">
                        <p class="btn btn-danger w-100">{{ $product->prix }}</p>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-success w-100">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>