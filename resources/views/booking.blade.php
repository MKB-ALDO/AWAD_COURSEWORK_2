<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Stay - Airbnb</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f8f9fa;
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
        
        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            background: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #FF385C;
        }

        .hero-booking {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0 40px;
            text-align: center;
        }

        .hero-booking h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hero-booking p {
            font-size: 1.2rem;
            opacity: 0.95;
        }

        .booking-container {
            max-width: 800px;
            margin: -40px auto 80px;
            position: relative;
            z-index: 10;
        }

        .booking-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
            padding: 40px;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #222;
        }

        .section-subtitle {
            color: #666;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border-radius: 8px;
            padding: 12px 16px;
            border: 1px solid #ddd;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .package-selector {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .package-option {
            position: relative;
        }

        .package-option input[type="radio"] {
            position: absolute;
            opacity: 0;
        }

        .package-label {
            display: block;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .package-option input[type="radio"]:checked + .package-label {
            border-color: #667eea;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            transform: scale(1.05);
        }

        .package-name {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: #333;
        }

        .package-price {
            color: #667eea;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .summary-box {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin-top: 30px;
        }

        .summary-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .summary-item:last-child {
            border-bottom: none;
            font-size: 1.2rem;
            font-weight: 700;
            color: #667eea;
            margin-top: 10px;
            padding-top: 15px;
            border-top: 2px solid #667eea;
        }

        .submit-btn {
            background: #FF385C;
            color: white;
            border: none;
            padding: 16px 50px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background: #E31C5F;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 56, 92, 0.3);
        }

        footer {
            background: #f7f7f7;
            padding: 40px 0;
        }

        .guest-counter {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .counter-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #667eea;
            background: white;
            color: #667eea;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
        }

        .counter-btn:hover {
            background: #667eea;
            color: white;
        }

        .counter-value {
            font-size: 1.3rem;
            font-weight: 700;
            min-width: 40px;
            text-align: center;
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
    <section class="hero-booking">
        <div class="container">
            <h1>Complete Your Booking</h1>
            <p>Fill in your details and choose your perfect package</p>
        </div>
    </section>

    <div class="booking-container">
        <div class="booking-card">
            <form action="{{route('booking.submit')}}" method="POST" id="bookingForm">
                @csrf
                <!-- Personal Information -->
                <div class="mb-5">
                    <h2 class="section-title">Personal Information</h2>
                    <p class="section-subtitle">We'll use this to confirm your booking</p>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="text" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" id="phone" required>
                        </div>
                    </div>
                </div>

                <!-- Package Selection -->
                <div class="mb-5">
                    <h2 class="section-title">Select Your Package</h2>
                    <p class="section-subtitle">Choose the package that best suits your needs</p>
                    
                    <select name="packageoption" id="" class="form-control bg-light"  required>
                        <option value="" disabled selected>Select a room</option>
                        <option value="singleroom">Single room $20 per hour</option>
                        <option value="double">Double room $30 per hour</option>
                        <option value="executive">Execuitive suite $40 per hour</option>
                    </select>
                </div>

                <!-- Booking Details -->
                <div class="mb-5">
                    <h2 class="section-title">Booking Details</h2>
                    <p class="section-subtitle">When would you like to stay?</p>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="checkIn" class="form-label">Check-in Date</label>
                            <input type="date" name="checkIn" class="form-control" id="checkIn" required>
                        </div>
                        <div class="col-md-6">
                            <label for="checkOut" class="form-label">Check-out Date</label>
                            <input type="date"  name="checkOut" class="form-control" id="checkOut" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Number of Guests</label>
                            <div class="">
                                <input type="number" class="form-control" name="guests">
                            </div>
                        </div>
                        
                    </div>
                </div>

                <button type="submit" class="submit-btn">Confirm Booking</button>
            </form>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 Airbnb Clone. For demonstration purposes only.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
     <script>
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            ;
            
            // Show success message
            alert('Booking confirmed successfully!');
            
            // Redirect to home page
            window.location.href = 'index';
        });
    </script>
   
</body>
</html>