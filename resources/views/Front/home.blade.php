<html>

<head>
    <title>GetIt</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<link href="https://fonts.google.com/specimen/Lato" rel="stylesheet">
<link rel="stylesheet" href="css/welcome.css">
<link rel="stylesheet" href="css/home.css">

<body>

        <div class="nav card-body">
            <div class=logo>
                <a href="">LOGO</a>
            </div>
            <div class=lists>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="{{route('admin.login')}}">Login</a>
                <a href="{{route('admin.register')}}"class=signup>Signup</a>

            </div>
        </div>


        <div class="main-section">
            <div class="text-content">
                <h1>Find Any Thing</h1>
                <p>Welcome to our world<br>
                    Explore the world and find any thing you want.<br>
                    Welcome to our world<br>
                    Explore the world and find anything you want.
                </p>
                <button>Sign Up</button>
            </div>
            <div class="image-content">
                <img src="/css/raw/girl.png" alt="Shopping Image">
            </div>
        </div>

 <!-- Features Section -->
 <div class="features-section">
    <h2>Our Features</h2>
    <div class="features">
        <div class="feature">
            <h3>Wide Variety</h3>
            <p>Discover a wide range of products tailored for your needs.</p>
        </div>
        <div class="feature">
            <h3>Fast Delivery</h3>
            <p>Get your items delivered to your doorstep in record time.</p>
        </div>
        <div class="feature">
            <h3>Secure Payment</h3>
            <p>Enjoy safe and secure payment options for a worry-free shopping experience.</p>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="testimonials-section">
    <h2>What Our Customers Say</h2>
    <div class="testimonials">
        <div class="testimonial">
            "Absolutely love this platform! It's so convenient and reliable."
        </div>
        <div class="testimonial">
            "Amazing service and great products. Highly recommended!"
        </div>
        <div class="testimonial">
            "Fast delivery and excellent customer support. Couldn't ask for more!"
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="newsletter-section">
    <h2>Stay Updated</h2>
    <p>Subscribe to our newsletter to receive the latest updates and offers.</p>
    <input type="email" placeholder="Enter your email">
    <button>Subscribe</button>
</div>

        <footer>
            Footer Content
        </footer>
</body>

</html>
{{-- @endsection --}}
