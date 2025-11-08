<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Airbnb</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #FF385C;
        }

        .hero-about {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-about h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-about p {
            font-size: 1.3rem;
            opacity: 0.95;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
            text-align: center;
            margin-bottom: 50px;
        }
         header {
            background: #fff;
            padding: 20px 40px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
         nav a {
            margin-left: 30px;
            text-decoration: none;
            color: #222;
            font-weight: 500;
        }


        .package-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }

        .package-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .package-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 16px 16px 0 0;
            text-align: center;
        }

        .package-header.premium {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .package-header.luxury {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .package-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .package-price {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .package-price small {
            font-size: 1rem;
            font-weight: 400;
        }

        .package-body {
            padding: 40px 30px;
        }

        .amenity-item {
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
        }

        .amenity-item:last-child {
            border-bottom: none;
        }

        .amenity-icon {
            color: #667eea;
            margin-right: 12px;
            font-size: 1.2rem;
        }

        .book-btn {
            background: #FF385C;
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .book-btn:hover {
            background: #E31C5F;
            transform: scale(1.05);
            color: white;
        }

        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-top: 80px;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        footer {
            background: #f7f7f7;
            padding: 40px 0;
            margin-top: 0;
        }
    </style>
</head>
<body>
   <header>
        <div class="logo">airbnb</div>
        <nav>
            
            <a href="index">Home</a>
             <a href="about">About</a> 
             <a href="book">Make Booking</a>
        </nav>
    </header>
    <section class="hero-about">
        <div class="container">
            <h1>Discover Your Perfect Stay</h1>
            <p>Choose from our carefully curated packages designed for every type of traveler</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title mt-5">Our Packages</h2>
            <p class="section-subtitle">Select the package that best fits your travel style and budget. Each package includes unique amenities and services.</p>

            <div class="row g-4">
                <!-- Basic Package -->
                <div class="col-md-4">
                    <div class="card package-card">
                        <div class="package-header">
                            <div class="package-title">Single Room</div>
                            <div class="package-price">$20<small>/hour</small></div>
                        </div>
                        <div class="package-body">
                            <h5 class="mb-4">Perfect for Budget Travelers</h5>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Comfortable private room</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Free Wi-Fi access</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Shared kitchen facilities</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>24/7 customer support</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Self check-in option</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Clean linens & towels</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Package -->
                <div class="col-md-4">
                    <div class="card package-card">
                        <div class="package-header premium">
                             <div class="package-title">Doubl Room</div>
                            <div class="package-price">$30<small>/hour</small></div>
                        </div>
                        <div class="package-body">
                            <h5 class="mb-4">Enhanced Comfort & Convenience</h5>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Entire apartment or home</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>High-speed Wi-Fi</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Fully equipped kitchen</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Smart TV with streaming</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Workspace with desk</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Free parking space</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Weekly housekeeping</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Welcome gift basket</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Luxury Package -->
                <div class="col-md-4">
                    <div class="card package-card">
                        <div class="package-header luxury">
                             <div class="package-title">Execuitive Room</div>
                            <div class="package-price">$50<small>/hour</small></div>
                        </div>
                        <div class="package-body">
                            <h5 class="mb-4">Ultimate Premium Experience</h5>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Luxury villa or penthouse</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Premium Wi-Fi & tech</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Gourmet kitchen setup</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Private pool or hot tub</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Concierge service</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Airport pickup & drop-off</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Daily housekeeping</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Premium toiletries & amenities</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Personal chef available</span>
                            </div>
                            <div class="amenity-item">
                                <span class="amenity-icon">✓</span>
                                <span>Priority 24/7 support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to Book Your Dream Stay?</h2>
            <p>Choose your perfect package and start your unforgettable journey today</p>
            <a href="{{route('booking.show')}}" class="book-btn">Book Now</a>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 Airbnb. For demonstration purposes only.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>