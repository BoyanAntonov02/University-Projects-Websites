<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    echo("Connection failed: " . mysqli_connect_error());
    exit;
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $errors = [];

    // Validation checks
    if (empty($name) || empty($email) || empty($phone) || empty($location) || empty($guests) || empty($arrivals) || empty($leaving)) {
        $errors[] = "All fields are required.";
    }

    if (strlen($name) < 3 || strlen($name) > 50) {
        $errors[] = "Name must be between 3 and 50 characters.";
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Invalid phone number format.";
    }

    if (!is_numeric($guests) || $guests < 0) {
        $errors[] = "Number of guests must be a non-negative number.";
    }

    $today = date("Y-m-d");
    $arrivalsFormatted = date("Y-m-d", strtotime($arrivals)); 
    $leavingFormatted = date("Y-m-d", strtotime($leaving)); 

    if ($arrivalsFormatted <= $today) {
        $errors[] = "Arrival date must be in the future.";
    }

    if (empty($errors)) {
        $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivalsFormatted, $leavingFormatted);

        if ($stmt->execute()) {
            echo "<div style='background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; margin: 20px 0; border-radius: 5px;'>
            Your booking was successful booked! We will contact you for confirmation in 1-3 business days. Thank you for choosing BoyanTravel!
          </div>";
        } else {
            echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

?>
