@extends('frontLayout.app')
@section('title')
Home Page
@stop

@section('style')

@stop
@section('content')


<!-- Slider area -->
<section class="slider_area row m0">
    <div class="slider_inner">
        <div data-thumb="images/slider-2.jpg" data-src="images/slider-2.jpg">
            <div class="camera_caption">
                <div class="container">
                    <h5 class=" wow fadeInUp animated" data-wow-delay="0.3s">Single or Married?</h5>
                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.8s">Easy to find status
                    </h3>
                    <a class=" wow fadeInDown animated" data-wow-delay="0.5s" href="#">
                        <img alt="apple store" src="/images/apple.svg">
                    </a>
                    <a class=" wow fadeInDown animated" data-wow-delay="0.5s" href="#">
                        <img alt=" apple store" src="/images/google.svg">
                    </a>
                </div>
            </div>
        </div>
        <div data-thumb="images/slider-3.jpg" data-src="images/slider-3.jpg">
            <div class="camera_caption">
                <div class="container">
                    <h5 class=" wow fadeInUp animated" data-wow-delay="0.3s">Would you like to have a realtionship?</h5>
                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.8s">Easy to have a realtionship</h3>
                    <a class=" wow fadeInDown animated" data-wow-delay="0.5s" href="#">
                        <img alt="apple store" src="/images/apple.svg">
                    </a>
                    <a class=" wow fadeInDown animated" data-wow-delay="0.5s" href="#">
                        <img alt=" apple store" src="/images/google.svg">
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Slider area -->

<!-- About Us Area -->
<section class="about_us_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>ABOUT US</h2>
            <h3>RELATIONSHIP STATUS FINDER</h3>
            <p>
                Relationship status finder is a service provider that specializes in looking for status accurately.
                Our pivotal function is easy to find status and have or break a realtionship with notification.
            </p>
        </div>
        <div class="row about_row">
            <div class="col-md-4 about-col">
                <div class="dt-sc-icon-box type13 violet " data-delay="0" style="height:330px">
                    <div class="icon-wrapper"><span class="fa fa-dot-circle-o"> </span></div>
                    <div class="icon-content">
                        <h5>Mission</h5>
                        <p>
                            The mission is to get more accurate status whether sending notification to have a
                            relationship or not.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-col">
                <div class="dt-sc-icon-box type13 violet " data-delay="0" style="height:330px">
                    <div class="icon-wrapper"><span class="fa fa-eye"> </span></div>
                    <div class="icon-content">
                        <h5>Vision</h5>
                        <p>
                            The vision of Relationship status finder is to offer easy-to-use graphical user interface to
                            connect with people.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-col">
                <div class="dt-sc-icon-box type13 violet " data-delay="0" style="height:330px">
                    <div class="icon-wrapper"><span class="fa fa-life-ring"> </span></div>
                    <div class="icon-content">
                        <h5>Value Proposition</h5>
                        <p>Every service we offer is based on a belief of connecting.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->


@endsection

@section('scripts')


@endsection