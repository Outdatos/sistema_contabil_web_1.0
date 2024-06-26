@extends('layouts.main')

@section('title', 'Setting')
@section('breadcrumb-item', 'Membership')

@section('breadcrumb-item-active', 'Setting')

@section('css')
@endsection

@section('content')

      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between py-3">
              <h5>Setting</h5>
              <a class="avtar avtar-s btn-link-secondary" href="#">
                <i class="ti ti-bookmarks f-18"></i>
              </a>
            </div>
            <div class="card-body">
              <div class="card shadow-none border">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avtar avtar-l btn-light-secondary rounded-circle">
                        <i class="ti ti-photo f-18"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 mx-3">
                      <h6 class="mb-0">Airi Satou</h6>
                      <p class="mb-0">Maiduguri, Borno State</p>
                    </div>
                    <div class="flex-shrink-0">
                      <button class="btn btn-sm btn-light-secondary"><i class="ti ti-edit"></i> Edit</button>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="card shadow-none border mb-0 h-100">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-3">
                              <h6 class="mb-0">Email Address</h6>
                            </div>
                            <div class="flex-shrink-0">
                              <button class="btn btn-sm btn-light-secondary"><i class="ti ti-edit"></i> Edit</button>
                            </div>
                          </div>
                          <div class="mb-3 mt-3">
                            <label class="form-label">Your email address is</label>
                            <input type="email" class="form-control" placeholder="Enter email" value="emailis@private.com">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card shadow-none border mb-0 h-100">
                        <div class="card-body">
                          <h6 class="mb-2">Password</h6>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" placeholder="Enter New Password" value="emailis">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="password" class="form-control" placeholder="Enter Current Password" value="emailis">
                              </div>
                            </div>
                          </div>
                          <p>Can’t Remember your current password? <a href="#" class="link-primary text-decoration-underline">Reset your password</a></p>
                          <button class="btn btn-primary">Save Password</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row g-3">
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none border mb-0">
                    <div class="card-body">
                      <h6 class="mb-3 fw-medium">Membership Plan</h6>
                      <h4 class="mb-3 fw-normal text-muted">Addicted $150</h4>
                      <a href="#" class="link-primary d-flex align-items-center gap-2">See more Plan <i class="ti ti-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none border mb-0">
                    <div class="card-body">
                      <h6 class="mb-3 fw-medium">Manage</h6>
                      <h4 class="mb-3 fw-normal text-muted">Membership</h4>
                      <a href="#" class="link-primary d-flex align-items-center gap-2">Update, Cancel and more <i class="ti ti-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-xl-4">
                  <div class="card shadow-none border mb-0">
                    <div class="card-body">
                      <h6 class="mb-3 fw-medium">Renewal Date</h6>
                      <h4 class="mb-3 fw-normal text-muted">120 November, 2024</h4>
                      <a href="#" class="link-primary d-flex align-items-center gap-2">View payment method <i class="ti ti-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card shadow-none border mb-0">
                    <div class="card-body">
                      <h6 class="mb-3">Delete Account</h6>
                      <p class="mb-3">Would you like to delete your account? <br> Deleting your account will remove all the content associated with it.</p>
                      <button class="btn btn-primary">Delete Account</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
@endsection

@section('scripts')
@endsection
