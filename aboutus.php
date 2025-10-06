<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
   <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/pace.js"></script>
    <link rel="stylesheet" href="css/contentstyle.css">
    
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }

    header {
      background: #1a1a2e;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
      letter-spacing: 2px;
    }

    .about-section {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .about-section h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #1a1a2e;
    }

    .about-section p {
      text-align: justify;
      line-height: 1.7;
      margin-bottom: 20px;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .feature-box {
      background: #f0f4ff;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      transition: transform 0.3s;
    }

    .feature-box:hover {
      transform: translateY(-5px);
    }

    .feature-box h3 {
      margin: 10px 0;
      color: #1a1a2e;
    }

    footer {
      background: #1a1a2e;
      color: #fff;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

 <?php include("header.php"); ?>

  <section class="about-section">
    <h2>About Us</h2>
    <p>
      Welcome to our <strong>Car Parking System</strong> – a smart solution designed to simplify parking 
      management. With increasing traffic and limited parking spaces, we aim to provide 
      a hassle-free experience for vehicle owners and parking lot administrators.
    </p>
    <p>
      Our system allows users to easily find available parking spots, manage their bookings, 
      and reduce waiting times. It also helps administrators efficiently handle space allocation, 
      payments, and overall security.
    </p>

    <div class="features">
      <div class="feature-box">
        <h3>✔ Easy Booking</h3>
        <p>Book your parking spot in advance to save time and avoid hassle.</p>
      </div>
      <div class="feature-box">
        <h3>✔ Real-time Availability</h3>
        <p>Check available spaces instantly with live updates.</p>
      </div>
      <div class="feature-box">
        <h3>✔ Secure & Reliable</h3>
        <p>Ensuring safe vehicle parking with complete management control.</p>
      </div>
      <div class="feature-box">
        <h3>✔ User Friendly</h3>
        <p>Simple, clean, and responsive design for smooth user experience.</p>
      </div>
    </div>
  </section>

  
    <?php include('footer.php'); ?>


</body>
</html>
