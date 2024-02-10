<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
   
    <link rel = "stylesheet" href = "projectStyle.css">
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

<div class="heading" style="background: url(images/cover1.jpg) no-repeat; background-size: cover; background-position: center; padding: 20px; text-align: center;">
    <h1>trips</h1>
</div>

<section class="trips">
    <h1 class="heading-title">top destinations</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/trips1.jpg" alt="">
            </div>
            <div class="content">
                <h3>New Year 2024 in New York</h3>
                <p>Experience the magic of New Year's Eve in the heart of New York City. As you usher in 2024 in one of the world's most exciting cities. </p>
                <a href="book.php" class="btn"> book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/trips2.jpeg" alt="">
            </div>
            <div class="content">
            <h3>Mystical Japan: Tokyo & Beyond</h3>
                <p>Embark on a captivating journey through Japan, blending ancient traditions with futuristic wonders.</p>
                <a href="book.php" class="btn"> book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/trips3.jpg" alt="">
            </div>
            <div class="content">
            <h3>Tropical Paradise in the Maldives</h3>
                <p> Escape to the Maldives, a mesmerizing chain of islands in the Indian Ocean, known  luxurious overwater bungalows.</p>
                <a href="book.php" class="btn"> book now</a>
            </div>
        </div>

        <div class="box">
     <div class="image">
        <img src="images/trips4.jpg" alt="">
    </div>
        <div class="content">
        <h3>Alpine Adventure in Switzerland</h3>
        <p>Immerse yourself in the majestic beauty of the Swiss Alps. Enjoy skiing, hiking, and breathtaking scenery.</p>
        <a href="book.php" class="btn">Book Now</a>
        </div>
     </div>


     <div class="box">
    <div class="image">
        <img src="images/trips5.jpg" alt="">
    </div>
    <div class="content">
        <h3>Ancient Wonders of Egypt</h3>
        <p>Discover the rich history of Egypt. Visit the Great Pyramids, the Sphinx, and cruise the Nile River.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>

<div class="box">
    <div class="image">
        <img src="images/trips6.jpg" alt="">
    </div>
    <div class="content">
        <h3>Romantic Venice Getaway</h3>
        <p>Explore the enchanting canals of Venice. A perfect romantic retreat filled with history and charm.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>

<div class="box">
    <div class="image">
        <img src="images/trips7.jpg" alt="">
    </div>
    <div class="content">
        <h3>Safari Adventure in Kenya</h3>
        <p>Experience the thrill of a safari in Kenya. Witness the Great Migration and diverse wildlife.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>


<div class="box">
    <div class="image">
        <img src="images/trips8.jpg" alt="">
    </div>
    <div class="content">
        <h3>Australian Outback Expedition</h3>
        <p>Discover the rugged beauty of the Australian Outback. Visit Uluru, explore national parks, and learn about Aboriginal culture.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>


<div class="box">
    <div class="image">
        <img src="images/trips9.jpg" alt="">
    </div>
    <div class="content">
        <h3>Cultural Tour of India</h3>
        <p>Embark on a journey through India's vibrant culture. Visit the Taj Mahal, explore local markets, and savor the rich cuisine.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>

    </div>
</section>

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



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="projectScript.js"></script>


</body>
</html>