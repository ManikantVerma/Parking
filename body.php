<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration & Rent Space</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #1e1f40;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: space-around;
    }

    .card {
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      padding: 25px;
      flex: 1;
      min-width: 300px;
      max-width: 500px;
    }

    .card h2 {
      color: #b26b7c;
      margin-bottom: 15px;
      text-align: center;
    }

    form label {
      display: block;
      margin: 10px 0 5px;
      color: #1e1f40;
      font-weight: bold;
    }

    form input, form select, form textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 15px;
      font-size: 14px;
    }

    form input:focus, form textarea:focus, form select:focus {
      outline: none;
      border-color: #b26b7c;
      box-shadow: 0 0 5px rgba(178,107,124,0.4);
    }

    .btn {
      background: #b26b7c;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
      font-size: 15px;
    }

    .btn:hover {
      background: #e70c0c;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- Registration Form -->
    <div class="card">
      <h2>User Registration</h2>
      <form action="register.php" method="POST">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>

        <label for="cpassword">Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password" required>

        <button type="submit" class="btn">Register</button>
      </form>
    </div>

    <!-- Add Space Form -->
    <div class="card">
      <h2>Rent Out Your Space</h2>
      <form action="add_space.php" method="POST">
        <label for="location">Location</label>
        <input type="text" id="location" name="location" placeholder="Enter your space location" required>

        <label for="price">Price (₹)</label>
        <input type="number" id="price" name="price" placeholder="Enter price per hour/day" required>

        <label for="type">Type of Space</label>
        <select id="type" name="type" required>
          <option value="">-- Select --</option>
          <option value="car">Car Parking</option>
          <option value="bike">Bike Parking</option>
          <option value="ev">EV Charging Spot</option>
        </select>

        <label for="details">Details</label>
        <textarea id="details" name="details" rows="4" placeholder="Enter extra details..."></textarea>

        <button type="submit" class="btn">Add Space</button>
      </form>
    </div>

  </div>

</body>
</html>
