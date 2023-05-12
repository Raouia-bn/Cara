<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Projet HTML/CSS</title>
<link rel="stylesheet" href="css/cara.css" />
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

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations or contact us today</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fa fa-map"></i>
                <p>tekup_university</p>
            </li>
            <li>
                <i class="fa fa-envelope"></i>
                <p>contact@projet.com</p>
            </li>
            <li>
                <i class="fa fa-phone"></i>
                <p>contact@projet.com</p>
            </li>
            <li>
                <i class="fa fa-clock-o"></i>
                <p>Monday to Saturday : 9:00 am to 16 pm</p>
            </li>
           
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.6876255369025!2d10.187898515147557!3d36.89782047992857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34cc25bd5aff%3A0x495e852ae57f3ff5!2sTEK-UP%20University!5e0!3m2!1sfr!2stn!4v1671140541514!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="projet" id="projet" cols="30" rows="10"placeholder="Your Message"></textarea>
        <button class="normal">Submit</button>
    </form>
    <div class="people">
        
       <div><img src="img/people/nada.jpg"><p><span>Nada Boulares</span>Senior developer <br>Phone +216 00 000 000 <br>Email: nadaboulares9@gmail.com </p></div>
       <div><img src="img/people/marwa.jpg"><p><span>Marwa Razghallah</span>Senior developer <br>Phone +216 00 000 000 <br>Email: razgallah.marwa99@gmail.com </p></div>
      
       <div><img src="img/people/raouia1.jpg"><p><span>Raouia BEN NSIB</span>Senior developer <br>Phone +216 00 000 000 <br>Email: raouia.ben19@gmail.com</p></div>
    
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