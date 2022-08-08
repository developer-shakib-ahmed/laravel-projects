@extends('layouts.dashboard')

@section('content_dashboard')
<div class="row">
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$12.34</h3>
              <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Potential growth</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$17.34</h3>
              <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Revenue current</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$12.34</h3>
              <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-danger">
              <span class="mdi mdi-arrow-bottom-left icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Daily Income</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$31.53</h3>
              <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Expense current</h6>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row justify-content-between">
          <h4 class="card-title">Messages</h4>
          <p class="text-muted mb-1 small">View all</p>
        </div>
        <div class="preview-list">
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="admin/assets/images/faces/face6.jpg" alt="image" class="rounded-circle">
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Leonard</h6>
                  <p class="text-muted text-small">5 minutes ago</p>
                </div>
                <p class="text-muted">Well, it seems to be working now.</p>
              </div>
            </div>
          </div>
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="admin/assets/images/faces/face8.jpg" alt="image" class="rounded-circle">
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Luella Mills</h6>
                  <p class="text-muted text-small">10 Minutes Ago</p>
                </div>
                <p class="text-muted">Well, it seems to be working now.</p>
              </div>
            </div>
          </div>
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="admin/assets/images/faces/face9.jpg" alt="image" class="rounded-circle">
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Ethel Kelly</h6>
                  <p class="text-muted text-small">2 Hours Ago</p>
                </div>
                <p class="text-muted">Please review the tickets</p>
              </div>
            </div>
          </div>
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="admin/assets/images/faces/face11.jpg" alt="image" class="rounded-circle">
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Herman May</h6>
                  <p class="text-muted text-small">4 Hours Ago</p>
                </div>
                <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">To do list</h4>
        <div class="add-items d-flex">
          <input type="text" class="form-control todo-list-input" placeholder="enter task..">
          <button class="add btn btn-primary todo-list-add-btn">Add</button>
        </div>
        <div class="list-wrapper">
          <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Create invoice <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Meeting with Alita <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li class="completed">
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked=""> Prepare for presentation <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Plan weekend outing <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Pick up kids from school <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection