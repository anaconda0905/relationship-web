@extends('frontLayout.app')
@section('title')
About Us
@stop

@section('style')

@stop
@section('content')
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>About Us</h2>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#" class="active">About Us</a></li>
    </ol>
</section>
<!-- End Banner area -->

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