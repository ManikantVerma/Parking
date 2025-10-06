<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking Footer</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .main {
      background-color: #1e1f40;
      color: white;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 20px;
    }

    .logo img {
      width: 150px;
      height: auto;
    }

    .section {
      flex: 1;
      min-width: 250px;
      margin: 10px;
    }

    .section h1,
    .section h5 {
      color: #b26b7c;
      margin-bottom: 10px;
    }

    .section p,
    .section a {
      color: #879a9f;
      font-size: 14px;
      text-decoration: none;
      display: block;
      margin: 5px 0;
    }

    .section a:hover {
      color: #b26b7c;
    }

    .socials a {
      margin: 0 5px;
      font-size: 18px;
      text-decoration: none;
      color: #e70c0c;
    }

    /* Responsive behavior */
    @media (max-width: 768px) {
      .main {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .logo img {
        margin-bottom: 15px;
      }

      .section {
        margin: 15px 0;
      }
    }
  </style>

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="main">
    
    <!-- Logo -->
    <div class="logo section">
      <img src="../parking/images/1.png" alt="logo">
    </div>

    <!-- Contact Section -->
    <div class="contact section">
      <h1>CONTACTS</h1>
      <p><i class="fas fa-location-dot"></i> xyz.</p>
      <p><i class="fas fa-envelope"></i> spotfinder@gmail.com</p>
      <p><i class="fas fa-phone"></i> +91 9585777455</p>
      <p><i class="fas fa-phone"></i> +91 9454157755</p>

      <div class="socials" style="margin-top:10px;">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Get In Touch -->
    <div class="getintouch section">
      <h1>GET IN TOUCH</h1>
      <p style="color:#879a9f;">You can contact us anytime for booking or queries.</p>
    </div>

    <!-- Services -->
    <div class="services section">
      <h5>OUR SERVICES</h5>
      <a href="#!">Car Parking</a>
      <a href="#!">Electric vehicle charging</a>
      <a href="#!">Rent out your space</a>
      <a href="#!">Rent out your EV charger</a>
    </div>

  </div>
</body>
</html>
