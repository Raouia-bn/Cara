<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Projet HTML/CSS</title>
<link rel="stylesheet" href="css/projet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php
include "inc/header.php";



?>
<section id="about-head" class="section-p1">
    <img src="img/about/a6.jpg">
    <div>
        <h2>Who We Are?</h2>
        <p>Online  e-commerce is the monetary exchange of goods, services or information through computer networks, including the Internet.

            In the context of business-to-business commerce, merchants have been using electronic data interchange (EDI) type networks for many years. Electronic transactions also take place on mobile telephone networks. This mobile commerce is called mobile commerce.
            
            In a context of strong environmental constraints, the development of distance selling tends to transform logistics issues in the world of commerce.</p>
            <abbr title="">Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.</abbr>
             <br><br>
             <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.</marquee>
        </div>
</section>
<section id="about-app" class="section-p1">
    <h1>Download Our <a href="#">App</a></h1>
    <div class="video">
        <video autoplay muted loop src="img/about/1.mp4"></video>
    </div>
</section>
<section id ="feature" class="section-p1">
    <div class="fe-box">
     <img src="img/features/f1.png">
     <h6>Free Shopping</h6>
    </div>
    <div class="fe-box">
     <img src="img/features/f2.png">
     <h6>Online Order</h6>
    </div>
    <div class="fe-box">
     <img src="img/features/f3.png">
     <h6>Save Money</h6>
    </div>
    <div class="fe-box">
     <img src="img/features/f4.png">
     <h6>Promotions</h6>
    </div>
   </div>
   <div class="fe-box">
    <img src="img/features/f5.png">
    <h6>Happy Sell</h6>
   </div>
   <div class="fe-box">
     <img src="img/features/f6.png">
     <h6>F24/7 Support</h6>
    </div>


 </section>
 <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up For newsletter</h4>
      <p>Get E-mail updates about our latest shop and <span>special offres .</span></p>
    </div>
    <div class="form">
      <input type="email" placeholder="Your email address">
      <button class="normal">Sign Up</button>
    </div>
   </section>
 <footer class="section-p1">
  <div class="col">
    <img class="logo" src="img/logo.png">
    <h4>Contact</h4>
    <p><strong>Adress: </strong> TEK UP University </p>
    <p><strong>Hours: </strong> 10:00 - 18:00 , Mon - Sat </p>
    <div class="follow">
      <h4>Follow us </h4>
      <div class="icon">
        <i class="fa fa-facebook-f"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-pinterest"></i>
        <i class="fa fa-youtube-play"></i>
      </div>
    </div>
  </div>
  <div class="col">
    <h4>About</h4>
    <a href="#" >About us</a>
    <a href="#" >Delivery Information</a>
    <a href="#" >Privacy Policy</a>
    <a href="#" >Terms & Conditions</a>
    <a href="#" >Contact Us</a>
  </div>
  <div class="col">
    <h4>My Account</h4>
    <a href="#" >About us</a>
    <a href="#" >Delivery Information</a>
    <a href="#" >Privacy Policy</a>
    <a href="#" >Terms & Conditions</a>
    <a href="#" >Contact Us</a>
  </div>
  <div class="col install">
    <h4>Install App</h4>
    <p>From App Store or Google Play</p>
    <div class="row">
      <img src ="img/pay/app.jpg">
      <img src="img/pay/play.jpg">
    </div>
    <p>Secured Payment Gateways</p>
    <img src="img/pay/pay.png">
  </div>
  <div class="copyright">
    <p>2022- HTML/CSS Projet Ecommerce </p>
  </div>
 </footer>

 
</body>