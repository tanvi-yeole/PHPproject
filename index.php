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
    <section class="header" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(eduford_img/banner.png); min-height: 100vh;">
      <nav>
        <a href="index.html"><img src="eduford_img/logo.png"/></a>
        <div class="nav-links" id="navLinks">
          <i class="bi bi-x" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="#course">COURSE</a></li>
            <li><a href="">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        <i class="bi bi-list" onclick="showMenu()"></i>
      </nav>
      <div class="text-box">
        <h1>World's Biggest University</h1>
        <p>
          Making website is now one of the easiest thing in the world.You just
          need to learn HTML, CSS, <br />Javscript and you are good to go.
        </p>
        <a href="" class="hero-btn">Visit Us to Know More</a>
      </div>
    </section>
    <!-- course -->
    <section class="course" id="course">
      <h1>Courses We Offer</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="course-col">
          <h3>Intermediate</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ratione quis qui consequuntur tenetur, nesciunt quidem voluptate repudiandae voluptatibus dicta magni nulla nostrum eveniet, distinctio, ducimus similique porro atque sint!</p>
        </div>
        <div class="course-col">
          <h3>Degree</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ratione quis qui consequuntur tenetur, nesciunt quidem voluptate repudiandae voluptatibus dicta magni nulla nostrum eveniet, distinctio, ducimus similique porro atque sint!</p>
        </div>
        <div class="course-col">
          <h3>Post Graduation</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ratione quis qui consequuntur tenetur, nesciunt quidem voluptate repudiandae voluptatibus dicta magni nulla nostrum eveniet, distinctio, ducimus similique porro atque sint!</p>
        </div>
      </div>
    </section>

      <!-- campus -->

      <section class="campus">
        <h1>Our Global Campus</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate!</p>
        <div class="row">
          <div class="campus-col">
            <img src="eduford_img/london.png">
            <div class="layer">
              <h3>LONDON</h3>
            </div>
            </div>
          <div class="campus-col">
            <img src="eduford_img/newyork.png">
            <div class="layer">
              <h3>NEW YORK</h3>
            </div>
            </div>
          <div class="campus-col">
            <img src="eduford_img/washington.png">
            <div class="layer">
              <h3>WASHINGTON</h3>
            </div>
          </div>
        </div>

      </section>

      <!-- facilities -->
      <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis.</p>

        <div class="row">
          <div class="facilities-col">
            <img src="eduford_img/library.png">
            <h3>World Class Library</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In maxime numquam ipsam et aliquid incidunt.</p>
          </div>
          <div class="facilities-col">
            <img src="eduford_img/basketball.png">
            <h3>Largest Play Ground</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda molestias cupiditate dolorum beatae, quas aut!</p>
          </div>
          <div class="facilities-col">
            <img src="eduford_img/cafeteria.png">
            <h3>Tasty and Healthy Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorem est molestiae dicta, quisquam minus?</p>
          </div>
        </div>
      </section>

      <!-- Testimonial -->
      
      <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint.</p>
        <div class="row">
          <div class="testimonial-col">
            <img src="eduford_img/user1.jpg">
            <div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur repellat ab tempore at expedita perspiciatis, quaerat temporibus, deleniti modi qui quibusdam aut ipsa, facere neque?</p>
              <h3>Christine Berkley</h3>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
            </div>
            </div>
          <div class="testimonial-col">
            <img src="eduford_img/user2.jpg">
            <div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur repellat ab tempore at expedita perspiciatis, quaerat temporibus, deleniti modi qui quibusdam aut ipsa, facere neque?</p>
              <h3>David Byer</h3>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </div>
            </div>
        
          </div>
        </div>
      </section>




      <!-- Call to action -->

      <section class="cta">
        <h1>Enroll for our various Online courses anywhere from the world</h1>
        <a href="contact.php"class="hero-btn">CONTACT US</a>
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
