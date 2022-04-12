@extends('include.master_dashboard')
@section('admin_pages')


<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">


<!-- / Navbar -->



    <!-- Content wrapper -->
    <div class="content-wrapper m-5">

    <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> show Job</h4>




<!-- Multi Column with Form Separator -->
<div class="card">
<div class="card-body">
<div class="table-responsive text-nowrap">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th>id</th>
        <th>services Title</th>
        <th>created by</th>
        <th>desc</th>
        <th>Status</th>
        <th>Operation</th>
        </tr>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
        <td>{{ $loop->iteration }}</td>
            <td>{{$service->name}}</td>
            <td>{{$service->created_by}}</td>
            <td>{{$service->description}}</td>

<!-- <td>
        <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">

            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
            <img src="{{ $service->image }}" alt="Avatar" class="rounded-circle">
            </li>
        </ul>
        </td> -->

        <td>
        @if($service->is_active==1)
        <span class="badge bg-label-success me-1">مفعل</span>

        @else
        <span class="badge bg-label-danger me-1">موقف</span>
        @endif

    </td>

        <td>
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('edit_services',$service->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
            <a class="dropdown-item" href="{{ route('toggle_services',$service->id) }}"><i class="bx bx-trash me-2"></i> @if($service->is_active==1)disable @else enable @endif</a>
            </div>
        </div>
        </td>
    </tr>
        @endforeach

</div>


</div>



        </div>
        <!-- / Content -->



<!-- / Footer -->


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
</div>



<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>


<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->






<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/libs/hammer/hammer.js"></script>
<script src="assets/vendor/libs/i18n/i18n.js"></script>
<script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="assets/vendor/libs/moment/moment.js"></script>
<script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="assets/vendor/libs/select2/select2.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->
<script src="assets/js/form-layouts.js"></script>

</body>


<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:13 GMT -->
</html>


@endsection
