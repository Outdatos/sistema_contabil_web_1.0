<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>@yield('title') | Light Able Laravel 11 Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta
  name="description"
  content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
/>
<meta name="author" content="phoenixcoded" />
<link rel="icon" href="{{ URL::asset('build/images/favicon.svg') }}" type="image/x-icon">
@yield('css')
@include('layouts.head-css')
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body class="layout-advance" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    @include('layouts.layout-detached')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        @if (View::hasSection('breadcrumb-item'))
              @include('layouts.breadcrumb')
          @endif
          <!-- [ Main Content ] start -->
          @yield('content')
      </div>
    </div>
    <!-- [ Main Content ] end -->
    @include('layouts.footer')
    @include('layouts.footerjs')
    <script>
      function changebrand(presetColor) {
        removeClassByPrefix(document.querySelector('body'), 'preset-');
        document.querySelector('body').classList.add(presetColor);
      }
    </script>
    @include('layouts.customizer')
    @yield('scripts')
  </body>
  <!-- [Body] end -->
</html>
