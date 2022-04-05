@extends('include.master')
@section('pages')
                        <!-- ****************************************** -->
<div class="container">

        <img src="img/about_us.png" alt=""
        style=" width: 70%; margin-left: 15%; margin-top: 5%;"  >

        <div class="row mt-2">
                <div class="col-lg-6 col-sm-12 p-5 mt-5" >
                        <img src="img/building.jpg"  class="rounded"  alt="" style="width: 100%;">
                </div>
                <div class="col-lg-6 col-sm-12 p-5 mt-5">
                                <div class="card mb-4">
                                        <div class="card-body">
                                        <h3> Who are we?</h3>
                                        </div>
                                </div>
                        <p>
                                We strive to provide Googlers and their loved ones with a world-class benefits experience, focused on supporting their physical, financial, and emotional wellbeing. Our benefits are based on data, and centered around our users: Googlers and their families. They’re thoughtfully designed to enhance your health and wellbeing, and generous enough to make it easy for you to take good care of yourself (now, and in the future). So we can build for everyone, together. *
                        </p>
                </div>
        </div>
        <!-- ***********8 -->
        <div class="row mt-5 bg-light flex-row-reverse">
                <div class="col-lg-6 col-sm-12 p-5 mt-5" >
                        <img src="img/team1.jpg"  class="rounded"  alt="" style="width: 100%;">
                </div>
                <div class="col-lg-6 col-sm-12 p-5 mt-5">
                                <div class="card mb-4">
                                        <div class="card-body">
                                        <h3>Our Team</h3>
                                        </div>
                                </div>
                        <p>Together, we create access to information and build products for everyone. </p>
                        <div class="row">
                                <div class="col-6">
                                        <h4 style="color:rgb(6, 6, 179);">Engineering & Tech</h4>
                                        <p>Develop the products and tools of the future for billions of users.</p>
                                </div>
                                <div class="col-6 ">
                                        <h4 style="color:rgb(6, 6, 179);">Sales, Service & Support</h4>
                                        <p>Equip businesses with the right tools to help them grow.</p>
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-6">
                                        <h4 style="color:rgb(6, 6, 179);">People</h4>
                                        <p>Find, grow, and support the people who make Google great.</p>
                                </div>
                                <div class="col-6">
                                        <h4 style="color:rgb(6, 6, 179);">Consumer Hardware</h4>
                                        <p>Make people's lives better through technology.</p>
                                </div>
                        </div>
                </div>
        </div>
        <!-- ***************** -->

        <div class="row mt-2">
                        <div class="col-lg-6 col-sm-12 p-5 mt-5" >
                                        <div id="map-container-google-1" class="z-depth-1-half map-container">
                                                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                                style="border:0" allowfullscreen></iframe>
                                        </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 p-5 mt-5">
                                        <div class="card mb-4">
                                                <div class="card-body">
                                                <h3> Our Location</h3>
                                                </div>
                                        </div>
                                <p>Large or small, each one of our offices is designed to inspire innovation, big ideas, and community.</p>
                                <hr>
                                <div class="row">
                                        <div class="col-3">
                                                        <img src="img/loc1.jpg" alt="" style="width: 100%;">

                                        </div>
                                        <div class="col-3">
                                                        <img src="img/loc2.jpg" alt="" style="width: 100%;">

                                        </div>
                                        <div class="col-3">
                                                        <img src="img/loc3.jpeg" alt="" style="width: 100%;">

                                        </div>
                                        <div class="col-3">
                                                        <img src="img/loc4.jpg" alt="" style="width: 100%;">

                                        </div>
                                </div>
                        </div>
                </div>
</div>


</body>
</html>


@endsection
