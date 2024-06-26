@extends('layouts.main')

@section('title', 'Form Option')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'Form Option')

@section('css')
@endsection

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
  <!-- [ form-element ] start -->
  <div class="col-sm-6">
    <!-- Basic Inputs -->
    <div class="card">
      <div class="card-header">
        <h5>Basic Inputs</h5>
      </div>
      <div class="card-body">
        <div class="alert alert-primary">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                </div>
                <div class="flex-grow-1 ms-3"> Basic HTML form components with custom style. </div>
            </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control form-control" placeholder="email@company.com">
        </div>
        <div class="mb-3">
          <label class="form-label" for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          <small>Your password must be between 8 and 30 characters.</small>
        </div>
        <div class="mb-3">
          <label class="form-label" for="exampleSelect1">Select</label>
          <select class="form-select" id="exampleSelect1">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label" for="exampleSelect2">Multiple select</label>
          <select multiple="" class="form-select" id="exampleSelect2">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
          </select>
          <small>Hold shift or press ctrl for multi select.</small>
        </div>
        <div class="mb-0">
          <label class="form-label" for="exampleTextarea">Textarea</label>
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>
      </div>
      <div class="card-footer pt-0">
        <button class="btn btn-primary me-2">Submit</button>
        <button type="reset" class="btn btn-light">Reset</button>
      </div>
    </div>
    <!-- HTML Input Types -->
    <div class="card">
      <div class="card-header">
        <h5>HTML Input Types</h5>
      </div>
      <div class="card-body">
        <div class="alert alert-primary">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                </div>
                <div class="flex-grow-1 ms-3">
              Here are the different input types you can use in HTML. Check more at
              <a href="https://www.w3schools.com/html/html_form_input_types.asp" rel="nofollow">W3Schools</a>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="demo-text-input" class="form-label">Simple Input Text</label>
          <input class="form-control" type="text" value="John Doe" id="demo-text-input">
        </div>
        <div class="mb-3">
          <label for="demo-number-input" class="form-label">Number</label>
          <input class="form-control" type="number" value="100" id="demo-number-input">
        </div>
        <div class="mb-3">
          <label for="demo-tel-input" class="form-label">Telephone</label>
          <input class="form-control" type="tel" value="+918888888888" id="demo-tel-input">
        </div>
        <div class="mb-3">
          <label for="demo-email-input" class="form-label">Email</label>
          <input class="form-control" type="email" value="demo@example.com" id="demo-email-input">
        </div>
        <div class="mb-3">
          <label for="demo-password-input" class="form-label">Password</label>
          <input class="form-control" type="password" value="password123" id="demo-password-input">
        </div>
        <div class="mb-3">
          <label for="demo-input-file" class="form-label">File</label>
          <input class="form-control" type="file" id="demo-input-file">
        </div>
        <div class="mb-3">
          <label for="demo-multi-input-file" class="form-label">Multi Files</label>
          <input class="form-control" type="file" id="demo-multi-input-file" multiple>
          <small>Try selecting more than one file when browsing for files.</small>
        </div>
        <div class="mb-3">
          <label for="demo-URL-input" class="form-label">URL</label>
          <input class="form-control" type="url" value="https://validator.w3.org/" id="demo-URL-input">
        </div>
        <div class="mb-3">
          <label for="demo-search-input" class="form-label">Search</label>
          <input class="form-control" type="search" value="Best Admin Template" id="demo-search-input">
          <small>a search field behaves like a regular text field</small>
        </div>
        <div class="mb-3">
          <label for="demo-datetime-local" class="form-label">Date Time Local</label>
          <input class="form-control" type="datetime-local" value="2021-12-31T04:03:20" id="demo-datetime-local">
        </div>
        <div class="mb-3">
          <label for="demo-date-only" class="form-label">Date only</label>
          <input class="form-control" type="date" value="2021-12-31" id="demo-date-only">
        </div>
        <div class="mb-3">
          <label for="demo-time-only" class="form-label">Time only</label>
          <input class="form-control" type="time" value="04:03:20" id="demo-time-only">
        </div>
        <div class="mb-3">
          <label for="demo-month-only" class="form-label">Month only</label>
          <input class="form-control" type="month" value="2021-12" id="demo-month-only">
        </div>
        <div class="mb-3">
          <label for="demo-week-only" class="form-label">Week only</label>
          <input class="form-control" type="week" value="2021-W41" id="demo-week-only">
        </div>
        <div class="mb-3">
          <label for="demo-color-input" class="form-label">Color</label>
          <input class="form-control form-control-color-picker" type="color" value="#5052FC" id="demo-color-input">
        </div>
        <div class="mb-0">
          <label for="demo-range-input" class="form-label">Range</label>
          <input class="form-range" type="range" min="0" max="50" id="demo-range-input">
        </div>
      </div>
      <div class="card-footer pt-0">
        <button class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-secondary">Cancel</button>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h5>Sizing</h5>
      </div>
      <div class="card-body">
        <div class="alert alert-primary">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                </div>
                <div class="flex-grow-1 ms-3">
              Input sizing using <code>.form-control-lg</code> and <code>.form-control-sm</code>
              class.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
          <small><code>.form-control-sm</code></small>
        </div>
        <div class="mb-3">
          <input class="form-control" type="text" placeholder="Default Input">
          <small><code>.form-control</code></small>
        </div>
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
          <small><code>.form-control-lg</code></small>
        </div>
        <hr>
        <div class="mb-3">
          <label class="form-label">Large select</label>
          <select class="form-select form-select-lg">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Default select</label>
          <select class="form-select">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
          </select>
        </div>
        <div class="mb-0">
          <label class="form-label">Small select</label>
          <select class="form-select form-select-sm">
            <option>Option 1</option>
            <option>Option 2</option>
          </select>
        </div>
      </div>
      <div class="card-footer pt-0">
        <button class="btn btn-primary me-2">Submit</button>
        <button type="reset" class="btn btn-light">Reset</button>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h5>Input Attributes </h5>
      </div>
      <form>
        <div class="card-body">
          <div class="alert alert-primary">
            <div class="d-flex align-items-center">
                <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                <div class="flex-grow-1 ms-3">
                Examples of <code>autofocus, value, readonly, disabled, required</code>
                attributes in Input .
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Auto focus</label>
            <input type="email" class="form-control" placeholder="Enter email">
            <small>autofocus on page load</small>
          </div>
          <div class="mb-3">
            <label class="form-label">Value</label>
            <input type="text" class="form-control" value="John Doe">
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-required">Required</label>
            <input type="text" class="form-control" id="example-required" required>
            <small>Submit the form to see it in action</small>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-read-only">Readonly</label>
            <input type="text" class="form-control" value="demo@email.com" id="example-read-only" readonly>
            <small>The input <code>readonly</code> attribute specifies that an input field is read-only</small>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-disabled">Disabled</label>
            <input type="text" class="form-control" value="26" id="example-disabled" disabled>
            <small>The value of a <code>disabled</code> input field will not be sent when submitting the form</small>
          </div>
          <div class="mb-0">
            <label class="form-label" for="example-disabled-select">Disabled select</label>
            <select class="form-select" id="example-disabled-select" disabled>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
        </div>
        <div class="card-footer pt-0">
          <button class="btn btn-primary me-2">Submit</button>
          <button type="reset" class="btn btn-light">Reset</button>
        </div>
      </form>
    </div>
    <div class="card">
      <div class="card-header">
        <h5>Advance Input attributes </h5>
      </div>
      <form>
        <div class="card-body">
          <div class="alert alert-primary">
            <div class="d-flex align-items-center">
                <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                <div class="flex-grow-1 ms-3">
                Examples of <code>maxlength, min, max, step, pattern, list</code> attributes of Input.
                <br>
                Submit form for checkout attribute functionality.
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-max-length">Max Length</label>
            <input type="text" class="form-control" placeholder="Enter PIN" id="example-max-length" maxlength="4">
            <small>maxlength set to 4 characters</small>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-datemax">Date</label>
            <input type="date" class="form-control" id="example-datemax" max="1979-12-31">
            <small>Enter a date before 1980-01-01</small>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-datemin">Date</label>
            <input type="date" class="form-control" id="example-datemin" min="2000-01-02">
            <small>Enter a date after 2000-01-01</small>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-quantity">Quantity</label>
            <input type="number" class="form-control" id="example-quantity" min="1" max="5">
            <small>i.e.between 1 and 5</small>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-steps">Points</label>
            <input type="number" class="form-control" id="example-steps" step="3" value="1">
            <small>step set to 3</small>
          </div>
          <div class="mb-3">
            <label class="form-label" for="example-country-code">Country code</label>
            <input type="text" class="form-control" id="example-country-code" pattern="[A-Za-z]{3}" title="Three letter country code">
            <small><code>pattern</code> attribute - three letter country code</small>
          </div>
          <div class="mb-0">
            <label class="form-label" for="example-data-list">List (Browsers)</label>
            <input type="text" class="form-control" id="example-data-list" list="browsers">
            <datalist id="browsers">
              <option value="Internet Explorer"> </option>
              <option value="Firefox"> </option>
              <option value="Chrome"> </option>
              <option value="Opera"> </option>
              <option value="Safari"> </option>
            </datalist>

            <small>The datalist tag is not supported in Safari 12.0 (or earlier).</small>
          </div>
        </div>
        <div class="card-footer pt-0">
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button type="reset" class="btn btn-light">Reset</button>
        </div>
      </form>
    </div>
    <!-- [ form-element ] end -->
  </div>
  <!-- [ form-element ] end -->
</div>
<!-- [ Main Content ] end -->
@endsection
