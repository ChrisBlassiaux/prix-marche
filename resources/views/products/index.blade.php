@extends('layouts.app')

@section('content')
    <!-- content -->
  
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product">Ajouter un produit</a>
              </div>
          </div>
      </div>
  
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p></p>
          </div>
      @endif
  
      <table class="table table-bordered table-responsive-lg">
          <tr>
              <th>Numéro</th>
              <th>Nom</th>
              <th>Description</th>
              <th>Prix</th>
              <th>Date de création</th>
              <th>Actions</th>
          </tr>
          @foreach ($products as $product)
              <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->created_at }}</td>
                  <td>
                      <form action="" method="POST">
  
                          <a href="{{ route('products.show') }}" title="show">
                              <i class="fas fa-eye text-success  fa-lg"></i>
                          </a>
  
                          {{-- <a href="{{ route('products.edit') }}">
                              <i class="fas fa-edit fa-lg"></i>
                          </a> --}}
                          @csrf
                          @method('DELETE')
  
                          <button type="submit" title="delete" style="border: none; background-color:transparent;">
                              <i class="fas fa-trash fa-lg text-danger"></i>
                          </button>
                      </form>
                  </td>
              </tr>
          @endforeach
      </table>
  
      {{-- {!! $products->links() !!} --}}

    <!-- / content -->
@endsection