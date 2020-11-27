@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Modifier le produit</h2>
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
                  <li></li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ action('ProductController@update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nom</strong>
                  <input type="text" name="name" class="form-control" value=" {{ $product->name }} ">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" name="description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix</strong>
                <input type="float" name="price" class="form-control" value=" {{ $product->price }} ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie</strong>
                <select name="category_id" class="form-control">
                    <option value="{{ $categories->find($product->category_id)->id }}">{{ $categories->find($product->category_id)->name }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="{{ $product->image }}" style="width: 100px">
                <input type="file" name="image" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
      </div>

  </form>
    <!-- / content -->
@endsection