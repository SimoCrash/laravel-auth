@extends('layouts.app');

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <form class="row g-3 needs-validation" novalidate>
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                  <div class="valid-feedback">
                    
                  </div>
                </div>
                <div class="mb-3">
                    <label for="slag" class="form-label">Slag</label>
                    <input type="text" class="form-control" id="slag" name="slag">
                    <div class="valid-feedback">
                      
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Url Immagine</label>
                    <input type="text" class="form-control" id="image" name="image">
                    <div class="valid-feedback">
                      
                    </div>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenuto</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                    <div class="invalid-feedback">
                      
                    </div>
                </div>
                <div class="mb-3">
                    <label for="except" class="form-label">Except</label>
                    <textarea class="form-control" id="except" name="except"></textarea>
                    <div class="invalid-feedback">
                      
                    </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form>
        </form>
    </div>
@endsection