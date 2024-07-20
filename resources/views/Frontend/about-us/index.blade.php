@extends('Frontend.layouts.layout')

@section('title', 'about-us')

<style>
    .about-text {
        font-size: 1.2rem;
        line-height: 1.6;
    }

    h2 {
        margin-top: 2rem;
    }

    .card {
        border: none;
        background-color: #f8f9fa;
        border-radius: 10px;
    }

    .card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .card p {
        font-size: 1rem;
        color: #6c757d;
    }

    .fa-3x {
        color: #ff6347;
    }

    .mt-5 {
        margin-top: 3rem;
    }
</style>

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col text-center">
                <h1>About Howdy Food Express</h1>
                <p class="lead">Discover and enjoy the delicious world of food trucks, restaurants, and independent chefs
                    in Texas!</p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-6">
                <img style="height: 300px !important" src="images/howdy_special_photo.jpg" class="w-50 object-fit-cover"
                    alt="Delicious Food">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <p class="about-text">Howdy Food Express is your one-stop shop to discover and enjoy the delicious world of
                    food trucks, restaurants, and independent chefs in Texas! We connect you with a diverse range of
                    culinary creators, all conveniently through our user-friendly app.</p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col text-center">
                <h2>Here's How Howdy Makes Flavor Exploration a Breeze</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-utensils fa-3x mb-3"></i>
                <h3>Endless Culinary Adventures</h3>
                <p>Browse a vibrant marketplace featuring everything from gourmet tacos and mouthwatering BBQ to creative
                    fusion cuisine and hidden-gem restaurants.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-instagram fa-3x mb-3"></i>
                <h3>Insta-Hungry? We Got You</h3>
                <p>Seamless integration with Instagram lets you discover trending food trucks, restaurants, and chefs, along
                    with their latest creations.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-mobile-alt fa-3x mb-3"></i>
                <h3>Order with a Tap</h3>
                <p>Simply browse menus, customize your order, and pay securely within the app.</p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-4 text-center">
                <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                <h3>Real-Time Tracking</h3>
                <p>Never miss a minute! Track your order's progress in real-time so you know exactly when your culinary
                    adventure arrives.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-heart fa-3x mb-3"></i>
                <h3>Support Local Heroes</h3>
                <p>Skip the chains and support the passionate chefs, restaurateurs, and food truck owners who bring unique
                    flavors to your city.</p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col text-center">
                <h2>Benefits for Food Businesses (Food Trucks, Restaurants, Chefs)</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-laptop fa-3x mb-3"></i>
                <h3>Effortless Online Ordering</h3>
                <p>Reach a wider audience and streamline your ordering process with our user-friendly platform.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-chart-line fa-3x mb-3"></i>
                <h3>Boost Your Instagram Presence</h3>
                <p>Showcase your mouthwatering creations and connect directly with hungry foodies.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-chart-pie fa-3x mb-3"></i>
                <h3>Valuable Data & Analytics</h3>
                <p>Gain insights into customer preferences and optimize your offerings for success.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-tasks fa-3x mb-3"></i>
                <h3>Simplified Management</h3>
                <p>Manage orders, track sales, and connect with customers all in one place.</p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col text-center">
                <h2>Join the Howdy Movement!</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-download fa-3x mb-3"></i>
                <h3>Download the App</h3>
                <p>Available for iOS and Android, Howdy makes food cravings a thing of the past.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-hashtag fa-3x mb-3"></i>
                <h3>Follow Us on Instagram</h3>
                <p>Discover trending food trucks, restaurants, and chefs, get exclusive deals, and be part of the Howdy
                    community.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-hands-helping fa-3x mb-3"></i>
                <h3>Become a Food Partner</h3>
                <p>Empower your food business and reach new customers with Howdy's innovative platform.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h3>Howdy Food Express - It's More Than Food Delivery, It's a Celebration of Local Flavor!</h3>
    </div>

@endsection
