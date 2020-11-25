@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Modifier la categorie</h2>
          </div>
          <div class="pull-right">
            <a class="btn btn-primary" href={{ url()->previous()}} title="Go back"> Retour</a>
        </div>
      </div>
  </div>

  @if ($errors->any())
      <div class="alert alert-danger">
          <strong>Error!</strong>
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ action('CategoryController@update', ['category' => $category]) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nom</strong>
                  <input type="text" name="name" class="form-control" value=" {{ $category->name }} ">
              </div>
              <div class="form-group">
                <strong>Icon</strong>
                <input type="text" name="icon" class="form-control" value=" {{ $category->icon }} ">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
      </div>

  </form>
    <!-- / content -->
@endsection