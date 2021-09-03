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
          <li><a href="#home" class="nav-links">Home</a></li>
          <li><a href="#about" class="nav-links">About Us</a></li>
          <li><a href="#blogs" class="nav-links">Blog</a></li>
          <li><a href="#products" class="nav-links">Products</a></li>
          <li><a href="#contact" class="nav-links">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <!-- Home/Banner section -->
    <div class="slideshow-container" id="home">
        <div class="mySlides fade">
          <img src="../assets/banner1.jpg" style="width:100%; height: 100%">
          <div class="text">WELCOME TO EUGO FARM</div>
        </div>

        <div class="mySlides fade">
          <img src="../assets/banner2.jpg" style="width:100%; height: 100%">
          <div class="text">WELCOME TO EUGO FARM</div>
        </div>
  
        <div class="mySlides fade">
          <img src="../assets/banner3.jpg" style="width:100%; height: 100%">
          <div class="text">WELCOME TO EUGO FARM</div>
        </div>
  
        <div class="mySlides fade">
          <img src="../assets/banner4.jpg" style="width:100%; height: 100%">
          <div class="text">WELCOME TO EUGO FARM</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    
    <!-- About section -->
    <section class="about" id="about">
      <h1 class="heading"> <span>about</span> us </h1>
  
      <div class="row">
          <div class="image">
            <img src="../assets/logo.png" alt="Eugo Farm">
          </div>
  
          <div class="content">
            <h3>Our Story</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
          </div>
      </div>

      <div class="row">
        <div class="mission_vision">
          <h3>MISSION</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! </p>
        </div>
  
        <div class="mission_vision">
          <h3>VISION</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! </p>
        </div>
      </div>  
    </section>

    <!-- Blog Section -->

    <section class="blogs" id="blogs">

      <h1 class="heading"> our <span>blogs</span> </h1>

      <div class="box-container">

        <?php foreach($query as $q){ ?>
          <div class="box">
              <div class="content">
                <div class="image">
                  <img src="<?php echo $q['image']; ?>">
                </div>
                <div class="content">
                  <a href="view.php" class="title"><?php echo $q['title'];?></a>
                  <span>by admin / <?php echo $q['date'];?></span>
                  <p><?php echo substr($q['content'], 0, 50);?>...</p>
                  <a href="view.php?blog_id=<?php echo $q['blog_id'];?>" class="btn">Read More</a>
                </div>  
              </div>
          </div>
        <?php } ?>
      </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
      <h1 class="heading"> our <span>products</span> </h1>
  
      <div class="box-container">
          <div class="box">
              <div class="image">
                  <img src="../assets/product1.jpg" alt="free range eggs">
              </div>
              <div class="content">
                  <h3>Free range eggs</h3>
              </div>
          </div>
  
          <div class="box">
              <div class="image">
                  <img src="../assets/product2.jpg" alt="Heritage chicks">
              </div>
              <div class="content">
                  <h3>Heritage chicks</h3>
              </div>
          </div>
  
          <div class="box">
              <div class="image">
                  <img src="../assets/product3.jpg" alt="Miracle fruit juice">
              </div>
              <div class="content">
                  <h3>Miracle fruit juice</h3>
              </div>
          </div>
      </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact" id="contact">
      <h1 class="heading"> <span>contact</span> us </h1>

      <div class="row">  
          <form method="POST" action="../backend/contact_us.php">
              <h3>Get in touch with us if you have any questions or concerns.</h3>
              <div class="inputBox">
                  <span class="fas fa-user"></span>
                  <input type="text" name="name" placeholder="name" required>
              </div>
              <div class="inputBox">
                  <span class="fas fa-envelope"></span>
                  <input type="email" name="email" placeholder="email" required>
              </div>
              <div class="inputBox">
                  <span class="fas fa-phone"></span>
                  <input type="number" name="number" placeholder="number" required>
              </div>
              <div class="inputBox">
                <span class="fas fa-edit"></span>
                <textarea name="msg" placeholder="message" required></textarea>
              </div>

              <input type="submit" value="contact now" class="btn">
          </form>

      </div>
    </section>

    <section class="location">
      <h3>Location</h3>
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7538.317390248684!2d72.84332137832642!3d19.144529498710313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a57637f8fb0233%3A0xfaa482236e2da1a5!2sNumancia%2C%20Aklan%2C%20Philippines!5e0!3m2!1sen!2sin!4v1630138848732!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <p>Address: Numancia, Aklan, Philippines 5604</p>
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
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#blogs">Blog</a>
          <a href="#products">Products</a>
          <a href="#contact">Contact Us</a>
      </div>
  
      <div class="credit">Eugo Farm &#169 2021 All rights reserved</div>
    </section>

    <!-- custom js file link -->
    <script type="text/javascript" src="../JavaScript/app.js"></script>
  </body>
</html>