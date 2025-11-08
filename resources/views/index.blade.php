<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb - Book Unique Homes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #222;
        }

        header {
            background: #fff;
            padding: 20px 40px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #FF385C;
        }

        nav a {
            margin-left: 30px;
            text-decoration: none;
            color: #222;
            font-weight: 500;
        }

        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 40px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .search-box {
            background: white;
            border-radius: 50px;
            padding: 10px;
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        }

        .search-input {
            flex: 1;
            padding: 15px 25px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        .search-btn {
            background: #FF385C;
            color: white;
            border: none;
            padding: 15px 35px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-btn:hover {
            background: #E31C5F;
        }

        .intro {
            padding: 80px 40px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .intro h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .intro p {
            font-size: 18px;
            color: #555;
            max-width: 800px;
            margin: 0 auto 60px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .feature {
            text-align: center;
            padding: 30px;
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .feature h3 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .feature p {
            color: #666;
            font-size: 16px;
        }

        footer {
            background: #f7f7f7;
            padding: 40px;
            text-align: center;
            color: #666;
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
    <a href="login"> Login</a>
</nav>
    </header>

    <section class="hero">
        <h1>Find Your Perfect Stay</h1>
        <p>Book unique homes, apartments, and rooms from local hosts around the world</p>
        
    </section>

    <section class="intro">
        <h2>Welcome to Airbnb</h2>
        <p>Airbnb is a trusted community marketplace where people can list, discover, and book unique accommodations around the world. Whether you're looking for a cozy apartment in Paris, a beach house in Bali, or a treehouse in California, we connect travelers with hosts who offer authentic local experiences.</p>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">🏠</div>
                <h3>Unique Homes</h3>
                <p>Stay in handpicked homes with character, from city apartments to countryside villas</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🌍</div>
                <h3>Worldwide Locations</h3>
                <p>Over 7 million listings in more than 220 countries and regions</p>
            </div>
            <div class="feature">
                <div class="feature-icon">✨</div>
                <h3>Trusted Community</h3>
                <p>Read reviews from verified guests and communicate directly with hosts</p>
            </div>
            <div class="feature">
                <div class="feature-icon">💰</div>
                <h3>Best Value</h3>
                <p>Find accommodations that fit your budget with transparent pricing</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Airbnb Clone. For demonstration purposes only.</p>
    </footer>
</body>
</html>