@extends('layouts.main')

@section('title', 'Mega Option')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'Mega Option')

@section('css')
@endsection

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
  <!-- [ form-element ] start -->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>Example</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-0">
            <label class="form-label">Choose Delivery Type</label>
            <div class="row mb-2">
              <div class="col-lg-6">
                <div class="border card p-3">
                  <div class="form-check">
                    <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef1">
                    <label class="form-check-label d-block" for="customCheckdef1">
                      <span>
                        <span class="h5 d-block"><strong class="float-end"><span class="badge bg-light-primary">Free</span></strong>Trial plan</span>
                        <span class="f-12 text-muted">
                          Free server basic collection<br>
                          (5 Items are allowed to download)
                        </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="border card p-3">
                  <div class="form-check">
                    <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef2">
                    <label class="form-check-label d-block" for="customCheckdef2">
                      <span>
                        <span class="h5 d-block"><strong class="float-end">$&nbsp;12.46</strong>Premium plan</span>
                        <span class="f-12 text-muted">
                          Free server unlimited approx 255k+ Premium collection<br>
                          (Download unlimited premium items)
                        </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <label class="form-label mb-2 pt-2">Membership Plan</label>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-check my-2">
                  <input type="radio" name="radio2" class="form-check-input input-primary" id="customCheckmem1">
                  <label class="form-check-label" for="customCheckmem1">
                    <span>
                      <span class="h5 d-block">SUPERNET 50</span>
                      <span class="f-12 text-muted"> 360 days Speed upto 50 Mbps Unlimited( Rs. 5094 ) </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-check my-2">
                  <input type="radio" name="radio2" class="form-check-input input-primary" id="customCheckmem2">
                  <label class="form-check-label" for="customCheckmem2">
                    <span>
                      <span class="h5 d-block">SUPERSONIC 75</span>
                      <span class="f-12 text-muted"> 360 days Speed upto 75 Mbps 6000 GB( Rs. 6042 ) </span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h5>Horizontal Form Example</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Choose Delivery Type</label>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-lg-6">
                  <div class="border card p-3">
                    <div class="form-check">
                      <input type="radio" name="radio3" class="form-check-input input-primary" id="customCheckdefhor1">
                      <label class="form-check-label d-block" for="customCheckdefhor1">
                        <span>
                          <span class="h5 d-block"><strong class="float-end"><span class="badge bg-light-primary">Free</span></strong>Trial plan</span>
                          <span class="f-12 text-muted">
                            Free server basic collection<br>
                            (5 Items are allowed to download)
                          </span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="border card p-3">
                    <div class="form-check">
                      <input type="radio" name="radio3" class="form-check-input input-primary" id="customCheckdefhor2">
                      <label class="form-check-label d-block" for="customCheckdefhor2">
                        <span>
                          <span class="h5 d-block"><strong class="float-end">$&nbsp;8.00</strong>Premium plan</span>
                          <span class="f-12 text-muted">
                            Free server unlimited approx 255k+ Premium collection<br>
                            (Download unlimited premium items)
                          </span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row mb-0 pt-3">
            <label class="col-sm-3 col-form-label">Membership :</label>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-check my-2">
                    <input type="radio" name="radio4" class="form-check-input input-primary" id="customCheckmemhor1">
                    <label class="form-check-label" for="customCheckmemhor1">
                      <span>
                        <span class="h5 d-block">SUPERNET 50</span>
                        <span class="f-12 text-muted"> 360 days Speed upto 50 Mbps Unlimited( Rs. 5094 ) </span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-check my-2">
                    <input type="radio" name="radio4" class="form-check-input input-primary" id="customCheckmemhor2">
                    <label class="form-check-label" for="customCheckmemhor2">
                      <span>
                        <span class="h5 d-block">SUPERSONIC 75</span>
                        <span class="f-12 text-muted"> 360 days Speed upto 75 Mbps 6000 GB( Rs. 6042 ) </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- [ form-element ] end -->
</div>
<!-- [ Main Content ] end -->
@endsection
