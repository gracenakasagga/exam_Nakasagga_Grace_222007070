<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con); // Corrected function call
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
</head>
<body>
    <nav>
      <div class="logo">ONLINE FASHION SHOP</div>
    <ul>
      <li>
        <a href="home.html">new</a>
        <ul>
            <li><a href="https://vestique.com/collections/new">all new</a></li>
          <li><a href="https://vestique.com/collections/bottoms-1">bottoms</a></li>
          <li><a href="https://vestique.com/collections/dresses-1">dresses</a></li>
          <li><a href="https://vestique.com/collections/denims">denim</a></li>
          <li><a href="https://vestique.com/collections/pants">pants</a></li>
      </ul>
    </li>
    </ul>
    <ul>
      <li>
        <a href="about.html">clothing</a>
      <ul>
          <li><a href="https://vestique.com/collections/bramis">bramis</a></li>
          <li><a href="https://vestique.com/collections/wedding-guest-shop">weddind shop</a></li>
          <li><a href="https://vestique.com/collections/beach-vacatio">beachvacation</a></li>
          <li><a href="https://vestique.com/collections/country-concert-1">countryconcert</a></li>
          <li><a href="https://vestique.com/collections/graduation">graduationedit</a></li>
      </ul>
    </li>
  </ul>
  <ul>
      <li>
        <a href="contact.html">dresses</a>
      <ul>
          <li><a href="https://vestique.com/collections/dresses-white">white dresses</a></li>
          <li><a href="https://vestique.com/collections/dresses-black">black dresses</a></li>
          <li><a href="https://vestique.com/collections/dresses-pink">pink dresses</a></li>
          <li><a href="https://vestique.com/collections/dresses-red">red dresses</a></li>
          <li><a href="https://vestique.com/collections/dresses-green">green dresses</a></li>
      </ul>
    </li>
  </ul>
  <ul>
      <li>
        <a href="top.html">tops</a>
      <ul>
          <li><a href="https://vestique.com/collections/tops">shop all tops</a></li>
          <li><a href="https://vestique.com/collections/tops-crop">crop tops</a></li>
          <li><a href="https://vestique.com/collections/bramis">bramis</a></li>
          <li><a href="https://vestique.com/collections/sweaters">sweaters</a></li>
          <li><a href="https://vestique.com/collections/tops-shirts">blouses</a></li>
      </ul>
    </li>
  </ul>
  <ul>
      <li>
        <a href="bottom.html">bottoms</a>
      <ul>
          <li><a href="https://vestique.com/collections/skirts">shop all skirts</a></li>
          <li><a href="https://vestique.com/collections/skirts-mini">min skirts</a></li>
          <li><a href="https://vestique.com/collections/skirts-midi">midi skirts</a></li>
          <li><a href="https://vestique.com/collections/skirts-maxi">maxi skirts</a></li>
          <li><a href="https://vestique.com/collections/skorts">skorts</a></li>
      </ul>
    </li>
  </ul>
  <ul>
      <li>
        <a href="access.html">accessoiries</a>
      <ul>
          <li><a href="https://vestique.com/collections/rings-1">rings</a></li>
          <li><a href="https://vestique.com/collections/boots">boots</a></li>
          <li><a href="https://vestique.com/collections/heels">heels</a></li>
          <li><a href="https://vestique.com/collections/sandals">sandals</a></li>
          <li><a href="https://vestique.com/collections/cowboy-boots">cowboy boots</a></li>
      </ul>
    </li>
  </ul>
  <ul>
      <li>
        <a href="sale.html">sales</a>
      <ul>
          <li><a href="https://vestique.com/collections/sale-dresses">sale dresses</a></li>
          <li><a href="https://vestique.com/collections/sale-pants">sale pants</a></li>
          <li><a href="https://vestique.com/collections/sale-sets">sale sets</a></li>
          <li><a href="https://vestique.com/collections/sale-tops">sale tops</a></li>
          <li><a href="https://vestique.com/collections/sale-denim">sale denim</a></li>
      </ul>
    </li>
  </ul>
    </ul>
  </nav>

<div class="container">
  <div class="image-container">
      <img src="2.webp" alt="image" class="resized_image">
      <p><b>ENJOY NEW FASHOINS HERE</b></p>
  </div>
  <div class="image-container">
      <img src="11.webp" alt="image" class="resized_image">
  <p><b>YOU MAY LIKE THIS FASHIONS TOO</b></p>
  </div>
</div>
  
<div class="container_1">
  <div class="image-container_1">
      <img src="3.webp" alt="image" class="resized_image_1">
      <div class="text_container_1">
      <P>Beautiful dresses</P>
      <P>Jasmine Mini Dress</P>
      <p>$86.00</p>
  </div>
</div>
  <div class="image-container_1">
      <img src="4.webp" alt="image" class="resized_image_1">
      <p>None is better than this!</p>
      <p>Stay Golden Midi Dress</p>
      <p>$88.00</p>
  </div>
  <div class="image-container_1">
    <img src="5.webp" alt="image" class="resized_image_1">
    <P>Declyn Dress</P>
    <p>$72.00</p>
</div>
<div class="image-container_1">
    <img src="6.webp" alt="image" class="resized_image_1">
    <p>Camryn Dress</p>
    <p>$48.00</p>
</div>
</div>

<div class=" container">
<div class= "text_container">
    <p>The global fashion e-commerce market has witnessed remarkable growth,<br> thanks to a unique blend of cultural diversity and<br> the proliferation of the internet.  

      <br>  Esteemed brands and innovative platforms have engaged in fierce competition to capture<br> the attention of trend-conscious and convenience-seeking consumers. 
        
        Amid this dynamic landscape,<br> the best online clothing stores have played<br> pivotal roles in reshaping the way people shop for and<br> experience fashion in the digital realm. 
        
       <br> They have become true benchmarks of success for individuals aspiring to enter this industry. </p>
</div>
</div>


<div class="container_2">
  <div class="image-container_2">
      <img src="f a.webp" alt="image" class="resized_image_2">
      <p>Drop Dead Gorgeous Dress</p>
      <p>$92.00</p>
  </div>
  <div class="image-container_2">
      <img src="fj.webp" alt="image" class="resized_image_2">
  </div>
  <div class="image-container_2">
    <img src="f g.webp" alt="image" class="resized_image_2">
<p>All That and More Dress</p>
<p>$54.00</p>
</div>
<div class="image-container_2">
    <img src="fe.webp" alt="image" class="resized_image_2">
    <p>Hillary Top</p>
    <p>$38.00</p>
</div>
</div>

<div class="container_3">
  <div class="image-container_3">
      <img src="f b.webp" alt="image" class="resized_image_3">  
  </div>
  <div class="image-container_3">
      <img src="fe.webp" alt="image" class="resized_image_3">
      <p>Payton Top</p>
     <p> $44.00</p>
  </div>
  <div class="image-container_3">
    <img src="fh.webp" alt="image" class="resized_image_3">
    <p>All The Range Romper</p>
    <p>62.00</p>
</div>
<div class="image-container_3">
    <img src="fk.webp" alt="image" class="resized_image_3">
    <p>Sun Valley Max Dress</p>
    <p>$92.00</p>
</div>
</div>

<div class="container_4">
  <div class="image-container_4">
      <img src="7.webp" alt="image" class="resized_image_4">
      <p>Petal Picking Top</p>
      <p>$32.00</p>
  </div>
  <div class="image-container_4">
      <img src="8.webp" alt="image" class="resized_image_4">
      <p>Kiki Midi Dress</p>
      <p>$84.00</p>
  </div>
  <div class="image-container_4">
    <img src="10.webp" alt="image" class="resized_image_4">
    <p>Johnny Denim Trousers</p>
    <p>$48.00</p>
</div>
<div class="image-container_4">
    <img src="12.webp" alt="image" class="resized_image_4">
    <p>All That And More Dress</p>
    <p>$46.00</p>
</div>
</div>

<div class="container_5">
  <div class="image-container_5">
      <img src="13.webp" alt="image" class="resized_image_5">
      <p>Line Dancing Mini dress</p>
      <p>$72.00</p>
  </div>
  <div class="image-container_5">
      <img src="14.webp" alt="image" class="resized_image_5">
      <p>Beautiful Mini Skirt</p>
      <p>$18.00</p>
  </div>
  <div class="image-container_5">
    <img src="15.webp" alt="image" class="resized_image_5">
    <p>My DearestTop</p>
      <p>$68.00</p>
</div>
<div class="image-container_5">
    <img src="16.webp" alt="image" class="resized_image_5">
    <p>Shelby Dresses</p>
    <p>$68.00</p>
</div>
</div>

<div class="container_6">
    <div class="image-container_6">
        <img src="21.webp" alt="image" class="resized_image_6">
        <p>Carly Max Skirt</p>
        <p>$56.00</p>
    </div>
    <div class="image-container_6">
        <img src="18.webp" alt="image" class="resized_image_6">
        <p>In Due Time Dresses</p>
        <p>$72.00</p>
    </div>
    <div class="image-container_6">
      <img src="19.webp" alt="image" class="resized_image_6">
     <P> HERO WEEK ADVERTISEMENT</P>
  </div>
  <div class="image-container_6">
      <img src="20.webp" alt="image" class="resized_image_6">
      <P>Micah Top Dress</P>
      <p>$42.00</p>
  </div>
</div>

<div class="container_7a">
    <ul>
        <h><b>about us</b></h>
        <ul><a href="story.html">our story</a></ul>
        <ul><a href="team.html">our team</a></ul>
        <ul><a href="collap.html">collabs</a></ul>
    </ul>

    <ul>
        <h><b>customer care</b></h>
        <ul><a href="card.html">gift card</a></ul>
        <ul><a href="inf.html">shipping inf</a></ul>
    </ul>

    <ul>
        <h><b>contact us</b></h>
        <ul><a href="our.html">our stores</a></ul>
        <ul><a href="whole.html">wholesale</a></ul>
        <ul><a href="rep.html">compus reps</a></ul>
    </ul>

    <ul>
      <h><b>contact us</b></h>
      <a href="https://web.facebook.com/vestique/?_rdc=1&_rdr"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.instagram.com/vestique/"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@vestique"><i class="fa-brands fa-tiktok"></i></a>
  </ul>

</div>
<script src="https://kit.fontawesome.com/c618e882ef.js" crossorigin="anonymous"></script>

</body>
</html>