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


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Add services</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
<form class="card-body" action="/save_serv" method="POST" enctype="multipart/form-data">
@csrf
<div class="row g-3">
    <div class="col-md-6">
    <label class="form-label" for="multicol-username">services Title</label>
    <input name="name" type="text" id="multicol-username" class="form-control" placeholder="" />
    </div>


    <div class="col-md-6">
        <label for="formFile" class="form-label">created by</label>
        <input class="form-control" name="created_by" type="text" id="formFile">
    </div>



    <div class="col-md-6">
        <label for="formFile" class="form-label">desc</label>
        <input class="form-control" name="description" type="text" id="formFile">
    </div>



    </div>

    <div class="col-md-6">
    <div class="form-password-toggle">
        <label class="form-label" for="multicol-confirm-password">status</label>
        <div class="input-group input-group-merge">
        <label class="switch">
            <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
            <span class="switch-toggle-slider">
            <span class="switch-on"></span>
            <span class="switch-off"></span>
            </span>
            <span class="switch-label"> active </span>
        </label>
        </div>
    </div>
    </div>

</div>


<div class="pt-4">
    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
    <button type="reset" class="btn btn-label-secondary">Cancel</button>
</div>
</form>
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
