
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutors | Nihonbashi Campus</title>
  <link rel="shortcut icon" href="Title.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body id="top">
  <header class="header" data-header>
    <div class="container">
      <a href="index.php" class="logo">
        <img src="logonbac.png" width="100" height="50" alt="nbac logo">
      </a>
      <nav class="navbar" data-navbar>
        <div class="wrapper">
          <a href="index.php" class="logo">
            <img src="logo.svg" width="100" height="50" alt="EduWeb logo">
          </a>
          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>
        <ul class="navbar-list">
          <li class="navbar-item"><a href="index.php#home" class="navbar-link" data-nav-link>Home</a></li>
          <li class="navbar-item"><a href="index.php#about" class="navbar-link" data-nav-link>About</a></li>
          <li class="navbar-item"><a href="Login & Register.php" class="navbar-link" data-nav-link>Log In</a></li>
          <li class="navbar-item"><a href="Tutors.php" class="navbar-link active" data-nav-link>Tutors</a></li>
          <li class="navbar-item"><a href="https://nbac-edu.com/" class="navbar-link" data-nav-link>Student LMS</a></li>
        </ul>
      </nav>
      <div class="header-actions">
        <a href="https://wa.link/xiflih" class="btn has-before">
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
    <section class="section" id="tutors" aria-label="Tutors">
      <div class="container">
        <h2 class="h2 section-title">Our <span class="span">Tutors & Staff</span></h2>
        <div class="tutors-list-vertical" id="tutors-list"></div>
      </div>
    </section>
    <style>
      h2{
        margin-bottom: 100px;
        margin-top: 100px;
      }
      .tutors-list-vertical {
        display: flex;
        flex-direction: column;
        gap: 3rem;
        align-items: center;
        width: 100%;
        margin: 0 auto;
      }
      .tutor-card-modern-vertical {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        padding: 2.5rem 2rem;
        width: 90vw;
        max-width: 700px;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 2.5rem;
        transition: transform 0.2s, box-shadow 0.2s;
        margin-bottom: 0;
      }
      .tutor-card-modern-vertical:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 8px 32px rgba(0,0,0,0.15);
      }
      .tutor-photo-modern-vertical {
        width: 220px;
        height: 220px;
        overflow: hidden;
        margin-bottom: 0;
        border: 4px solid #e0e0e0;
        background: #f8f8f8;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0;
      }
      .img-cover-vertical {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 0;
        display: block;
      }
      .tutor-info-modern-vertical {
        text-align: left;
        flex: 1;
      }
      .tutor-name {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #1a1a1a;
      }
      .tutor-role {
        font-size: 1.2rem;
        color: #4a90e2;
        margin-bottom: 1rem;
        font-weight: 500;
      }
      .tutor-desc {
        font-size: 1.1rem;
        color: #555;
        min-height: 48px;
      }
      @media (max-width: 900px) {
        .tutor-card-modern-vertical {
          flex-direction: column;
          align-items: center;
          gap: 1.5rem;
          padding: 1.5rem 1rem;
        }
        .tutor-photo-modern-vertical {
          width: 160px;
          height: 160px;
        }
        .tutor-info-modern-vertical {
          text-align: center;
        }
      }
      @media (max-width: 600px) {
        .tutor-card-modern-vertical {
          width: 99vw;
          max-width: 99vw;
          padding: 1rem 0.5rem;
        }
        .tutor-photo-modern-vertical {
          width: 100px;
          height: 100px;
        }
        .tutor-name {
          font-size: 1.2rem;
        }
        .tutor-role {
          font-size: 1rem;
        }
        .tutor-desc {
          font-size: 0.98rem;
        }
      }
    </style>
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


  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>
  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="tutors.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const tutorsList = document.getElementById("tutors-list");
      if (!window.tutors || !Array.isArray(tutors)) return;
      tutorsList.innerHTML = tutors.map(tutor => `
        <div class="tutor-card-modern-vertical">
          <div class="tutor-photo-modern-vertical">
            <img src="${tutor.img}" alt="${tutor.name}" class="img-cover-vertical">
          </div>
          <div class="tutor-info-modern-vertical">
            <h3 class="tutor-name">${tutor.name}</h3>
            <p class="tutor-role">${tutor.role}</p>
            <p class="tutor-desc">${tutor.desc}</p>
          </div>
        </div>
      `).join('');
    });
  </script>
</body>
</html> 