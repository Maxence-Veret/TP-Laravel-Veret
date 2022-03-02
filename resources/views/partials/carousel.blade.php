<div class="carousel-item active">
    <div class="row">
        <div class="col-lg-5">
            <img src="{{ $produc->image }}" class="img-fluid" alt="{{ $produc->nom }}">
        </div>
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-body">
                    <h1>{{ $produc->nom }}</h1>
                    <p>{{ $produc->released_at->translatedFormat('d F Y') }}</p>
                    <div class="mb-4">
                        {{ $produc->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="carousel-item">
    <div class="row">
        <div class="col-lg-5">
            <img src="{{ $produc->image }}" class="img-fluid" alt="{{ $produc->nom }}">
        </div>
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-body">
                    <h1>{{ $produc->nom }}</h1>
                    <p>{{ $produc->released_at->translatedFormat('d F Y') }}</p>
                    <div class="mb-4">
                        {{ $produc->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="carousel-item">
    <div class="row">
        <div class="col-lg-5">
            <img src="{{ $produc->image }}" class="img-fluid" alt="{{ $produc->nom }}">
        </div>
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-body">
                    <h1>{{ $produc->nom }}</h1>
                    <p>{{ $produc->released_at->translatedFormat('d F Y') }}</p>
                    <div class="mb-4">
                        {{ $produc->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>