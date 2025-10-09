<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header with Logo</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Header */
    header {
      background-color: #1e1f40;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    /* Logo Image */
    .logo img {
      height: 50px;   /* adjust logo size */
      width: auto;
    }

    /* Navbar Links */
    nav {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    nav a {
      text-decoration: none;
      color: #879a9f;
      font-size: 16px;
      transition: 0.3s;
    }

    nav a:hover {
      color: #e70c0c;
    }

    /* Login Button */
    .login-btn {
      padding: 6px 14px;
      border: none;
      border-radius: 5px;
      background-color: #b26b7c;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-btn:hover {
      background-color: #e70c0c;
    }

    /* Account Dropdown */
    .account {
      position: relative;
      display: none; /* hidden until user logs in */
    }

    .account-name {
      cursor: pointer;
      color: #b26b7c;
      font-weight: bold;
    }

    .dropdown {
      position: absolute;
      top: 35px;
      right: 0;
      background-color: #1e1f40;
      border: 1px solid #b26b7c;
      border-radius: 5px;
      display: none;
      flex-direction: column;
      min-width: 150px;
    }

    .dropdown a {
      padding: 10px;
      text-decoration: none;
      color: #879a9f;
      border-bottom: 1px solid #333;
    }

    .dropdown a:hover {
      background-color: #b26b7c;
      color: white;
    }

    .account:hover .dropdown {
      display: flex;
    }

    /* Mobile Menu Icon */
    .menu-toggle {
      display: none;
      font-size: 24px;
      cursor: pointer;
      color: #b26b7c;
    }

    /* Responsive */
    @media (max-width: 768px) {
      nav {
        display: none;
        flex-direction: column;
        background-color: #1e1f40;
        position: absolute;
        top: 70px;
        right: 0;
        width: 200px;
        padding: 15px;
      }

      nav.active {
        display: flex;
      }

      .menu-toggle {
        display: block;
      }

      .account {
        margin-top: 10px;
      }
    }
  </style>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

  <header>
    <!-- Replace with your logo image -->
    <div class="logo">
      <img src="../parking/images/1.png" alt="Logo">
    </div>
    
    <nav id="navbar">
      <a href="index.php">Home</a>
      <a href="services.php">Services</a>
      <a href="rentspace.php">Rent Your Space</a>
      <a href="aboutus.php">About</a>
      <a href="contactus.php">Contact</a>

      <!-- Login Button (default) -->
      <button class="login-btn" id="loginBtn" onclick="login()">Login</button>

      <!-- Account Dropdown (hidden until login) -->
      <div class="account" id="accountMenu">
        <span class="account-name"><i class="fas fa-user"></i> John</span>
        <div class="dropdown">
          <a href="#">Profile</a>
          <a href="#">Bookings</a>
          <a href="#">Logout</a>
        </div>
      </div>
    </nav>

    <div class="menu-toggle" onclick="toggleMenu()">
      <i class="fas fa-bars"></i>
    </div>
  </header>

  <script>
    function toggleMenu() {
      document.getElementById("navbar").classList.toggle("active");
    }

    // Fake login function (replace with real backend login later)
    function login() {
      document.getElementById("loginBtn").style.display = "none"; // hide login
      document.getElementById("accountMenu").style.display = "block"; // show account
    }
  </script>

</body>
</html>
