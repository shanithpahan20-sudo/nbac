<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Nihonbashi Campus</title>
  <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
  <meta name="description" content="This is an education html template made by UIcodeX.">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="Title.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="logonbac.png" width="100" height="50" alt="nbac logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="logo.svg" width="100" height="50" alt="EduWeb logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="Login & Register.php" class="navbar-link" data-nav-link>Log In</a>
          </li>

          <li class="navbar-item">
            <a href="Tutors.php" class="navbar-link" data-nav-link>Tutors</a>
          </li>

          <li class="navbar-item">
            <a href="https://nbac-edu.com/" class="navbar-link" data-nav-link>Student LMS</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <!-- <button class="header-action-btn" aria-label="toggle search" title="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="header-action-btn" aria-label="cart" title="Cart">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button> -->

        <a href="#about" class="btn has-before">
          <span class="span">Contact Us</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('Back4.PNG')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              ようこそ! Want to<span class="span">Start</span> Your Journey In Japan?
            </h1>

            <p class="hero-text">
              <span class="intro">We are here to help you succeed in your life in Japan.</span>
            </p>

            <a href="#category" class="btn has-before">
              <span class="span">Find courses</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <!-- <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="student3.jpg" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="engineer.jpg" width="240" height="370" alt="hero banner" class="img-cover">
            </div> -->

            <!-- <img src="#" width="380" height="190" alt="" class="shape hero-shape-1"> -->

            <!-- <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2"> -->

          <!-- </figure> -->

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" id="category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Categories</p>

          <h2 class="h2 section-title">
            Online <span class="span">Classes</span> For Remote Learning.
          </h2> 
          

          <p class="section-text">
            Join course and learn from the best instructors at your own pace
          </p>

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <img src="n5.svg" width="40" height="40" loading="lazy"
                    alt="Online Course Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="https://nbac-edu.com/" class="card-title">JLPT N5</a>
                </h3>

                <p class="card-text">
                  Click here to learn more about online N5 program.
                </p>

                <span class="card-badge">25 Lessons</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">

                <div class="card-icon">
                  <img src="n4.svg" width="40" height="40" loading="lazy"
                    alt="Non-Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="https://nbac-edu.com/" class="card-title">JLPT N4</a>
                </h3>

                <p class="card-text">
                  Click here to learn more about online N4 program.
                </p>

                <span class="card-badge">25 Lessons</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <img src="n3.svg" width="40" height="40" loading="lazy"
                    alt="Off-Campus Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="https://nbac-edu.com/" class="card-title">JLPT N3</a>
                </h3>

                <p class="card-text">
                  Click here to learn more about online N3 program.
                </p>

                <span class="card-badge">5 Courses</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <img src="jft.svg" width="40" height="40" loading="lazy"
                    alt="Hybrid Distance Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="https://nbac-edu.com/" class="card-title">JFT</a>
                </h3>

                <p class="card-text">
                  Click here to learn more about online JFT program.
                </p>

                <span class="card-badge">18 Lessons</span>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about mt-1" id="about" aria-label="about">
        <div class="container mt-1">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 480;">
              <img src="aboutback.jpg" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            <!-- <img src="#" width="360" height="420" loading="lazy" alt=""
              class="shape about-shape-1"> -->

            <img src="./assets/images/about-shape-2.svg" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2">

            <img src="./assets/images/about-shape-3.png" width="722" height="328" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">
              Over 05 Years in <span class="span">Experience</span> for Language Development
            </h2>

            <p class="section-text">
              We're specialized in providing education programs for people who want to learn Japanese language and experts in all visa category.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Expert Trainers</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Online Remote Learning</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Lifetime Access</span>
              </li>

              <!-- <a href="#" class="span">
              <span class="span"> -->
                
              <!-- </span> -->

            </ul>

            <button class="btn-wa" onclick="window.location.href='https://wa.link/xiflih';">
              Contact via WhatsApp</button>

            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <!-- <section class="section course" id="courses" aria-label="course">
        <div class="container">

          <p class="section-subtitle">Popular Courses</p>

          <h2 class="h2 section-title">Pick A Course To Get Started</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                    alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Weeks</span>
                </div>

                <div class="card-content">

                  <span class="badge">Beginner</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Build Responsive Real- World Websites with HTML and CSS</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29">$29.00</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">8 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">20 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
                    alt="Java Programming Masterclass for Software Developers" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">8 Weeks</span>
                </div>

                <div class="card-content">

                  <span class="badge">Advanced</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Java Programming Masterclass for Software Developers</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.5 /9 Rating)</p>

                  </div>

                  <data class="price" value="49">$49.00</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">15 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">35 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-3.jpg" width="370" height="220" loading="lazy"
                    alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Weeks</span>
                </div>

                <div class="card-content">

                  <span class="badge">Intermediate</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">The Complete Camtasia Course for Content Creators</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.9 /7 Rating)</p>

                  </div>

                  <data class="price" value="35">$35.00</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">13 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">18 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn has-before">
            <span class="span">Browse more courses</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section> -->





      <!-- 
        - #VIDEO
      -->

      <section class="video has-bg-image" aria-label="video"
        style="background-image: url('./assets/images/video-bg.png')">
        <div class="container mt-1">

          <div class="video-card">

            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
              <img src="./assets/images/video-banner.jpg" width="970" height="550" loading="lazy" alt="video banner"
                class="img-cover">

              <button class="play-btn" aria-label="play video">
                <ion-icon name="play" aria-hidden="true"></ion-icon>
              </button>
            </div>

            <img src="./assets/images/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
              class="shape video-shape-1">

            <img src="./assets/images/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
              class="shape video-shape-2">

          </div>

        </div>
      </section>





      <!-- 
        - #STATE
      -->

      <section class="section stats" aria-label="stats">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="stats-card" style="--color: 170, 75%, 41%">
                <h3 class="card-title">15.3k</h3>

                <p class="card-text">Student Enrolled</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 351, 83%, 61%">
                <h3 class="card-title">10.4K</h3>

                <p class="card-text">Class Completed</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 260, 100%, 67%">
                <h3 class="card-title">100%</h3>

                <p class="card-text">Visa Success Rate</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 42, 94%, 55%">
                <h3 class="card-title">10+</h3>

                <p class="card-text">Top Instructors</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('./assets/images/blog-bg.svg')">
        <div class="container mt-2">

          <p class="section-subtitle">Latest Articles</p>

          <h2 class="h2 section-title">Get News With Nihonbashi Campus</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="./assets/images/b1.jpg" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="https://wa.link/xiflih" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="https://wa.link/xiflih" class="card-subtitle">APRIL BATCH</a>

                  <h3 class="h3">
                    <a href="https://wa.link/xiflih" class="card-title">April Student Visa approved 2025 April Batch.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <!-- <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon> -->

                      <span class="span">April 2025</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Waseda,Tokyo</span>
                    </li>

                  </ul>

                  <!-- <p class="card-text">
                    Lorem Ipsum Dolor Sit Amet Cons Tetur Adipisicing Sed.
                  </p> -->

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="./assets/images/b2.jpg" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="https://wa.link/xiflih" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="https://wa.link/xiflih" class="card-subtitle"></a>

                  <h3 class="h3">
                    <a href="https://wa.link/xiflih" class="card-title">Students gets Waseda University Succesfully !!</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <!-- <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon> -->

                      <span class="span">20 Students</span>
                    </li>

                    <!-- <li class="card-meta-item">
                      <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                      <span class="span"></span>
                    </li> -->

                  </ul>

                  <p class="card-text">
                    <!-- Lorem Ipsum Dolor Sit Amet Cons Tetur Adipisicing Sed. -->
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="./assets/images/b3.jpg" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="https://wa.link/xiflih" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="https://wa.link/xiflih" class="card-subtitle"></a>

                  <h3 class="h3">
                    <a href="https://wa.link/xiflih" class="card-title">早稲田国際大学日本橋学生。 N5は全員無事合格しました。</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <!-- <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon> -->

                      <span class="span"></span>
                    </li>

                    <li class="card-meta-item">
                      <!-- <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon> -->

                      <!-- <span class="span">Com 09</span> -->
                    </li>

                  </ul>

                  <!-- <p class="card-text">
                    
                  </p> -->

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape">

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="logonbac.png" width="162" height="50" alt="nbac logo">
          </a>

          <p class="footer-brand-text">
            Nihonbashi Academy is a place where you can learn and develop your language and skills. We are here to help you succeed in your life in Japan.
          </p>

          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">No.752 Dr Danister De Silva Mawatha, Colombo 09</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="https://wa.link/xiflih" class="footer-link">+81 80-4218-5028</a>
            <a href="tel:+94772263303" class="footer-link">+94 77 226 3303</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="info@nbac-edu.com" class="footer-link">info@nbac-edu.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">University</p>
          </li>

          <li>
            <a href="#about" class="footer-link">About</a>
          </li>

          <li>
            <a href="#category" class="footer-link">Courses</a>
          </li>

          <li>
            <a href="tutors.php" class="footer-link">Instructors</a>
          </li>

          <li>
            <a href="https://nbac-edu.com/" class="footer-link">Student LMS</a>
          </li>

          <li>
            <a href="https://wa.link/xiflih" class="footer-link">Join Us</a>
          </li>

          <li>
            <a href="https://wa.link/xiflih" class="footer-link">Online Support</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="https://wa.link/xiflih" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#blog" class="footer-link">Gallery</a>
          </li>

          <li>
            <a href="#blog" class="footer-link">News & Articles</a>
          </li>

          <li>
            <a href="https://wa.link/vysku8" class="footer-link">FAQ's</a>
          </li>

          <li>
            <a href="Login & Register.php" class="footer-link">Sign In/Registration</a>
          </li>

          <li>
            <a href="#blog" class="footer-link">Coming Soon</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/share/166TpFz8XJ/?mibextid=wwXIfr" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://wa.link/xiflih" class="social-link">
                <ion-icon name="logo-whatsapp"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Created by ShanithPeiris.2025<a href="https://wa.link/nmeqgx" class="copyright-link"></a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>