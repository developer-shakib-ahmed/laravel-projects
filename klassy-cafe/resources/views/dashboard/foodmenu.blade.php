@extends('layouts.dashboard')

@section('content_dashboard')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
          <h3 class="card-title mb-0">Food Menu</h3>
          <a href="{{ route('foodmenu') }}?add" class="btn btn-success">Add Food Menu</a>
        </div>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td class="py-1">
                  <img src="{{ url('/') }}/assets/images/menu-item-01.jpg" alt="image">
                </td>
                <td>{{ $item['name'] }}</td>
                <td class="desc">{{ $item['desc'] }}</td>
                <td>$ {{ $item['price'] }}</td>
                <td>
                  <a href="{{ route('foodmenu') }}?edit={{ $item['id'] }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('foodmenu') }}?delete={{ $item['id'] }}" class="btn btn-danger ms-2">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="mt-4">
          {{ $data->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection