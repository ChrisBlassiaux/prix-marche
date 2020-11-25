@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Edit Product</h2>
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

  <form action="{{ action('ProductController@update', ['product' => $product]) }}" method="POST">
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
          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
      </div>

  </form>
    <!-- / content -->
@endsection