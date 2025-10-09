<?php
include "db.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $user_id = 1; // later use session login
    $building_name = $_POST['building_name'];
    $title = $_POST['title'];
    $rent = $_POST['rent'];
    $deposit = $_POST['deposit'];
    $building_type = $_POST['building_type'];
    $address = $_POST['address'];
    $floor = $_POST['floor'];
    $total_parking = $_POST['total_parking'];

    // Multiple checkboxes - store as comma separated
    $security_features = isset($_POST['security']) ? implode(",", $_POST['security']) : "";
    $access_features = isset($_POST['access']) ? implode(",", $_POST['access']) : "";

    $gate_operation = $_POST['gate_operation'];
    $parking_difficulty = $_POST['parking_difficulty'];
    $parking_angles = $_POST['parking_angles'];

    $city = $_POST['city'];
    $landmark = $_POST['landmark'];
    $directions = $_POST['directions'];
    $nearby = $_POST['nearby'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // File upload handling
    function uploadFile($fileKey) {
        if(isset($_FILES[$fileKey]) && $_FILES[$fileKey]['error'] == 0) {
            $targetDir = "uploads/";
            if(!is_dir($targetDir)) mkdir($targetDir);
            $fileName = time() . "_" . basename($_FILES[$fileKey]['name']);
            $targetFile = $targetDir . $fileName;
            move_uploaded_file($_FILES[$fileKey]['tmp_name'], $targetFile);
            return $fileName;
        }
        return null;
    }

    $img_compact = uploadFile("compact");
    $img_sedan = uploadFile("sedan");
    $img_suv = uploadFile("suv");
    $img_minibus = uploadFile("minibus");
    $img_bus = uploadFile("bus");
    $img_bike = uploadFile("bike");

    // Insert into DB
    $sql = "INSERT INTO parking_listings 
    (user_id, building_name, title, rent, deposit, building_type, address, floor, total_parking,
    security_features, access_features, gate_operation, parking_difficulty, parking_angles,
    img_compact, img_sedan, img_suv, img_minibus, img_bus, img_bike,
    city, area, landmark, directions, nearby_areas, latitude, longitude) 
    VALUES 
    ('$user_id','$building_name','$title','$rent','$deposit','$building_type','$address','$floor','$total_parking',
    '$security_features','$access_features','$gate_operation','$parking_difficulty','$parking_angles',
    '$img_compact','$img_sedan','$img_suv','$img_minibus','$img_bus','$img_bike',
    '$city','$landmark','$landmark','$directions','$nearby','$latitude','$longitude')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Parking listing saved successfully!</h2>";
        echo "<a href='index.php'>Go back</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
