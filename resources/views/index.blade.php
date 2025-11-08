<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kampala Stays – Book Unique Homes</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" />

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
      line-height: 1.6;
      color: #222;
    }

    header {
      background: #fff;
      padding: 20px 40px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
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

    .intro {
      padding: 80px 40px;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
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
      color: #FF385C;
    }

    .property-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }

    .property-card:hover {
      transform: translateY(-5px);
    }

    .property-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .property-card-body {
      padding: 15px;
    }

    .testimonials {
      background: #f9f9f9;
      padding: 60px 40px;
      text-align: center;
    }

    .testimonial {
      max-width: 600px;
      margin: 0 auto 30px;
      font-style: italic;
      color: #444;
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
  <header class="d-flex justify-content-between align-items-center">
    <div class="logo">Kampala Stays</div>
    <nav class="d-flex">
      <a href="index">Home</a>
      <a href="about">About</a>
      <a href="book">Make Booking</a>
      <a href="login">Login</a>
    </nav>
  </header>

  <section class="hero">
    <h1>Discover Unique Stays in Kampala</h1>
    <p>Book cozy apartments, villas, and guesthouses managed by a trusted local host</p>
  </section>

  <section class="intro">
    <h2>Welcome to Kampala Stays</h2>
    <p>We offer a curated selection of homes across Kampala, all managed by a single trusted host. Whether you're visiting for business, leisure, or a weekend getaway, our properties provide comfort, convenience, and a true taste of Ugandan hospitality.</p>

    <div class="features">
      <div class="feature">
        <div class="feature-icon"><i class="bi bi-house-door"></i></div>
        <h3>Multiple Locations</h3>
        <p>Choose from homes in Kololo, Bugolobi, Muyenga, Ntinda, and more</p>
      </div>
      <div class="feature">
        <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
        <h3>Clean & Secure</h3>
        <p>All properties are professionally cleaned and monitored for your safety</p>
      </div>
      <div class="feature">
        <div class="feature-icon"><i class="bi bi-wifi"></i></div>
        <h3>Modern Amenities</h3>
        <p>Enjoy Wi-Fi, smart TVs, hot showers, and fully equipped kitchens</p>
      </div>
      <div class="feature">
        <div class="feature-icon"><i class="bi bi-calendar-check"></i></div>
        <h3>Easy Booking</h3>
        <p>Book directly through our platform with instant confirmation</p>
      </div>
    </div>
  </section>

  <section class="container my-5">
    <h2 class="text-center mb-4">Featured Properties</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="property-card">
          <img src="pics/apt1.jpg" alt="Kololo Apartment">
          <div class="property-card-body">
            <h5>Modern Apartment – Kololo</h5>
            <p>2-bedroom apartment with balcony, Wi-Fi, and secure parking.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="property-card">
          <img src="pics/studio.jpg" alt="Bugolobi Studio">
          <div class="property-card-body">
            <h5>Studio Retreat – Bugolobi</h5>
            <p>Perfect for solo travelers. Cozy, clean, and close to cafes.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="property-card">
          <img src="pics/villa.jpg" alt="Muyenga Villa">
          <div class="property-card-body">
            <h5>Luxury Villa – Muyenga</h5>
            <p>Spacious 4-bedroom villa with garden, pool, and city views.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <h2>What Our Guests Say</h2>
    <div class="testimonial">“The Kololo apartment was spotless and peaceful. Booking was easy and the host was amazing!” – Sarah, Nairobi</div>
    <div class="testimonial">“Loved the location and the amenities. Will definitely stay again when in Kampala.” – James, London</div>
  </section>

  <footer>
    <p>&copy; 2025 Kampala Stays. All rights reserved. Built for local hospitality.</p>
  </footer>
</body>
</html>