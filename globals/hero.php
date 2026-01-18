<header id="hero" class="container-fluid py-5 position-relative overflow-hidden">

  <div class="row align-items-center gy-4 hero-content">

    <!-- Profile Image -->
    <div class="col-lg-4 mx-auto d-flex align-items-center justify-content-center my-img-container">
      <span class="img-accent"></span>
      <img
        src="./assets/pic_suit.png"
        alt="Karl Stephen Evallo - Computer Engineer and Web Developer"
        class="img-fluid my-img"
        width="300"
        height="300">
    </div>


    <!-- Hero Text -->
    <div class="col-lg-8 mx-auto text-center text-lg-start mb-5 mb-lg-0 d-flex  flex-column">

      <!-- MAIN HEADING -->
      <h1 class="display-5 fw-bold text-dark mb-2">
        Hi, I’m Karl Stephen Evallo
      </h1>

      <!-- SUB-HEADING WITH TYPEWRITER -->
      <h2 class="role-heading mb-3">
        I'm a
        <span class="gradient-text" id="typed-text"></span>
        <span class="cursor">|</span>
      </h2>

      <p class="fs-3 lead text-dark mt-3">
        I build scalable web applications and intelligent embedded systems
        using modern web technologies and microcontrollers.
      </p>

      <!-- SOCIAL ICONS -->
      <div class="hero-socials mt-3 mb-4">
        <a href="https://github.com/miyokoshinzu" target="_blank" aria-label="GitHub">
          <img src="./assets/socials/github.png" alt="GitHub">
        </a>
        <a href="https://www.linkedin.com/in/evallokarlstephen/" target="_blank" aria-label="LinkedIn">
          <img src="./assets/socials/linkedin.png" alt="LinkedIn">
        </a>

        <a href="https://facebook.com/evkarlstephen" target="_blank" aria-label="Facebook">
          <img src="./assets/socials/facebook.png" alt="Facebook">
        </a>

        <a href="https://www.youtube.com/@ets-dev" target="_blank" aria-label="YouTube">
          <img src="./assets/socials/youtube.png" alt="YouTube">
        </a>
        <a href="https://www.instagram.com/evallokarlstephen/" target="_blank" aria-label="Instagram">
          <img src="./assets/socials/instagram.png" alt="Instagram">
        </a>


        <a href="https://www.tiktok.com/@karlstephy" target="_blank" aria-label="TikTok">
          <img src="./assets/socials/tiktok.png" alt="TikTok">
        </a>


        <a href="https://youtube.com" target="_blank" aria-label="YouTube">
          <img src="./assets/socials/x.png" alt="tiktok" style="border-radius: 4px; ">
        </a>
      </div>

      <!-- ACTION BUTTONS -->
      <nav class="hero-actions d-flex flex-wrap gap-3">
        <a href="./assets/Karl_Stephen_Evallo_CV.pdf"
          class="btn btn-gradient-primary btn-lg"
          download>
          Download CV
        </a>
        <a href="#contact"
          class="btn btn-gradient-outline btn-lg">
          Contact Me
        </a>
      </nav>
    </div>

  </div>

  <!-- ================= INLINE STYLES ================= -->
  <style>
    #hero {
      min-height: 100vh;
      background: #ffffff;
      /* KEEP WHITE */
      position: relative;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    /* MAIN HEADING */
    #hero h1 {
      color: #0f172a;
      /* deep navy */
    }

    /* ROLE HEADING */
    .role-heading {
      font-size: 2rem;
      font-weight: 600;
      color: #334155;
      /* slate */
    }

    /* DESCRIPTION */
    #hero p {
      color: #475569;
      /* neutral dark */
    }

    /* Profile Image */
    .my-img {
      border: 2px solid #e5e7eb;
      border-radius: 80% 80% 95% 16%;
      transition: transform 0.3s ease;
      background: #fff;
    }

    .my-img:hover {
      transform: translateY(-6px);
    }

    /* Image pseudo elements (BLUE + PURPLE) */
    .my-img-container {
      position: relative;
      width: 300px;
      height: 300px;
    }

    /* existing blobs */
    .my-img-container::before,
    .my-img-container::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      opacity: 0.45;
      z-index: -1;
    }

    /* BLUE - top left */
    .my-img-container::before {
      width: 180px;
      height: 180px;
      background: #0d6efd;
      top: -20px;
      left: -20px;
    }

    /* PURPLE - bottom right */
    .my-img-container::after {
      width: 120px;
      height: 120px;
      background: #7c3aed;
      bottom: -30px;
      right: -10px;
    }

    /* NAVBAR COLOR - top right */
    .my-img-container .img-accent {
      position: absolute;
      width: 40px;
      height: 40px;
      background: #0f172a;
      /* navbar color */
      border-radius: 50%;
      bottom: -8px;
      /* move to bottom */
      left: -3px;
      /* move to left */
      opacity: 0.8;
      z-index: -1;
      /* stays behind the image */
    }


    /* Gradient typed role */
    .gradient-text {
      background: linear-gradient(90deg, #0d6efd, #7c3aed);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 700;
    }

    /* Gradient cursor */
    .cursor {
      display: inline-block;
      margin-left: 4px;
      background: linear-gradient(90deg, #0d6efd, #7c3aed);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: blink 1s steps(2) infinite;
      font-weight: 700;
    }

    @keyframes blink {
      50% {
        opacity: 0;
      }
    }

    /* Social Icons */
    .hero-socials {
      display: flex;
      gap: 16px;
      align-items: center;
    }

    .hero-socials img {
      width: 32px;
      height: 32px;
      transition: transform 0.3s ease, filter 0.3s ease;
    }

    .hero-socials a:hover img {
      transform: scale(1.15);
      filter: drop-shadow(0 0 6px rgba(124, 58, 237, 0.5));
    }

    /* Buttons */
    .btn-gradient-primary {
      background: linear-gradient(135deg, #0d6efd, #7c3aed);
      border: none;
      color: #ffffff;
      font-weight: 600;
      padding: 0.75rem 1.75rem;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .btn-gradient-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(124, 58, 237, 0.35);
      color: #ffffff;
    }

    .btn-gradient-outline {
      background: transparent;
      border: 2px solid transparent;
      border-radius: 0.5rem;
      color: #0d6efd;
      font-weight: 600;
      padding: 0.75rem 1.75rem;
      background-image:
        linear-gradient(#ffffff, #ffffff),
        linear-gradient(135deg, #0d6efd, #7c3aed);
      background-origin: border-box;
      background-clip: padding-box, border-box;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .btn-gradient-outline:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(13, 110, 253, 0.25);
      color: #0d6efd;
    }

    /* ================= RESPONSIVE ALIGNMENT ================= */
    .hero-socials,
    .hero-actions {
      justify-content: center;
    }

    @media (min-width: 992px) {

      .hero-socials,
      .hero-actions {
        justify-content: flex-start;
      }

      .hero-content .col-lg-8 {
        align-items: flex-start;
      }
    }

    @media (max-width: 768px) {
      .role-heading {
        font-size: 1.25rem;
      }
    }
  </style>


  <!-- ================= INLINE SCRIPT ================= -->
  <script>
    (() => {
      const roles = [
        "Computer Engineer",
        "Web Developer",
        "Microcontroller Programmer"
      ];

      const el = document.getElementById("typed-text");

      let roleIndex = 0;
      let charIndex = 0;
      let deleting = false;

      function typeRole() {
        const currentRole = roles[roleIndex];

        if (!deleting) {
          el.textContent = currentRole.slice(0, charIndex + 1);
          charIndex++;

          if (charIndex === currentRole.length) {
            setTimeout(() => deleting = true, 1200);
          }
        } else {
          el.textContent = currentRole.slice(0, charIndex - 1);
          charIndex--;

          if (charIndex === 0) {
            deleting = false;
            roleIndex = (roleIndex + 1) % roles.length;
          }
        }

        setTimeout(typeRole, deleting ? 60 : 100);
      }

      typeRole();
    })();
  </script>

</header>