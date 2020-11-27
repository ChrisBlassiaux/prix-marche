
@extends('layouts.app')

@section('content')
    <!-- content -->
  
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Catalogue</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product">Ajouter un produit</a>
              </div>
          </div>
      </div>
  
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>Vous avez modifié ou supprimé le produit avec succés</p>
          </div>
      @endif
  

      <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                    <ul class="list-group category_block">
                        @foreach ($categories as $category)
                            <li class="list-group-item"><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="btn-group w-100" role="group" aria-label="Button group with nested dropdown">
                  <button type="button" class="btn btn-primary mb-2 mb-sm-0 w-100">Trier</button>
                  <div class="btn-group mb-2 mb-sm-0" role="group">
                    <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                      <a class="dropdown-item" href="#">Prix croissant</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="row">

                    @foreach ($products as $product)
                        <div class="col-12 col-md-6 col-lg-4">
                        <div class="card mb-3">
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" title="View Product">
                                <img src="{{ $product->image }}"  alt="Card image cap" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $product->name }}</h4>
                                    <div class="row">
                                        <div class="col">{{ $product->price }} €</div>
                                        <div class="col text-success text-right">En stock</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
  
        </div>
      </div>
    <!-- / content -->
   
@endsection