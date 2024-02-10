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

<div id="menu-btn" class="fas fa-bars"></div>


</section>

<div class="heading" style="background: url(images/cover1.jpg) no-repeat; background-size: cover; background-position: center; padding: 20px; text-align: center;">
    <h1>book now</h1>
</div>

<section class="booking">

    <h1 class="heading-title">book your trip</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date"  name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date"  name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="button-sumbit" name="send">
</body>
    </form>
    
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