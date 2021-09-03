<?php
  include("DBConnector.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eugo Farm</title>

    <!-- Font Awesome Link cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- CSS link -->

    <link rel="stylesheet" type="text/css" href="../CSS/syles.css" />
    <style>
      .blogs .heading h1{
        text-align: center;
        color: white;
        text-transform: uppercase;
        padding-bottom: 3.5rem;
        font-size: 4rem;
      }
      .blogs .image img{
        height: 100%;
        object-fit: cover;
        width: 100%;
      }

      #content{
        text-align: justify;
        color: white;
        font-size: 2rem;
        line-height: 2;
      }
    </style>
  </head>

  <body>
    <!-- HEADER -->
    <header class="header">
      <nav class="navbar">
        <a href="#" class="logo">
          <img id="navbar-logo" src="../assets/logo.png" alt="Eugo Farm logo" />
        </a>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="nav-menu">
          <li><a href="index.php#home" class="nav-links">Home</a></li>
          <li><a href="index.php#about" class="nav-links">About Us</a></li>
          <li><a href="index.php#blogs" class="nav-links">Blog</a></li>
          <li><a href="index.php#products" class="nav-links">Products</a></li>
          <li><a href="index.php#contact" class="nav-links">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <!-- Blog Section -->

    <section class="blogs" id="blogs">
        <?php foreach($query as $q){ ?>
          <div class="heading">
              <h1><?php echo $q['title'];?></h1>
          </div>
          <div class="image">
              <img src="<?php echo $q['image']; ?>">
          </div>
          <p class="content" id="content"><?php echo $q['content'];?></p>
        <?php } ?>
    </section>

   
    <!-- Footer -->
    <section class="footer">
      <div class="row">
        <h4>Call us: 222-1234</h4>
        <img id="footer-logo" src="../assets/logo.png" alt="Eugo Farm logo" />
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
      </div>
      
      <div class="links">
          <a href="index.php#home">Home</a>
          <a href="index.php#about">About</a>
          <a href="index.php#blogs">Blog</a>
          <a href="index.php#products">Products</a>
          <a href="index.php#contact">Contact Us</a>
      </div>
  
      <div class="credit">Eugo Farm &#169 2021 All rights reserved</div>
    </section>

    <!-- custom js file link -->
    <script type="text/javascript" src="../JavaScript/app.js"></script>
  </body>
</html>