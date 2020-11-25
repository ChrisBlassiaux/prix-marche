@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>  </h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href={{ url()->previous()}} title="Go back"> Retour</a>
          </div>
      </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $category->name }}
            </div>
            <div class="form-group">
                <strong>Icon:</strong>
                {{ $category->icon }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created</strong>
                {{ $category->created_at }}
            </div>
        </div>
    </div>
    <!-- / content -->
@endsection