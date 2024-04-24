<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eduford</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="about">
    <!-- Header start -->
    <header class="header">
      <nav class="navbar">
        <a href="index.html" class="navbar__logo">
          <img src="/images/logo.png" alt="logo" />
        </a>
        <ul class="navbar__list" id="navbar__list">
          <li class="navbar__item">
            <i class="fa fa-times" onclick="hideMenu()"></i>
          </li>
          <li class="navbar__item">
            <a href="index.php" class="navbar__link">home</a>
          </li>
          <li class="navbar__item navbar__item--active">
            <a href="about.php" class="navbar__link">about</a>
          </li>
          <li class="navbar__item">
            <a href="course.php" class="navbar__link">course</a>
          </li>
          <li class="navbar__item">
            <a href="blog.php" class="navbar__link">blog</a>
          </li>
          <li class="navbar__item">
            <a href="contact." class="navbar__link">contact</a>
          </li>
        </ul>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <div class="hero-text">
        <h2 class="heading-2 heading-2--white mb-md">About Us</h2>
      </div>
    </header>
    <!-- Header end -->
    <!-- About Us start -->
    <section class="aboutus">
      <div class="aboutus__item">
        <h2 class="heading-2 mb-sm">
          We are the world's largest <br />
          teaching platform
        </h2>
        <p class="paragraph mb-sm">
          Eduford University is one of the world’s leading academic and research
          institutions, offering a unique educational experience that prepares
          the next generation of global citizens to lead and make a difference
          in the world. We are a vibrant community of exceptional students,
          faculty, alumni and professionals dedicated to real-world applications
          of our research, scholarship, faith and service. Established in 1989,
          Eduford is the nation’s oldest Catholic and Jesuit university. Drawing
          upon the 450-year-old legacy of Jesuit education, we provide students
          with a world-class learning experience focused on educating the whole
          person through exposure to different faiths, cultures and beliefs.
        </p>
        <button class="btn btn--red">EXPLORE NOW</button>
      </div>
      <div class="aboutus__item">
        <div class="aboutus__image">
          <img src="/images/about.jpg" alt="Abhishek Roy" />
        </div>
      </div>
    </section>
    <!-- About Us end -->
    <!-- Footer start -->
    <section class="footer">
      <h3 class="heading-3 mb-lg">About Us</h3>
      <p class="paragraph mb-lg">
        We’re a leading research university with a heart. Founded in the decade
        that the U.S. Constitution was signed, we’re the nation’s oldest
        Catholic and Jesuit university. We’re a community of people who bridge
        our disparate experiences and identities. Meet the people and places
        that make Eduford home.
      </p>
      <p class="paragraph mb-sm">
        Made by
        <a href="https://www.linkedin.com/in/yousef-elshabrawy-965a69197/"
          >Yousef Elshabrawy</a
        >
      </p>
    </section>
    <!-- Footer end -->
    <script>
      const nav = document.getElementById('navbar__list');
      function showMenu() {
        nav.style.right = '0px';
      }
      function hideMenu() {
        nav.style.right = '-60rem';
      }
    </script>
  </body>
</html>