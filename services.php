<!DOCTYPE html>
<html>
<head>
  <title>Rent Your Parking Space</title>
  <style>
    #map {
      height: 400px;
      width: 100%;
      margin-bottom: 10px;
    }
    #searchInput {
      width: 100%;
      max-width: 500px;
      margin: auto;
      padding: 8px;
      box-sizing: border-box;
      margin-bottom: 10px;
      display: block;
    }
    form {
      max-width: 500px;
      margin: auto;
    }
    input, textarea {
      width: 100%;
      padding: 8px;
      margin: 6px 0;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <h2>Rent Your Parking Space</h2>
  <p>Search and click on the map to locate your parking space.</p>

  <input id="searchInput" type="text" placeholder="Search for location">

  <div id="map"></div>

  <form id="parkingForm">
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="price">Price per hour ($):</label>
    <input type="number" id="price" name="price" min="0" required>

    <label for="availability">Availability (e.g., 9 AM - 5 PM):</label>
    <input type="text" id="availability" name="availability" required>

    <label for="vehicleType">Vehicle Type (car, bike, etc.):</label>
    <input type="text" id="vehicleType" name="vehicleType" required>

    <label for="contact">Contact Phone/Email:</label>
    <input type="text" id="contact" name="contact" required>

    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">

    <button type="submit">Submit</button>
  </form>

  <script>
    let map;
    let marker;
    let autocomplete;

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 20.5937, lng: 78.9629 }, // Center on India by default
        zoom: 5,
      });

      const input = document.getElementById("searchInput");
      autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.bindTo("bounds", map);

      autocomplete.addListener("place_changed", () => {
        const place = autocomplete.getPlace();
        if (!place.geometry) {
          alert("No details available for: '" + place.name + "'");
          return;
        }
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);
        }
        placeMarker(place.geometry.location);
      });

      map.addListener("click", (event) => {
        placeMarker(event.latLng);
      });
    }

    function placeMarker(location) {
      if (marker) {
        marker.setPosition(location);
      } else {
        marker = new google.maps.Marker({
          position: location,
          map: map,
        });
      }
      document.getElementById("latitude").value = location.lat();
      document.getElementById("longitude").value = location.lng();
    }

    document.getElementById("parkingForm").addEventListener("submit", function (e) {
      e.preventDefault();
      if (!document.getElementById("latitude").value || !document.getElementById("longitude").value) {
        alert("Please select a location on the map.");
        return;
      }
      const data = {
        address: this.address.value,
        price: this.price.value,
        availability: this.availability.value,
        vehicleType: this.vehicleType.value,
        contact: this.contact.value,
        latitude: this.latitude.value,
        longitude: this.longitude.value,
      };
      alert("Parking space info submitted:\n" + JSON.stringify(data, null, 2));
      // Add code here to send data to a server if needed
    });
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5pHzmoE39pQgczU98xk70Wv8W6U-vhV4&libraries=places&callback=initMap" async defer></script>
</body>
</html>
