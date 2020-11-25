@extends('layouts.app')

@section('content')
    <!-- content -->

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="category-tab" data-toggle="tab" href="#category" role="tab" aria-controls="category" aria-selected="false">Categories</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="produit-tab" data-toggle="tab" href="#produit" role="tab" aria-controls="produit" aria-selected="false">Produits</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="false">Utilisateurs</a>
          </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h2 class="mt-5 mb-3">Dashboard Administrateur</h2>
            <p>Le dashboard permet de parcourir la base de données du site. </p>
            <p>Cela permet de créer, regarder, modifier et/ou supprimer des éléments</p>
        </div>
        <div class="tab-pane fade pt-5" id="category" role="tabpanel" aria-labelledby="category-tab">
            
            <div class="row mb-5">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Les catégories</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('categories.create') }}" title="Créer une catégorie">Ajouter une catégorie</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Icon</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->icon }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                        <a href="{{ route('categories.show', ['category' => $category->id]) }}" class="btn btn-secondary">
                            Voir plus
                        </a>
                        
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-secondary">
                            Modifier
                        </a>
                        
                        <form id="delete-form" method="POST" action="{{ route('categories.destroy', ['category' => $category->id]) }}">
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

        
        </div>
        <div class="tab-pane fade pt-5" id="produit" role="tabpanel" aria-labelledby="produit-tab">
            <div class="row mb-5">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Les produits</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product">Ajouter un produit</a>
                    </div>
                </div>
            </div>
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
            
        </div>
        <div class="tab-pane fade pt-5" id="user" role="tabpanel" aria-labelledby="user-tab">
        
            <div class="row mb-5">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Les utilisateurs</h2>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    
    
    <!-- / content -->
@endsection
