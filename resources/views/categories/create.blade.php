@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2 class="mb-5 mt-5">Ajouter une catégorie</h2>
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
  <form action="{{ action('CategoryController@store') }}" method="POST" >
      @csrf

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nom:</strong>
                  <input type="text" name="name" class="form-control" placeholder="Cuisine...">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
      </div>

    </form>
    <!-- / content -->
@endsection
