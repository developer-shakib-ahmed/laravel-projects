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
              <tr>
                <td class="py-1">
                  <img src="{{ url('/') }}/assets/images/menu-item-01.jpg" alt="image">
                </td>
                <td> Herman Beck </td>
                <td class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum eligendi optio eveniet facere aliquam fugiat. Ipsam asperiores ipsum, sunt veritatis accusamus repellendus fuga illum sed reprehenderit, eum temporibus assumenda mollitia.</td>
                <td> $ 77.99 </td>
                <td>
                  <a href="{{ route('foodmenu') }}?edit=1" class="btn btn-warning">Edit</a>
                  <a href="{{ route('foodmenu') }}?delete=1" class="btn btn-danger ms-2">Delete</a>
                </td>
              </tr>

              <tr>
                <td class="py-1">
                  <img src="{{ url('/') }}/assets/images/menu-item-02.jpg" alt="image">
                </td>
                <td> Messsy Adam </td>
                <td class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sint, in consectetur dolores maxime voluptatum officia ipsum possimus illo adipisci hic quos repellendus maiores temporibus officiis. Architecto minima dolorem accusamus?</td>
                <td> $245.30 </td>
                <td>
                  <a href="{{ route('foodmenu') }}?edit=2" class="btn btn-warning">Edit</a>
                  <a href="{{ route('foodmenu') }}?delete=2" class="btn btn-danger ms-2">Delete</a>
                </td>
              </tr>              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection