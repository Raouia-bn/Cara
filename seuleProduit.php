
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara</title>
    <link rel="stylesheet" href="projet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css" >
  </head>
<body>
<?php
include "inc/header.php";
$showRegistrationAlert= 0;
if (!empty($_POST)){ //click sur le button sauvegarder
  if ( AddClient($_POST)){
    $showRegistrationAlert= 1;
  }
}
?>
  <section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="img/products/f1.jpg" width="100%" id="MainImg">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="img/products/f1.jpg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="img/products/f2.jpg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="img/products/f3.jpg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="img/products/f4.jpg" width="100%" class="small-img">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
      <h6>Home /T-Shirt</h6>
      <h4>Men's Fashion T Shirt</h4>
      <h2>$139.00</h2>
      <select>
        <option>Select Size</option>
        <option>XL</option>
        <option>XXL</option>
        <option>Small</option>
        <option>Large</option>
      </select>
      <input type="number" value="1">
      <button class="normal" >Add To Cart</button>
      <h4>Product Details</h4>
      <span>The Gildan Ultra Cotton T-shirt is made from a substantial 
        6.0 oz. per sq. yd. fabric constructed from 100% cotton ,
         this classic fit preshrunk jersey knit provides unmatched 
         comfort with each wear . Featuring a taped neck and shoulder ,
          and a seamless double-needle collar, and availble in a range of colors, it offers it all in the ultimate head-turning package.</span>
    </div>
  </section>
  <section id ="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p> Summer Collection New Morden Dessign </p>
    <div class="pro-container">
     <div class="pro">
       <img src="img/products/n1.jpg">
       <div class="des">
         <span>adidas</span>
         <h5>Cartoon Astronaut T-Shirts</h5>
         <div class="star">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
         </div>
         <h4>$78</h4>
       </div>
       <a href="#"><i class="material-icons cart" >local_grocery_store</i></a>
     </div>
     <div class="pro">
       <img src="img/products/n2.jpg">
       <div class="des">
         <span>adidas</span>
         <h5>Cartoon Astronaut T-Shirts</h5>
         <div class="star">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
         </div>
         <h4>$78</h4>
       </div>
       <a href="#"><i class="material-icons cart" >local_grocery_store</i></a>
     </div>
     <div class="pro">
       <img src="img/products/n3.jpg">
       <div class="des">
         <span>adidas</span>
         <h5>Cartoon Astronaut T-Shirts</h5>
         <div class="star">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
         </div>
         <h4>$78</h4>
       </div>
       <a href="#"><i class="material-icons cart" >local_grocery_store</i></a>
     </div>
      
     <div class="pro">
       <img src="img/products/n4.jpg">
       <div class="des">
         <span>adidas</span>
         <h5>Cartoon Astronaut T-Shirts</h5>
         <div class="star">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
         </div>
         <h4>$78</h4>
       </div>
       <a href="#"><i class="material-icons cart" >local_grocery_store</i></a>
     </div>

    </div>

 </section>
  


 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <script  src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
</html>