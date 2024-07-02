<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">@yield('breadcrumb-item')</a></li>
                    <li class="breadcrumb-item" aria-current="page">@yield('breadcrumb-item-active')</li>
                </ul>
            </div>
            {{-- <div class="col-md-12">
                <div class="page-header-title">
                    <h3 class="mb-0">@yield('breadcrumb-item-active')</h2>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->