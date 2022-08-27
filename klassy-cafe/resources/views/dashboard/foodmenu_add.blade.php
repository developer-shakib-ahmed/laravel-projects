@extends('layouts.dashboard')

@section('content_dashboard')
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if(session()->has('message'))
          <div class="alert alert-success mb-4">
            {{ session()->get('message') }}
          </div>
        @endif

        <h3 class="card-title mb-4 pt-4 pb-4">Add Food Menu</h3>

        <form class="forms-sample" method="GET" action="{{ route('foodmenu') }}">
          <input type="hidden" name="add" value="foodmenu">
          
          <div class="form-group">
            <label for="name">Food Menu Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter food menu name">
            @error('name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="price">Food Menu Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter food menu price">
            @error('price')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="desc">Food Menu Description</label>
            <textarea class="form-control" id="desc" name="desc" placeholder="Enter food menu description"></textarea>
            @error('price')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
          </div>

          {{-- <div class="form-group">
            <label>Food Menu Image</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" placeholder="Upload food menu image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-danger" type="button">Upload</button>
              </span>
            </div>
          </div> --}}

          <button type="submit" class="btn btn-danger me-2">Add Food Menu</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection