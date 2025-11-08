<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Kampala Stays</title>

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

    nav a.active {
      color: #FF385C;
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

    .story-section {
      padding: 80px 40px;
      background: #f9f9f9;
    }

    .story-content {
      max-width: 1200px;
      margin: 0 auto;
    }

    .story-image {
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .story-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .values-section {
      padding: 80px 40px;
      text-align: center;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
      margin-top: 40px;
    }

    .value-card {
      background: white;
      border-radius: 10px;
      padding: 40px 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }

    .value-card:hover {
      transform: translateY(-5px);
    }

    .value-icon {
      font-size: 40px;
      margin-bottom: 20px;
      color: #FF385C;
    }

    .team-section {
      padding: 80px 40px;
      background: #f9f9f9;
      text-align: center;
    }

    .team-member {
      margin-bottom: 40px;
    }

    .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
      border: 4px solid white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .contact-section {
      padding: 80px 40px;
      text-align: center;
    }

    .contact-info {
      max-width: 600px;
      margin: 0 auto;
    }

    .contact-item {
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .contact-icon {
      font-size: 24px;
      margin-right: 15px;
      color: #FF385C;
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
      <a href="about" class="active">About</a>
      <a href="book">Make Booking</a>
      <a href="login">Login</a>
    </nav>
  </header>

  <section class="hero">
    <h1>Our Story</h1>
    <p>Discover the passion behind Kampala's most trusted hospitality service</p>
  </section>

  <section class="intro">
    <h2>Welcome to Kampala Stays</h2>
    <p>We're more than just a booking platform - we're your personal connection to authentic Kampala living. Founded with a vision to provide travelers with comfortable, secure, and memorable stays, we've grown from a single property to a curated collection of homes across the city.</p>
  </section>

  <section class="story-section">
    <div class="story-content">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="story-image">
            <img src="images/kampala-host.jpg" alt="Our Founder">
          </div>
        </div>
        <div class="col-md-6">
          <h2>Our Journey</h2>
          <p>Kampala Stays began in 2018 when our founder noticed a gap in the market for quality short-term rentals that offered both comfort and authentic local experiences. Starting with just one apartment in Kololo, we've carefully expanded to include properties in Bugolobi, Muyenga, Ntinda, and other prime locations.</p>
          <p>What sets us apart is our hands-on approach. Unlike large rental platforms, we personally manage every property, ensuring consistent quality, cleanliness, and service. Our guests enjoy the benefits of local expertise with the reliability of professional management.</p>
          <p>Today, we're proud to be Kampala's preferred choice for travelers seeking a home away from home, whether for business, leisure, or extended stays.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="values-section">
    <h2>Our Values</h2>
    <p class="mb-5">These principles guide everything we do at Kampala Stays</p>

    <div class="values-grid">
      <div class="value-card">
        <div class="value-icon"><i class="bi bi-house-heart"></i></div>
        <h3>Authentic Hospitality</h3>
        <p>We believe in treating every guest like family, providing warm Ugandan hospitality that makes you feel truly at home.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="bi bi-shield-check"></i></div>
        <h3>Trust & Security</h3>
        <p>Your safety and peace of mind are our top priorities. All our properties are carefully vetted and regularly maintained.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="bi bi-stars"></i></div>
        <h3>Quality Assurance</h3>
        <p>We maintain high standards across all our properties, from cleanliness to amenities, ensuring a consistently excellent experience.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="bi bi-geo-alt"></i></div>
        <h3>Local Expertise</h3>
        <p>As locals, we provide insider tips and recommendations to help you experience the best of Kampala.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="bi bi-arrow-repeat"></i></div>
        <h3>Sustainability</h3>
        <p>We're committed to responsible tourism practices that benefit both our guests and the local community.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="bi bi-chat-heart"></i></div>
        <h3>Personalized Service</h3>
        <p>We tailor our service to meet your individual needs, ensuring your stay is exactly what you're looking for.</p>
      </div>
    </div>
  </section>

  <section class="team-section">
    <h2>Meet Our Team</h2>
    <p class="mb-5">The passionate individuals behind Kampala Stays</p>

    <div class="row justify-content-center">
      <div class="col-md-4 team-member">
        <img src="images/team-founder.jpg" alt="David Kato - Founder">
        <h4>David Kato</h4>
        <p class="text-muted">Founder & Host</p>
        <p>David started Kampala Stays with a vision to share the best of Ugandan hospitality with travelers from around the world.</p>
      </div>
      <div class="col-md-4 team-member">
        <img src="images/team-manager.jpg" alt="Grace Namuli - Property Manager">
        <h4>Grace Namuli</h4>
        <p class="text-muted">Property Manager</p>
        <p>Grace ensures all our properties are impeccably maintained and our guests have everything they need for a perfect stay.</p>
      </div>
      <div class="col-md-4 team-member">
        <img src="images/team-support.jpg" alt="Michael Ssebunya - Guest Support">
        <h4>Michael Ssebunya</h4>
        <p class="text-muted">Guest Support</p>
        <p>Michael is your go-to person for any questions or assistance during your stay, available 24/7 to help.</p>
      </div>
    </div>
  </section>

  <section class="contact-section">
    <h2>Get In Touch</h2>
    <p class="mb-5">We'd love to hear from you</p>

    <div class="contact-info">
      <div class="contact-item">
        <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
        <p>Plot 24, Acacia Avenue, Kololo, Kampala</p>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><i class="bi bi-telephone"></i></div>
        <p>+256 700 123 456</p>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><i class="bi bi-envelope"></i></div>
        <p>hello@kampalastays.com</p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Kampala Stays. All rights reserved. Built for local hospitality.</p>
  </footer>
</body>
</html>