<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="projectStyle.css">
</head>
<body>

<section class = "header">

    <a href = "home.php" class = "logo">boyanTravel</a>

    <nav class = "navbar">
    
    <a href = "home.php">home</a>
    <a href = "about.php">about</a>
    <a href = "trip.php">trip</a>
    <a href = "book.php">book</a>

    </nav>

    <form action="search_trips.php" method="get">
        <input type="text" name="searchQuery" placeholder="Search for trips..." required>
        <button type="submit" class="btn">Search</button>
    </form>

<div id="menu-btn" class="fas fa-bars"></div>


</section>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'trips_db');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['searchQuery'])) {
    $searchQuery = mysqli_real_escape_string($connection, $_GET['searchQuery']);

    $query = "SELECT * FROM trips WHERE name LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%'";
    $result = mysqli_query($connection, $query);


    $tripImages = array(
        'New Year 2024 in New York' => 'images/trips1.jpg',
        'Mystical Japan: Tokyo & Beyond' => 'images/trips2.jpeg',
        'Tropical Paradise in the Maldives' => 'images/trips3.jpg',
        'Alpine Adventure in Switzerland' => 'images/trips4.jpg',
        'Ancient Wonders of Egypt' => 'images/trips5.jpg',
        'Romantic Venice Getaway' => 'images/trips6.jpg',
        'Safari Adventure in Kenya' => 'images/trips7.jpg',
        'Australian Outback Expedition' => 'images/trips8.jpg',
        'Cultural Tour of India' => 'images/trips9.jpg'
    );
    

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tripName = htmlspecialchars($row['name']);
            $imagePath = array_key_exists($tripName, $tripImages) ? $tripImages[$tripName] : 'images/default.jpg';
    
            echo "<div class='search-box'>";
            echo "<div class='search-image'><img src='" . $imagePath . "' alt=''></div>";
            echo "<div class='search-content'>";
            echo "<h3>" . $tripName . "</h3>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "<a href='book.php' class='btn'>Book Now</a>";
            echo "</div></div>";
        }
    } else {
        echo "<div class='no-trips-found'>";
        echo "<h3>No Trips Found!</h3>";
        echo "<p><a href='trip.php'>Click here to see all the trips!</a></p>";
        echo "</div>";
    }
}
?>

<section class = "footer">

    <div class="box-container">

        <class class="box">
            <h3>support</h3>
            <a href="#"> <i class="fas fa-phone"></i> +359 89 8888888 </a>
            <a href="#"> <i class="fa-solid fa-envelope"></i> boyan.antonov02@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> София, ул. "св. Иван Рилски" 21 </a>
            <a href="#"> <i class="fas fa-map"></i> Варна, ул. "Ангел Кънчев" 13 </a>
        </class>


        <class class="box">
            <h3>social media</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-tiktok"></i> tiktok </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
        </class>
    </div>

</section>
</body>
</html>
