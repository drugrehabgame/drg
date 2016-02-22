@extends('layouts.master')
@section('fullscreen')
    <div class="slideshow">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="{{url('/images/slide1.jpg')}}" />
                </li>
                <li>
                    <img src="{{url('/images/slide2.jpg')}}" />
                </li>
                <li>
                    <img src="{{url('/images/slide3.jpg')}}" />
                </li>
                <li>
                    <img src="{{url('/images/sldie4.jpg')}}" />
                </li>
            </ul>
        </div>
    </div>
@stop
@push('scripts')
<script>
    $('document').ready(function(){
        $('.flexslider').flexslider({
            animation: 'slide',
            slideshowSpeed: 3000
        });
    });
</script>
@endpush
@section('title', 'Login')
@section('content')
<div class="row">
    <div class="col-md-12 text-center slider-container">
        <p>Get yourself free from drugs!.</p>
        <a href="{{url('/register')}}" class="btn btn-success btn-big">click here to create an account</a>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="home-column">
            <h3 class="text-center"><i class="fa fa-comment"></i> Testimonials</h3>
            <div class="scroll">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">This saved my life i'm here to give back</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">A great tool in the arsenal against drug abuse</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="home-column">
            <h3 class="text-center"><i class="fa fa-gift"></i> Rewards</h3>
            <div class="scroll">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                        <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="home-column">
            <h3 class="text-center"><i class="fa fa-cogs"></i> Get involved</h3>
            <div class="min-height-home">
                <p>Like what we do? Drop us a line if you want to [link:support us].</p>
                <p>If you would like to offer your product/service as a reward for our
                    brave fighters, we would love to [link: hear from you].</p>
                <p>Find out what inspires us to to do [link: what we do] and hopefully get inspired yourself.</p>
            </div>
        </div>
    </div>
</div>
@stop