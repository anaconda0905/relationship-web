@extends('frontLayout.app')
@section('title')
Find
@stop

@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/nice-select.css') }}">
@endsection

@section('content')

<!-- Login Form -->
<section class="log-in-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 text-center"></div>
            <div class="col-lg-6 text-center">
                <div class="find-form-area">
                    <a class="site-logo site-title" href="{{ route('home') }}">
                        <img src="/images/logo.svg" style="height:100px;" alt="site-logo"></a>
                    @if (Session::has('message'))
                    <div class="alert alert-{{(Session::get('status')=='error')?'danger':Session::get('status')}} "
                        alert-dismissable fade in id="sessions-hide">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{Session::get('status')}}!</strong> {!! Session::get('message') !!}
                    </div>
                    @endif

                    {{ Form::open(array('url' => route('login'), 'class' => 'create-account-form','files' => true)) }}
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <i class="fa fa-list-ol"></i>
                        {!! Form::select('searchClass', ['E-mail', 'Phone Number', 'Snapchat'], null, ['class' =>
                        'searchClass'])
                        !!}
                        {!! $errors->first('searchClass', '<p class="help-block">:message</p>') !!}

                    </div>

                    <div class="form-group">
                        <i class="fa fa-search-plus"></i>
                        {!! Form::text('keyword', null, ['style' => 'padding-left:50px']) !!}
                        {!! $errors->first('keyword', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group form-group--style">
                        <input type="submit" value="Search">
                    </div>
                    @if ($errors->has('global'))
                    <span class="help-block danger">
                        <strong style="color:red">{{ $errors->first('global') }}</strong>
                    </span>
                    @endif
                    <div class="form-group">
                        <i class="fa fa-keyboard-o"></i>
                        <input style="padding-left:50px" name="phone" type="text" placeholder="Result" disabled>
                    </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-3 text-center"></div>
        </div>
    </div>
</section>
<!-- End Login Form -->

@endsection

@section('scripts')
<script src="{{ URL::asset('/js/jquery.nice-select.js') }}"></script>
@endsection