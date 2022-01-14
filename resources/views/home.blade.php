@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
    <div class="container">
        <!-- Coundown Section Start -->
        <section class="countdown-timer section-padding">
            <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading-count">
                    <h2 class="wow fadeInDown" data-wow-delay="0.2s">Hi {{ Auth::user()->name }}</h2>
                </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div id="item" class="time-count">
                        <a style="course:pointer" onclick="comEVT()" class="time-entry days"><span>0</span>Completed Event</a>
                        <div class="time-entry hours"><span>00</span> On Going</div>
                        <div class="time-entry minutes"><span>00</span> Upcomming</div>
                        <div class="time-entry seconds"><span><i class="lni lni-user"></i></span> Profile</div> </div>
                </div>
                <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My Calender</a>
                </div>
            </div>
            </div>
        </section>
        <!-- Coundown Section End -->
    </div>    
@endsection
