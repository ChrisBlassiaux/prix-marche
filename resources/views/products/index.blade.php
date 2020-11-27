@extends('layouts.app')

@section('content')
    <!-- content -->
  
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Index produits</h2>
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
  
      <table class="table table-bordered table-responsive-lg">
          <tr>
              <th>Numéro</th>
              <th>Nom</th>
              <th>Description</th>
              <th>Prix</th>
              <th>Categorie</th>
              <th>Image</th>
              <th>Date de création</th>
              <th>Actions</th>
          </tr>
          @foreach ($products as $product)
              <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $categories->find($product->category_id)->name }}</td>
                  <td><img src="{{ $product->image }}" style="width: 100px"></td>
                  <td>{{ $product->created_at }}</td>
                  <td>
                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-secondary">
                        Voir plus
                    </a>
                    
                    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-secondary">
                        Modifier
                    </a>
                    
                    <form id="delete-form" method="POST" action="{{ route('products.destroy', ['product' => $product->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    
                        <div class="form-group">
                          <input type="submit" class="btn btn-danger" value="Supprimer">
                        </div>
                      </form>
                  </td>
              </tr>
          @endforeach
      </table>
  
      {{-- {!! $products->links() !!} --}}

    <!-- / content -->
@endsection