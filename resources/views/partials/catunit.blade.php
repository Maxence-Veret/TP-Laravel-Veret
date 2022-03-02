        <div class="col-lg-2">
            <div class="card mb-4">
                <div class="card-body">
                    <h4>{{ $categorie->nom }}</h4>
                    {{-- <p>{{ $categorie->nom }} ({{ $categorie->nom->count() }} modeles)</p> --}}
                    {{-- @if ($categorie->products->last())
                    <p>Le dernier film est {{ $categorie->products->last()->nom }}</p>
                    @endif --}}

                    <a class="btn btn-primary" href="/categories/{{ $categorie->id }}">Voir</a>
                    {{-- <form class="d-inline" action="/categories/{{ $category->id }}" method="post">
                        @csrf @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer la catégorie ?')">Supprimer</button>
                    </form> --}}
                </div>
            </div>
        </div>