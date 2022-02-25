<?php 

session_start();

if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="welcome.css">
  <title>Main Page</title>
</head>

<body>
  
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>R</span>eaper <span>S</span>upercarz</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Hot Deals</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="logout.php" data-after="Contact">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Welcome ! <span></span></h1>
        <?php
        echo "<h1>". $_SESSION['fullname'] ."<span></span></h1>";
        ?>
        <a href="#projects" type="button" class="cta">Find Your Dream Car</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Our <span>Services</span></h1>
        <p>These are the services that we provide to our customer.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/100/000000/external-insurance-automobile-kiranshastry-lineal-color-kiranshastry-1.png" /></div>
          <h2>Insurance</h2>
          <p>Your million dollar supercars are quite insured for the future, right at our place.<br/><br/></p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/color/100/000000/car-service.png" /></div>
          <h2>Maintenance</h2>
          <p>Free Scheduled Maintenance is provided for a whole year (Terms and Conditions applied).<br/>
        <br/></p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/external-filled-outline-icons-maxicons/100/000000/external-claim-insurance-filled-outline-filled-outline-icons-maxicons.png"/></div>
          <h2>100% Claim</h2>
          <p>Products failing to meet the given specifications will hold 100% of claim back within 3 months of purchase.<br/></p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/external-microdots-premium-microdot-graphic/100/000000/external-fuel-engineer-construction-microdots-premium-microdot-graphic.png"/></div>
          <h2>Free Gas</h2>
          <p>Supercar holders will get free gas fuel for 2 weeks (Terms and Conditions applied).<br/><br/>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Brand <span>Hot </span>Deals</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
         
            <div class="project-info brand" >
                <h1>Lamborghini Aventador</h1>
                <h2>Price: <span>$393,695</span></h1>
				        <a href="payment.php" class="cta">Buy Now</a>
                <a href="https://youtu.be/HU1OSqG_2UI" class="cta">Details</a>
            </div>
          <div class="project-img">
            <img src="images/lamave.jpg" alt="img">
          </div>
        </div>
        
        <div class="project-item">
          <div class="project-info brand">
            <h1>Aston Martin Valhalla</h1>
            <h2>Price: <span>$800,000</span></h2>
            <a href="payment.php" class="cta">Buy Now</a>
            <a href="https://youtu.be/emZkPQ6uYHI" class="cta">Details</a>
          </div>
          <div class="project-img">
            <img src="images/valhalla.jpg" alt="img">
          </div>
        </div>
        
        <div class="project-item">
          <div class="project-info brand">
            <h1>Buggati Chiron</h1>
            <h2>Price: <span>$3,000,000</span></h2>
            <a href="payment.php" class="cta">Buy Now</a>
            <a href="https://youtu.be/sy1I6ExHQ0g" class="cta">Details</a>
          </div>
          <div class="project-img">
            <img src="images/buggati.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info brand">
            <h1>Mercedes Benz AMG GT</h1>
            <h2>Price: <span>$165,000</span></h2>
            <a href="payment.php" class="cta">Buy Now</a>
            <a href="https://youtu.be/J_IaR7yOPjM" class="cta">Details</a>
          </div>
          <div class="project-img">
            <img src="images/mercedes.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info brand">
            <h1>McLaren 720S</h1>
            <h2>Price: <span>$299,000</span></h2>
            <a href="payment.php" class="cta">Buy Now</a>
            <a href="https://youtu.be/Zbzqx-hGOCg" class="cta">Details</a>
          </div>
          <div class="project-img">
            <img src="images/mclaren.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  
  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="images/portfolio.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Cybersecurity Researcher</h2>
        <p>Hi ! i am Roshan Subba, currently studying at Softwarica College of IT and E-commerce. I am from Ethical Hacking and Cybersecurity, Batch 30 . This was our coursework given by Niman Maharjan sir. This is a prototype version of supercar selling website.</p>
        <a href="fakecv.pdf" class="cta" Download>Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>9801234567</h2>
            <h2>01-45789</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>reapersupercarz@gmail.com</h2>
            <h2>roshansubba1779@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Kathmandu, Nepal</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>R</span>oshan <span>S</span>ubba</h1>
      </div>
      <h2>Connect With Us</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
      </div>
      <p>Copyright © 2022 Reaper Supercarz. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="js/welcome.js"></script>
</body>

</html>