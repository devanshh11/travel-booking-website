<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">travel</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
         <a href="login.php">login</a>
         <a href="registration.php">register</a>
         <a href="logout.php">logout</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/img-11.jpg) no-repeat">
               <div class="content">
                  <span>explore</span>
                  <h3>explore places around the world</h3>
                  <a href="package.php" class="btn">know more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/slide2.jpg) no-repeat">
               <div class="content">
                  <span>discover</span>
                  <h3>discover the new places</h3>
                  <a href="package.php" class="btn">know  more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/slide3.jpg) no-repeat">
               <div class="content">
                  <span>travel</span>
                  <h3>Enjoy the best of your tour</h3>
                  <a href="package.php" class="btn">know more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/slide4.jpg) no-repeat">
               <div class="content">
                  <span>Relax</span>
                  <h3>Just sit in your room</h3>
                  <a href="package.php" class="btn">know more</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading-title"> our services </h1>

      <div class="box-container">

         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
         </div>

         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
         </div>

         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
         </div>

         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
         </div>

         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
         </div>

         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- home about section starts  -->

   <!--<section class="home-about">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>With us you will never have to think about another worry ever again , you willl will have the best experience with us We have all the itineraries prepared even bfore you board the plane</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </section>-->

   <!-- home about section ends -->

   <!-- home packages section starts  -->

   <section class="home-packages">

      <h1 class="heading-title"> our packages </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/one.jpg" alt="">
            </div>
            <div class="content">
               <h3>Manali</h3>
               <p>Best place to visit in summer</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/two.jpg" alt="">
            </div>
            <div class="content">
               <h3>Andaman Islands</h3>
               <p>If you love tropical places, this is the place for you</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/three.jpg" alt="">
            </div>
            <div class="content">
               <h3>Nagpur</h3>
               <p>The city of Oranges</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>

   

   </section>
   
   <section class="home-packages">


      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/one.jpg" alt="">
            </div>
            <div class="content">
               <h3>Manali</h3>
               <p>Best place to visit in summer</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/two.jpg" alt="">
            </div>
            <div class="content">
               <h3>Andaman Islands</h3>
               <p>If you love tropical places, this is the place for you</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/three.jpg" alt="">
            </div>
            <div class="content">
               <h3>Nagpur</h3>
               <p>The city of Oranges</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>

      <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

   </section>


   <!-- home packages section ends -->

   <!-- home offer section starts  -->

   <section class="home-offer">
      <div class="content">
         <h3>upto 30% off</h3>
         <h5>if you book now<h5>
         <p>There is this great offer that we have at this moment if you book now on selected credit cards and debit cards </p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </section>

   <!-- home offer section ends -->

















   <!-- footer section starts  -->

   <section class="footer">


      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

       

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 76667826163 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 8511029012 </a>
            <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiE49GtrOb4AhXk4TgGHYj-D6wQFnoECAwQAQ&url=https%3A%2F%2Fwww.google.com%2Fgmail%2F&usg=AOvVaw3mZ_qbD_gQyp_sqkjrwStn"> <i class="fas fa-envelope"></i> devanshmadne124@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Nagpur- 440013</a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/devansh_madne"> <i class="fab fa-instagram"></i>instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>Group 1</span> </div>

      

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>