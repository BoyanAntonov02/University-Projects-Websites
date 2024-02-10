<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    
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

<div id="menu-btn" class="fas fa-bars"></div>


</section>

<section class="home">

    <div class = "swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/swipperImage-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href = "trip.php" class="btn">discover more</a>
                </div>
            </div>
        

            <div class="swiper-slide slide" style="background:url(images/swipperImage-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>navigate exotic locales</h3>
                    <a href = "trip.php" class="btn">discover more</a>
                </div>
            </div>

        

            <div class="swiper-slide slide" style="background:url(images/swipperImage-3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover hidden gems</h3>
                    <a href = "trip.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

</section>

<section class = "services">

    <h1 class="heading-title"> what we offer </h1>

    <div class="box-container">

        <div class ="box">
            <img src = "images/europe.png" alt="">
            <h3>europe</h3>
        </div>

        <div class ="box">
            <img src = "images/asia.png" alt="">
            <h3>asia</h3>
        </div>

        <div class ="box">
            <img src = "images/north-america.png" alt="">
            <h3>north america</h3>
        </div>

        <div class ="box">
            <img src = "images/tour-guide.png" alt="">
            <h3>tour guide</h3>
        </div>


    </div>
</section>

<section class="aboutOurCompany">

    <div class="image">
        <img src="images/home-aboutOurCompany-image.png" alt="">
    </div>

    <div class = "content">
        <h3>about our company</h3>
            <p>
                Welcome to BoyanTravel, where your dream destinations become a reality. 
                With years of experience in crafting unforgettable journeys,
                we specialize in providing personalized travel experiences tailored to your unique desires. 
                Our team of dedicated travel experts ensures that every detail is perfect, 
                from luxurious accommodations to exclusive adventures, making your trip not just a holiday, 
                but a lifetime memory. 
            </p>
     <a href="about.php" class="btn"> read more </a>


    </div>


</section>

<section class="trips">
    <h1 class="heading-title">Trips</h1>

    <div class="box-container">
      
        <div class="box">
            <div class="image">
                <img src="images/trips1.jpg" alt="">
            </div>
            <div class="content">
                <h3>New Year 2024 in New York</h3>
                <p>Experience the magic of New Year's Eve in the heart of New York City. As you usher in 2024 in one of the world's most exciting cities. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>


        <div class="box">
            <div class="image">
                <img src="images/trips2.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Mystical Japan: Tokyo & Beyond</h3>
                <p>Embark on a captivating journey through Japan, blending ancient traditions with futuristic wonders.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

      
        <div class="box">
            <div class="image">
                <img src="images/trips3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Tropical Paradise in the Maldives</h3>
                <p> Escape to the Maldives, a mesmerizing chain of islands in the Indian Ocean, known  luxurious overwater bungalows.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>


    </div>

    <div class="load-more">
        <a href="trip.php" class="btn">Load More</a>
    </div>
</section>


<section class = "footer">

    <div class="box-container">

        <div class="box">
            <h3>support</h3>
            <a href="#"> <i class="fas fa-phone"></i> +359 89 8888888 </a>
            <a href="#"> <i class="fa-solid fa-envelope"></i> boyan.antonov02@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> София, ул. "св. Иван Рилски" 21 </a>
            <a href="#"> <i class="fas fa-map"></i> Варна, ул. "Ангел Кънчев" 13 </a>
        </div>


        <div class="box">
            <h3>social media</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-tiktok"></i> tiktok </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="projectScript.js"></script>


</body>
</html>