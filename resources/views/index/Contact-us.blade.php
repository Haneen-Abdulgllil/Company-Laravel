@extends('include.master')
@section('pages')



            <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact-info">
                                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                                <h2>Contact Us </h2>
                                <h4>we would like to hear from you</h4>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="contact-form ">
                                <div class="form-group">
                                    <label class="control-label  fw-bold p-2 col-sm-2" for="fname">First name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label fw-bold p-2 col-sm-2" for="lname">Last name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label fw-bold p-2 col-sm-2" for="email">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder=" Enter your email" name="email">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label fw-bold p-2 col-sm-2" for="comment">Comments:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default mt-3 ms-5" style="background-color: rgb(228, 128, 5); color: white">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</body>
</html>
@endsection
