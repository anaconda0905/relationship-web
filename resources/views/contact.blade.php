@extends('frontLayout.app')
@section('title')
Contact Us
@stop

@section('style')

@stop
@section('content')
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Contact Us</h2>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#" class="active">Contact Us</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- Map -->
<div class="contact_map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14950931.386140963!2d36.04577120183988!3d23.81398535870867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2sus!4v1601649375970!5m2!1sen!2sus"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>

</div>
<!-- End Map -->

<!-- All contact Info -->
<section class="all_contact_info">
    <div class="container">
        <div class="row contact_row">
            <div class="col-sm-6 contact_info">
                <h2>Contact Info</h2>
                <p>
                    We're open for any suggestion or just to have a chat. Let's get in touch. Your message was sent,
                    thank you!
                </p>
                <div class="location">
                    <div class="location_laft">
                        <a class="f_location" href="#">location</a>
                        <a href="#">phone</a>
                        <a href="#">fax</a>
                        <a href="#">email</a>
                    </div>
                    <div class="address">
                        <a href="#">2 Venture Drive, #10-04,
                            Vision Exchange, <br />Saudi Arabia</a>
                        <a href="#">(+966) 583293770</a>
                        <a href="#">(+966) 583293770</a>
                        <a href="#">info@relationshipstatusfinder.com</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 contact_info send_message">
                <h2>Send Us a Message</h2>
                <form class="form-inline contact_box">
                    <input type="text" class="form-control input_box" placeholder="Full Name *">
                    <!-- <input type="text" class="form-control input_box" placeholder="Last Name *"> -->
                    <input type="text" class="form-control input_box" placeholder="Your Email *">
                    <!-- <input type="text" class="form-control input_box" placeholder="Subject"> -->
                    <!-- <input type="text" class="form-control input_box" placeholder="Your Website"> -->
                    <textarea class="form-control input_box" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-default">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End All contact Info -->

@endsection

@section('scripts')


@endsection