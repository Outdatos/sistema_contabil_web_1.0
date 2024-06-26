@extends('layouts.main')

@section('title', 'Invoice')
@section('breadcrumb-item', 'Dashboard')

@section('breadcrumb-item-active', 'Invoice')

@section('css')
@endsection

@section('content')

      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-lg-9">
          <div class="card">
            <div class="card-body">
              <div class="row g-3 mb-3">
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Total</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-warning wid-15 hei-15">
                            <use xlink:href="#custom-arrow-down"></use>
                          </svg>
                          20.3%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">3</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Paid</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-danger wid-15 hei-15">
                            <use xlink:href="#custom-arrow-down"></use>
                          </svg>
                          -8.73%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">5</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Pending</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-success wid-15 hei-15">
                            <use xlink:href="#custom-arrow-up"></use>
                          </svg>
                          10.73%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">20</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Overdue</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-primary wid-15 hei-15">
                            <use xlink:href="#custom-arrow-down"></use>
                          </svg>
                          -4.73%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">5</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="invoice-chart"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="row g-3 text-center">
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-primary rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-document-text"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">All Invoices</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-info rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-archive-book"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Reports</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-success rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-dollar-circle"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Paid</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-warning rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-document-filter"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Pending</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-danger rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-close-circle"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Cancelled</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-primary rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-shopping-bag"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Draft</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Recent Invoice</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti ti-dots-vertical f-18"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-flush border-top-0">
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="{{ URL::asset('build/images/user/avatar-10.jpg') }}" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">David Jones <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">5 min ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Jenny Jones <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">1 day ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Harry Ben <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">3 week ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">5 min ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Jenifer Vintage <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">3 week ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Stebin Ben <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">1 month ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View All</button>
                </div>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Total Expenses</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti ti-dots-vertical f-18"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="total-income-graph"></div>
              <div class="mb-2 mt-3 d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-12"></i>
                  Pending</h6>
                <p class="mb-0 text-muted">$3,202</p>
              </div>
              <div class="mb-2 d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-12"></i>
                  Paid</h6>
                <p class="mb-0 text-muted">$45,050</p>
              </div>
              <div class="mb-2 d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-12"></i>
                  Overdue</h6>
                <p class="mb-0 text-muted">$25,000</p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-primary text-opacity-25 f-12"></i>
                  Draft</h6>
                <p class="mb-0 text-muted">$7,694</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Notification</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti ti-dots-vertical f-18"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-flush border-top-0">
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-success rounded-circle">
                      <i class="ti ti-file-download f-26"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Johnny sent you an invoice billed <a href="#!" class="link-primary">$1,000</a>.</h6>
                    <p class="mb-0 text-muted text-sm">2 August</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-primary rounded-circle">
                      <i class="ti ti-file-text f-26"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Sent an invoice to Aida Bugg amount of <a href="#!" class="link-primary">$200</a>.</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-danger rounded-circle">
                      <i class="ti ti-adjustments f-26"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">There was a failure to your setup</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-primary rounded-circle">
                      <span class="f-24 fw-normal">c</span>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Cristina danny invited to you join Meeting</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-primary rounded-circle">
                      <span class="f-24 fw-normal">c</span>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Cristina danny invited to you join Meeting</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View All</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
  <script src="{{ URL::asset('build/js/plugins/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('build/js/pages/invoice-dashboard.js') }}"></script>
  <!-- [Page Specific JS] end -->
@endsection
