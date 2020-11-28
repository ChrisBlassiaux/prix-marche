@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="container mt-5">
        <h2 class="text-primary">Meilleurs ventes</h2>

        <div class="container my-3 mt-5">
            <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <?php  $i = 0 ?>
                    @foreach ($products as $product)
                        @if($i++ < 6)
                            <div class="carousel-item 
                                @if($i == 1)
                                active
                                @endif
                            ">
                                <div class="col-md-4">
                                <a href="products/{{ $product->id }}">
                                <div class="card">
                                    <img src="{{ $product->image }}"  alt="Card image cap" class="img-fluid" style="height: 300px">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <span>{{ $product->price }}€</span> 
                                    <p class="text-success float-right mb-0">En stock</p>
                                    </div>
                                </div>
                                </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-primary">Découvrez nos offres par catégories <a href="{{ route('products.index') }}" class="text-info h6">Voir tout</a></h2>

        <div class="categories text-white mt-5">
            @foreach ($categories as $category)
                <a href="{{ route('products.index') }}">
                    <div class="category d-flex flex-column align-items-center p-3 rounded">
                        {!! $category->icon !!}
                        <p class="mb-0 mt-2">{{ $category->name }}</p>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
    </div>
  
    <div class="container mt-5 mb-5">
        <h2 class="text-primary">Avoir le choix chez Prix Marché</h2>

        <div class="row mt-5 text-center">
            <div class="col-lg-4">
            <div class="step-buy-img"></div>
            <h3 class="text-primary mt-2">Je choisi</h3>
            <p>parmis des centaines de produits</p>
            </div>
            <div class="col-lg-4">
            <div class="step-buy-img step-buy-img-2"></div>
            <h3 class="text-primary mt-2">Je choisi</h3>
            <p>comment récupérer mes achats : <br>
                Point retrait ou Livraison</p>
            </div>
            <div class="col-lg-4">
            <div class="step-buy-img step-buy-img-3"></div>
            <h3 class="text-primary mt-2">Je choisi</h3>
            <p>le paiement à la réception : <br>
                Carte ou Espèces</p>
            </div>
        </div>
    </div>
  
    <div class="bg-secondary p-3 mt-5">
        <div class="container">
            <div class="row">
            <div class="col-3">
                <h2 class="pt-2 pb-2">ANNONCE COVID</h2>
            </div>
            <div class="col-9 pt-5 pb-5">
                <p class="font-weight-bold">Les ventes sont toujours d'actualité même durant la crise sanitaire. La livraison se fait dans le respect des règles sanitaires.</p>
            </div>
            </div>
        </div>
    </div>
    <!-- / content -->
@endsection
