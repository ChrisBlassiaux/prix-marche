@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2 class="mb-5 mt-5">Ajouter un produit</h2>
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
  <form action="{{ action('ProductController@store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nom:</strong>
                  <input type="text" name="name" class="form-control" placeholder="Masque uni...">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Description:</strong>
                  <textarea class="form-control" name="description"
                      placeholder="Masque en tissu pour se protéger face à la pandémie..."></textarea>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Prix:</strong>
                  <input type="float" name="price" class="form-control" placeholder="1">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                <select name="category_id" class="form-control">
                    <option value="">--Choisissez une catégorie--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
      </div>

    </form>
    <!-- / content -->
@endsection
