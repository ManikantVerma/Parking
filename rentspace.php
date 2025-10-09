<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rent a New Parking Space</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
    }
    header {
      background-color: #1E3A8A;
      color: white;
      text-align: center;
      padding: 15px;
    }
    main {
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      color: #1E3A8A;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input[type="text"], input[type="number"], select, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    input[type="checkbox"] {
      margin-right: 10px;
    }
    #map {
      width: 100%;
      height: 400px;
      margin-top: 10px;
    }
    .vehicle-img input {
      margin-top: 5px;
    }
    button {
      background-color: #1E3A8A;
      color: white;
      padding: 10px 20px;
      margin-top: 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #16326c;
    }
  </style>
</head>
<body>
  <header>
    <h1>Rent a New Parking Space</h1>
  </header>
  <main>
    <form id="parkingForm" action="save_parking.php" method="POST" enctype="multipart/form-data">

      <h2>Basic Information</h2>
      <label>Building & Street Name</label>
      <input type="text" name="building_name" required>

      <label>Title for your listing</label>
      <input type="text" name="title" required>

      <label>Rent per month (Rs)</label>
      <input type="number" name="rent" min="0" required>

      <label>Security Deposit (Rs)</label>
      <input type="number" name="deposit" min="0" required>

      <h2>Vehicle Categories</h2>
      <div class="vehicle-img">
        <label>Compact</label>
        <input type="file" name="compact">
        <label>Sedan</label>
        <input type="file" name="sedan">
        <label>SUV</label>
        <input type="file" name="suv">
        <label>Minibus</label>
        <input type="file" name="minibus">
        <label>Bus</label>
        <input type="file" name="bus">
        <label>Bike</label>
        <input type="file" name="bike">
      </div>

      <h2>Parking Facility</h2>
      <label>Building Type</label>
      <select name="building_type">
        <option value="">Choose building type</option>
        <option value="garage">Garage</option>
        <option value="basement">Basement</option>
        <option value="open_lot">Open Lot</option>
      </select>

      <label>Address</label>
      <input type="text" name="address">

      <label>Floor / Basement</label>
      <input type="text" name="floor">

      <label>Total Parking Spots</label>
      <input type="number" name="total_parking" min="0">

      <h2>Security Features</h2>
      <label><input type="checkbox" name="security" value="private_garage"> This is a private garage</label>
      <label><input type="checkbox" name="security" value="cctv"> CCTV Surveillance</label>
      <label><input type="checkbox" name="security" value="gated"> Gated building</label>
      <label><input type="checkbox" name="security" value="marked"> Parking area marked</label>

      <h2>Access</h2>
      <label><input type="checkbox" name="access" value="24_hour"> 24 hour access</label>
      <label><input type="checkbox" name="access" value="security_sticker"> Car requires security sticker</label>
      <label><input type="checkbox" name="access" value="lights"> Parking area has lights</label>

      <h2>Gate Operation</h2>
      <select name="gate_operation">
        <option value="">Select gate operation</option>
        <option value="self">Self</option>
        <option value="manned">Manned</option>
        <option value="automatic">Automatic sensors</option>
      </select>

      <h2>Parking Difficulty</h2>
      <select name="parking_difficulty">
        <option value="">Select difficulty</option>
        <option value="easy">Easy</option>
        <option value="moderate">Moderate</option>
        <option value="difficult">Difficult</option>
      </select>

      <h2>Parking Space Angles</h2>
      <select name="parking_angles">
        <option value="">Select angle</option>
        <option value="90">90°</option>
        <option value="45">45°</option>
        <option value="unknown">I don't know</option>
      </select>

      <h2>Locality / Area</h2>
      <label>City</label>
      <input type="text" name="city">
      <label>Area / Landmark</label>
      <input type="text" name="landmark">
      <label>Directions</label>
      <textarea name="directions" rows="3"></textarea>
      <label>Nearby Areas</label>
      <textarea name="nearby" rows="2"></textarea>

      <h2>Select Location on Map</h2>
      <div id="map"></div>
      <input type="hidden" name="latitude" id="latitude">
      <input type="hidden" name="longitude" id="longitude">

      <button type="submit">Submit Listing</button>
    </form>
  </main>

  <!-- Google Maps JS -->
  <script>
    let map;
    let marker;

    function initMap() {
      const initialLocation = { lat: 28.6139, lng: 77.2090 }; // Default location (Delhi)

      map = new google.maps.Map(document.getElementById("map"), {
        center: initialLocation,
        zoom: 13,
      });

      // Add click listener to place marker
      map.addListener("click", function(e) {
        placeMarker(e.latLng);
      });
    }

    function placeMarker(location) {
      if(marker) marker.setPosition(location);
      else marker = new google.maps.Marker({
        position: location,
        map: map
      });
      document.getElementById("latitude").value = location.lat();
      document.getElementById("longitude").value = location.lng();
    }

    window.initMap = initMap;

    // Optional: handle form submit
    document.getElementById("parkingForm").addEventListener("submit", function(e){
      e.preventDefault();
      alert("Form submitted! Check console for data.");
      const formData = new FormData(this);
      for (let [key, value] of formData.entries()) {
        console.log(key, value);
      }
    });
  </script>

  <!-- Load Google Maps API (replace YOUR_API_KEY with your key) -->
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
  </script>
</body>
</html>
