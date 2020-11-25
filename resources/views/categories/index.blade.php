@extends('layouts.app')

@section('content')
    <!-- content -->
  
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Index categories </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}" title="Créer une catégorie">Ajouter une catégorie</a>
              </div>
          </div>
      </div>
  
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>Vous avez modifié ou supprimé la categorie avec succés</p>
          </div>
      @endif
  
      <table class="table table-bordered table-responsive-lg">
          <tr>
              <th>Numéro</th>
              <th>Nom</th>
              <th>Date de création</th>
              <th>Actions</th>
          </tr>
          @foreach ($categories as $category)
              <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
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
  
      {{-- {!! $products->links() !!} --}}

    <!-- / content -->
@endsection