@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <a href="" data-toggle="modal" data-target="#productModal">
                            <img src="{{ $product->image }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
    
            <!-- Add to cart -->
            <div class="col-12 col-lg-6 add_to_cart_block">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h2>{{ $product->name }}</h2>
                        <p class="price_discounted">{{ $product->price }} €</p>
                        <p class="price_discounted">{{ $product->description }}</p>
                    <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                      
{{--                             
                            <div class="form-group">
                                <label>Quantity :</label>
                               <div class="row">
                                 <div class="col">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                          <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                              <i class="fa fa-minus"></i>
                                          </button>
                                      </div>
                                      <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                                      <div class="input-group-append">
                                          <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                              <i class="fa fa-plus"></i>
                                          </button>
                                      </div>
                                  </div>
                                 </div>
                                 <div class="col">
                                  <span class="fa fa-heart fa-2x text-primary"></span>
                                 </div>
                               </div>
                            </div> --}}
                            <button type="submit"  class="btn btn-success btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Ajouter au panier
                            </button>
                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / content -->
@endsection