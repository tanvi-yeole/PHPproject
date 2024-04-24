<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>University Website Design</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,400;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
    /> -->
  </head>
  <body>
    <section class="header">
      <nav>
        <a href="index.html"><img src="eduford_img/logo.png" style="filter: invert(1);" /></a>
        <div class="nav-links" id="navLinks">
          <i class="bi bi-x" onclick="hideMenu()"></i>
          <ul>
            <li><a style="color: black" href="index.php">HOME</a></li>
            <li><a style="color: black" href="">ABOUT</a></li>
            <li><a style="color: black" href="#course">COURSE</a></li>
            <li><a style="color: black" href="">BLOG</a></li>
            <li><a style="color: black" href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        <i class="bi bi-list" onclick="showMenu()"></i>
    </nav>
    <hr>
    </section>

    <section id="contact-form">
        <h3>Let us Talk!</h3>
        <form class="contactForm" action="insert.php" method="post">
            <input type="text" name="uname" placeholder="Name">
            <input type="email" name="umail" placeholder="Email">
            <textarea name="umsg" cols="30" rows="10" placeholder="What's the Concern?"></textarea>
            <button class="btn" type="submit">Submit</button>
        </form>
    </section>
    


     <!-- Footer -->

     <section class="footer">
      <h4>About Us</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fuga vitae sapiente earum possimus <br>unde quidem delectus placeat sint. Totam, hic?</p>
      <div class="icons">
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-linkedin"></i>
      </div>
      <p>Made with <i class="bi bi-heart"></i> by Tanvi Tutorials</p>
     </section>


    <!-- Javascript for Toggle menu -->
    <script>
        var navLinks = document.getElementById("navLinks"); 
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
  </body>
</html>
