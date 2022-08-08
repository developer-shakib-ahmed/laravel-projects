@extends('layouts.dashboard')

@section('content_dashboard')
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title mb-4 pb-4">Edit Food Menu</h3>
        <form class="forms-sample" method="GET" action="{{ route('foodmenu') }}">
          <input type="hidden" name="edit" value="foodmenu">

          <div class="form-group">
            <label for="food-menu-name">Food Menu Name</label>
            <input type="text" class="form-control" id="food-menu-name" name="food-menu-name" placeholder="Enter food menu name">
          </div>

          <div class="form-group">
            <label for="food-menu-price">Food Menu Price</label>
            <input type="text" class="form-control" id="food-menu-price" name="food-menu-price" placeholder="Enter food menu price">
          </div>

          <div class="form-group">
            <label for="food-menu-desc">Food Menu Description</label>
            <textarea class="form-control" id="food-menu-desc" name="food-menu-desc" placeholder="Enter food menu description"></textarea>
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