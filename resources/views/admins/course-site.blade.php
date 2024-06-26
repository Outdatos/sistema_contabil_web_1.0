@extends('layouts.main')

@section('title', 'Site')
@section('breadcrumb-item', 'Online Courses')

@section('breadcrumb-item-active', 'Site')

@section('css')
  <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/dropzone.min.css') }}">
  <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/quill.core.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/quill.snow.css') }}">
@endsection

@section('content')

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Site</h5>
            </div>
            <div class="card-body">
              <div id="basicwizard" class="form-wizard row justify-content-center">
                <ul class="nav nav-pills justify-content-center course-wizard">
                  <li class="nav-item" data-target-form="#contactDetailForm">
                    <a href="#contactDetail" data-bs-toggle="tab" data-toggle="tab" class="nav-link active">
                      <div class="course-wizard-num">
                        <span>1</span>
                      </div>
                      <span class="d-none d-sm-inline">Theme</span>
                    </a>
                  </li>
                  <!-- end nav item -->
                  <li class="nav-item" data-target-form="#jobDetailForm">
                    <a href="#jobDetail" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                      <div class="course-wizard-num">
                        <span>2</span>
                      </div>
                      <span class="d-none d-sm-inline">Domain</span>
                    </a>
                  </li>
                  <!-- end nav item -->
                  <li class="nav-item" data-target-form="#educationDetailForm">
                    <a href="#educationDetail" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                      <div class="course-wizard-num">
                        <span>3</span>
                      </div>
                      <span class="d-none d-sm-inline">Bio</span>
                    </a>
                  </li>
                  <!-- end nav item -->
                  <li class="nav-item">
                    <a href="#finish" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                      <div class="course-wizard-num">
                        <span>4</span>
                      </div>
                      <span class="d-none d-sm-inline">Page</span>
                    </a>
                  </li>
                  <!-- end nav item -->
                </ul>
                <div class="tab-content">
                  <div class="tab-pane show active" id="contactDetail">
                    <h5>Logo & Branding</h5>
                    <p class="text-muted mb-4">Incorporate a custom logo and favicon, and fine-tune your school
                      thumbnail to enhance its appearance and branding</p>
                    <div class="row g-3">
                      <div class="col-sm-12 col-md-4">
                        <p class="mb-2">Logo & Branding</p>
                        <form action="/build/json/file-upload.php" class="dropzone">
                          <div class="fallback">
                            <input name="file" type="file" multiple>
                          </div>
                        </form>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <p class="mb-2">Thumbnail</p>
                        <form action="/build/json/file-upload.php" class="dropzone">
                          <div class="fallback">
                            <input name="file" type="file" multiple>
                          </div>
                        </form>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <p class="mb-2">Favicon</p>
                        <form action="/build/json/file-upload.php" class="dropzone">
                          <div class="fallback">
                            <input name="file" type="file" multiple>
                          </div>
                        </form>
                      </div>
                    </div>
                    <hr class="my-4 border-top border-secondary border-opacity-50">
                    <div class="d-flex align-items-center mb-4">
                      <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/admin/img-star.png') }}" alt="img" class="img-fluid">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1">Able pro Branding</h6>
                        <p class="mb-0 text-muted">Personalize your school and eliminate Able Pro branding from your
                          school website, emails, and products. To access this feature, upgrade to the Professional
                          plan.</p>
                      </div>
                    </div>

                    <h5>Font Family</h5>
                    <p class="text-muted mb-4">Change the font used across your school.</p>
                    <div class="card border">
                      <div class="card-body">
                        <select class="form-select w-auto mb-3">
                          <option selected>Open Sans</option>
                          <option value="1">Inter</option>
                          <option value="2">Popince</option>
                          <option value="3">Roboto</option>
                        </select>
                        <p class="mb-0 text-muted">Make your school your own and remove Teachable branding from your
                          school website, emails, and all products. Upgrade to the Professional plan to use this
                          feature.</p>
                      </div>
                    </div>

                    <h5>Color Palette</h5>
                    <p class="text-muted mb-4">Select a predefined color scheme to establish consistency across your
                      site and products. Alternatively, customize your own color palette to reflect your unique branding
                      and preferences.</p>
                    <div class="card border">
                      <div class="card-body">
                        <div class="row g-4 mb-4">
                          <div class="col-md-6 col-xl-3">
                            <div class="color-block">
                              <h6 class="mb-1">Preset 1</h6>
                              <p class="text-muted text-sm mb-2">Theme Color</p>
                              <div class="card border p-3 shadow-none mb-0">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                  <i class="fas fa-circle f-26 text-green-600"></i>
                                  <i class="fas fa-circle f-26 text-green-400"></i>
                                  <i class="fas fa-circle f-26 text-green-200"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <div class="color-block">
                              <h6 class="mb-1">Preset 2</h6>
                              <p class="text-muted text-sm mb-2">Theme Color</p>
                              <div class="card border p-3 shadow-none mb-0">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                  <i class="fas fa-circle f-26 text-yellow-600"></i>
                                  <i class="fas fa-circle f-26 text-yellow-400"></i>
                                  <i class="fas fa-circle f-26 text-yellow-200"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <div class="color-block active">
                              <h6 class="mb-1">Preset 3</h6>
                              <p class="text-muted text-sm mb-2">Theme Color</p>
                              <div class="card border p-3 shadow-none mb-0">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                  <i class="fas fa-circle f-26 text-blue-600"></i>
                                  <i class="fas fa-circle f-26 text-blue-400"></i>
                                  <i class="fas fa-circle f-26 text-blue-200"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <div class="color-block">
                              <h6 class="mb-1">Preset 4</h6>
                              <p class="text-muted text-sm mb-2">Theme Color</p>
                              <div class="card border p-3 shadow-none mb-0">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                  <i class="fas fa-circle f-26 text-gray-600"></i>
                                  <i class="fas fa-circle f-26 text-gray-400"></i>
                                  <i class="fas fa-circle f-26 text-gray-200"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row g-4">
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Nav Bar & Footer Background</h6>
                            <p class="text-muted text-sm mb-2">Fixed, scrolling & email</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-green-400"></i>
                                <p class="mb-0">#96D4BF</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Navigation Bar Link</h6>
                            <p class="text-muted text-sm mb-2">Links when nav bar is fixed</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-red-500"></i>
                                <p class="mb-0">#FF602E</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Navigation Bar</h6>
                            <p class="text-muted text-sm mb-2">Links when nav bar is scrolling</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-green-200"></i>
                                <p class="mb-0">#96C9D4</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Homepage Headings & Subtitle</h6>
                            <p class="text-muted text-sm mb-2">When a background is set</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-gray-400"></i>
                                <p class="mb-0">#A7A6A6</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Course Page Heading & Subtitle</h6>
                            <p class="text-muted text-sm mb-2">When a Background is set</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-gray-200"></i>
                                <p class="mb-0">#E6F5F0</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Headings</h6>
                            <p class="text-muted text-sm mb-2">&lt;h2&gt; to &lt;h5&gt;</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-gray-500"></i>
                                <p class="mb-0">#737373</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Body text</h6>
                            <p class="text-muted text-sm mb-2">&lt;body&gt; , &lt;p&gt;</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-gray-800"></i>
                                <p class="mb-0">#3A3A3A</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-xl-3">
                            <h6 class="mb-1">Buttons & Links</h6>
                            <p class="text-muted text-sm mb-2">&lt;a&gt; , &lt;button&gt;</p>
                            <div class="card border p-3 shadow-none mb-0">
                              <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fas fa-circle f-26 text-green-500"></i>
                                <p class="mb-0">#00C853</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="jobDetail">
                    <div class="row justify-content-center">
                      <div class="col-md-10 col-lg-8 col-xxl-6">
                        <div class="card border text-center">
                          <div class="card-body">
                            <h5>Confirm your domain</h5>
                            <p class="text-muted">If you edit this domain, your school URL will update the next time you
                              log out.</p>
                            <img src="{{ URL::asset('build/images/admin/img-domain.png') }}" alt="images" class="img-fluid mb-4">
                            <div class="mb-3 text-start">
                              <label class="form-label">URL</label>
                              <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                  <div class="input-group">
                                    <input type="text" class="form-control" placeholder="https://admin123-20">
                                    <span class="input-group-text">.ablepro.com</span>
                                  </div>
                                </div>
                                <div class="flex-shrink-0">
                                  <button class="btn btn-primary">Confirm</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="educationDetail">
                    <div class="text-end mb-3">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Bio
                      </button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Bio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="d-flex flex-column gap-3 align-items-center mb-4">
                              <img src="{{ URL::asset('build/images/admin/img-add-user.png') }}" alt="img" class="img-fluid">
                              <button class="btn btn-sm btn-outline-secondary">Add Image</button>
                            </div>
                            <div id="pc-quil-1" style="height: 125px"></div>
                            <div class="mt-3 text-center">
                              <button data-bs-dismiss="modal" class="btn btn-primary">Add Bio</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card table-card border shadow-none">
                      <div class="card-body pb-0">
                        <div class="table-responsive">
                          <table class="table table-hover mb-0" id="pc-dt-simple">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Date/Time</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                      <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user image"
                                        class="img-radius wid-40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <h6 class="mb-0">Airi Satou</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>2023/09/12 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-eye f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-trash f-20"></i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                      <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user image"
                                        class="img-radius wid-40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <h6 class="mb-0">Ashton Cox</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>2023/12/24 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-eye f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-trash f-20"></i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                      <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user image"
                                        class="img-radius wid-40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <h6 class="mb-0">Bradley Greer</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>2022/09/19 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-eye f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-trash f-20"></i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                      <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user image"
                                        class="img-radius wid-40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <h6 class="mb-0">Brielle Williamson</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>2022/08/22 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-eye f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-trash f-20"></i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                      <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="user image"
                                        class="img-radius wid-40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <h6 class="mb-0">Airi Satou</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>2023/09/12 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-eye f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-trash f-20"></i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                      <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user image"
                                        class="img-radius wid-40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <h6 class="mb-0">Ashton Cox</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>2023/12/24 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-eye f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-trash f-20"></i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                      <img src="{{ URL::asset('build/images/user/avatar-7.jpg') }}" alt="user image"
                                        class="img-radius wid-40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <h6 class="mb-0">Bradley Greer</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>2022/09/19 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-eye f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit f-20"></i>
                                  </a>
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-trash f-20"></i>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="finish">
                    <div class="card table-card border shadow-none">
                      <div class="card-header pb-0 pt-2">
                        <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">School Pages</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Product Pages</button>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body pb-0">
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="table-responsive">
                              <table class="table table-hover mb-0">
                                <thead>
                                  <tr>
                                    <th>Page Title</th>
                                    <th>URL</th>
                                    <th>State</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Main Page</td>
                                    <td>/main.page</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Login Page</td>
                                    <td>/login-page.design</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Privacy Policy</td>
                                    <td>/privacy-policy</td>
                                    <td><span class="badge text-bg-danger">Unpublished</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Main Page</td>
                                    <td>/main.page</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Login Page</td>
                                    <td>/login-page.design</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Privacy Policy</td>
                                    <td>/privacy-policy</td>
                                    <td><span class="badge text-bg-danger">Unpublished</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Main Page</td>
                                    <td>/main.page</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Login Page</td>
                                    <td>/login-page.design</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Privacy Policy</td>
                                    <td>/privacy-policy</td>
                                    <td><span class="badge text-bg-danger">Unpublished</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="table-responsive">
                              <table class="table table-hover mb-0">
                                <thead>
                                  <tr>
                                    <th>Page Title</th>
                                    <th>URL</th>
                                    <th>State</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Privacy Policy</td>
                                    <td>/privacy-policy</td>
                                    <td><span class="badge text-bg-danger">Unpublished</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Main Page</td>
                                    <td>/main.page</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Login Page</td>
                                    <td>/login-page.design</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Main Page</td>
                                    <td>/main.page</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Privacy Policy</td>
                                    <td>/privacy-policy</td>
                                    <td><span class="badge text-bg-danger">Unpublished</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Login Page</td>
                                    <td>/login-page.design</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Main Page</td>
                                    <td>/main.page</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Privacy Policy</td>
                                    <td>/privacy-policy</td>
                                    <td><span class="badge text-bg-danger">Unpublished</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Login Page</td>
                                    <td>/login-page.design</td>
                                    <td><span class="badge text-bg-success">Published</span></td>
                                    <td>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-eye f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit f-20"></i>
                                      </a>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-sm-flex wizard justify-content-between mt-3">
                    <div class="first">
                      <a href="javascript:void(0);" class="btn btn-secondary">
                        First
                      </a>
                    </div>
                    <div class="d-sm-flex ">
                      <div class="previous me-2">
                        <a href="javascript:void(0);" class="btn btn-secondary mt-3 mt-md-0">
                          Back To Previous
                        </a>
                      </div>
                      <div class="next">
                        <a href="javascript:void(0);" class="btn btn-secondary mt-3 mt-md-0">
                          Next Step
                        </a>
                      </div>
                    </div>
                    <div class="last">
                      <a href="javascript:void(0);" class="btn btn-secondary mt-3 mt-md-0">
                        Finish
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
@endsection

@section('scripts')
  <!-- file-upload Js -->
  <script src="{{ URL::asset('build/js/plugins/dropzone-amd-module.min.js') }}"></script>
  <script src="{{ URL::asset('build/js/plugins/wizard.min.js') }}"></script>
  <script src="{{ URL::asset('build/js/plugins/quill.min.js') }}"></script>
  <script>
    var quill = new Quill('#pc-quil-1', {
      modules: {
        toolbar: [
          [
            {
              header: [1, 2, false]
            }
          ],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Type your text here...',
      theme: 'snow'
    });
    new Wizard("#basicwizard", {
      validate: true,
      progress: false
    });
  </script>
@endsection
