<div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p class="mb-0">{{ Session::get('success') }}</p>
      </div>
    @endif
</div>