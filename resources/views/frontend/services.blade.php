// resources/views/frontend/services.blade.php

@extends('frontend.layouts.main')
@section('title', 'Services')
@section('main-container')

<main class="site-main page-spacing">
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-padding">
        <div class="page-banner-content">
            <h3>Services</h3>
        </div>
    </div><!-- Page Banner /- -->

    <!-- Welcome Section -->
    <div class="welcome-section container-fluid no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="frontend/images/welcome.png" alt="welcome" width="457" height="700" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 wc-content-box">
                    <div class="welcome-header">
                        <span>30</span><h5>Years</h5> <h5>Of Excellence</h5>
                    </div>
                    <div class="welcome-content">
                        <div class="section-header left-header">
                            <h3>About Us</h3>
                            <h5>Our story</h5>
                            <img src="frontend/images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
                            <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day Got a dream and we just know now we are gonna make our dream come true so get a witch is shawl on a broomstick you can crawl on were gonna pay.</p>
                            <a href="#" title="Read More" class="read-more">Read More</a>
                        </div><!-- Section Header /-  -->
                    </div>
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- Welcome Section /- -->

    <!-- Order Section 1 -->
    <div class="order-section order-section-1 container-fluid no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3>Choose your Flavour</h3>
                <h5>Order Online</h5>
                <img src="frontend/images/section-seprator.png" alt="section-seprator" width="169" height="15">
                <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
            </div><!-- Section Header /-  -->

            @if ($message = Session::get('success'))
            <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                <strong>
                    <h1 style="color:#ffffff">{{$message}}</h1>
                </strong>
            </div>
            @endif

            <form action="{{ route('submitMessage') }}" method="POST" id="orderForm">
                @csrf
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <input type="text" name="name" class="form-control" placeholder="Name *" required />
                    @if ($errors->has('name'))
                    <span class="text-danger">
                        {{$errors->first('name')}}
                    </span>
                    @endif
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <input type="text" class="form-control" name="phonenumber" placeholder="Phone Number *" required />
                    @if ($errors->has('phonenumber'))
                    <span class="text-danger">
                        {{$errors->first('phonenumber')}}
                    </span>
                    @endif
                </div>
                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                    <select name="flavours" class="form-control" required>
                        <option value="" disabled selected>Flavours</option>
                        <option>Chocolate</option>
                        <option>Vanilla</option>
                        <option>Strawberry</option>
                        <option>Mint</option>
                    </select>
                    @if ($errors->has('flavours'))
                    <span class="text-danger">
                        {{$errors->first('flavours')}}
                    </span>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea class="form-control" rows="4" name="youraddress" placeholder="Your Address *" required></textarea>
                    @if ($errors->has('youraddress'))
                    <span class="text-danger">
                        {{$errors->first('youraddress')}}
                    </span>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 order-links">
                    <button type="submit" class="order-now btn btn-primary">Order Now</button>
                    <button type="submit" class="free-delivery btn btn-secondary">Free Delivery</button>
                </div>
                <div class="working-hours">
                    <p><span>working hours:</span> monday to friday : 8.30AM - 10.30PM</p>
                    <p>saturday : 9.00AM - 10.30PM</p>
                    <p>sunday : <span>closed</span></p>
                </div>
            </form>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div><!-- Order Section 1 /- -->

    <!-- Menu Section -->
    <div class="menu-section container-fluid no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3>Our Menu</h3>
                <h5>CREAMY DISHES</h5>
                <img src="frontend/images/section-seprator.png" alt="section-seprator" width="169" height="15">
                <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
            </div><!-- Section Header /-  -->
        </div><!-- Container /- -->

        <div class="row">
            @foreach($menuItems as $item)
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="menu-box">
                    <img src="{{ asset($item->image) }}" alt="menu" />
                    <h3>{{ $item->name }} <span>${{ $item->price }}</span></h3>
                    <p>{{ $item->description }}</p>
                    <a href="#" title="Order Now">Order Now</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="section-padding"></div>
    </div><!-- Menu Section /- -->
</main>
@endsection
