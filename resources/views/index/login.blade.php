@extends('include.master')
@section('pages')
<!-- ***************************************** -->
                <div class="container">
                                <div class="d-flex justify-content-center h-100">
                                        <div class="card">
                                                <div class="card-header">
                                                        <h3> Sign in</h3>
                                                        <div class="d-flex justify-content-end social_icon">
                                                                <span><i class="bi bi-facebook"></i></span>
                                                                <span><i class="bi bi-google"></i></span>
                                                                <span><i class="bi bi-twitter"></i></span>
                                                        </div>
                                                </div>
                                                <div class="card-body">
                                                        <form action="dashboard/personal.html">
                                                                <div class="input-group form-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="User name">

                                                                </div>

                                                                <div class="input-group form-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                                                                        </div>
                                                                        <input type="password" class="form-control" placeholder="Password">
                                                                </div>

                                                                <div class="row align-items-center remember mb-3">
                                                                        <input type="checkbox">remember me
                                                                </div>


                                                <div class="form-group">
                                                                <a href="{{ url('/ dashboard/personal') }}"> <input type="submit" value="sign ip" class="btn float-right login_btn"></a>
                                                        </div>

                                                        </form>
                                                </div>
                                                <div class="card-footer">
                                                        <div class="d-flex justify-content-center links">
                                                                Dont have account?<a href="/signup"> Create account</a>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                                <a href="#">forgot password</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>


<!-- ****************************************************************88 -->

</body>
</html>
@endsection
