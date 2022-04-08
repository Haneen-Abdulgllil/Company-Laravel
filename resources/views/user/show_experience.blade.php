@extends('include.master-user')
@section('user_pages')


<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">


<!-- / Navbar -->



    <!-- Content wrapper -->
    <div class="content-wrapper m-5">

    <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> show courses</h4>




<!-- Multi Column with Form Separator -->
<div class="card">
<div class="card-body">
<div class="table-responsive text-nowrap">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th>Job Title</th>
        <th>Sub Title</th>
        <th>city</th>
        <th>image</th>
        <th>Company</th>
        <th>Degree</th>
        <th>Time</th>
        <th>Status</th>
        <th>Requirements</th>
        <th>Operation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>

        <a href="" class="btn btn-icon btn-outline-dribbble">
            <i class="tf-icons bx bx-edit-alt me-1"></i>
            </a>


<form action="/" method = "post" class = "d-inline-block">
<input type="hidden" value="1" name="">
<input type="hidden" value="2" name="">

            <button type="submit" class="btn btn-icon btn-outline-dribbble">
            <i class="tf-icons bx bx-trash me-1"></i>
            </button>
</form>
            </td>

        </tr>


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
