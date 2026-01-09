<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    body {
      scroll-behavior: smooth;
    }
    /* Hero Section */
    .hero-section {
      background-color: #00171F;
      color: #fff;
      min-height: 100vh;
      position: relative;
      display: flex;
      align-items: center;
    }
    .hero-section .hero-image img {
      max-width: 100%;
      height: auto;
      opacity: 0.2;
    }
    /* Section Padding */
    section {
      padding: 80px 0;
    }
    /* Navbar Fix */
    body { padding-top: 70px; }
    /* Button Hover */
    .btn-primary:hover {
      background-color: #00A8E8;
    }
    /* Footer */
    footer {
      background-color: #003459;
      color: #fff;
      padding: 40px 0;
    }
    .hero {
  min-height: 100vh;
  padding: 60px 0;
}

.hero-title {
  font-size: clamp(2rem, 4vw, 3.5rem);
  font-weight: 700;
}

.hero-text {
  font-size: 1.1rem;
  opacity: 0.85;
}

/* Wiggly Image */
.wiggle-wrapper {
  width: 100%;
  max-width: 420px;
  margin: auto;
}

.wiggle-img {
  width: 100%;
  animation: wiggle 6s ease-in-out infinite;
  clip-path: polygon(
    5% 10%,
    95% 5%,
    90% 95%,
    10% 90%
  );
}

/* Animation */
@keyframes wiggle {
  0% {
    clip-path: polygon(5% 10%, 95% 5%, 90% 95%, 10% 90%);
  }
  50% {
    clip-path: polygon(10% 5%, 90% 10%, 95% 90%, 5% 95%);
  }
  100% {
    clip-path: polygon(5% 10%, 95% 5%, 90% 95%, 10% 90%);
  }
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .wiggle-wrapper {
    max-width: 300px;
  }
}.pond-svg {
  width: 100%;
  max-width: 420px;
  height: auto;
}

/* Mobile */
@media (max-width: 768px) {
  .pond-svg {
    max-width: 300px;
  }
}


  </style>
  
</head>
<body>

  <!-- Top Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">MyWebsite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
<section class="hero d-flex align-items-center">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text -->
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="hero-title">
          Build. Code. Create.
        </h1>
        <p class="hero-text">
          Turning ideas into responsive and functional web applications.
        </p>

        <a href="#projects" class="btn btn-primary mt-3">
          View My Work
        </a>
      </div>

      <!-- Image -->
      <!-- Image -->
<div class="col-lg-6 text-center mt-4 mt-lg-0">
  <svg
    class="pond-svg"
    viewBox="0 0 500 500"
    xmlns="http://www.w3.org/2000/svg"
  >
    <defs>
      <clipPath id="pondClip">
        <path>
          <animate
            attributeName="d"
            dur="8s"
            repeatCount="indefinite"
            values="
              M60,250 Q80,80 250,70 Q420,80 440,250 Q420,420 250,430 Q80,420 60,250 Z;
              M80,250 Q100,60 250,90 Q430,100 420,250 Q410,430 250,410 Q90,430 80,250 Z;
              M60,250 Q80,80 250,70 Q420,80 440,250 Q420,420 250,430 Q80,420 60,250 Z
            "
          />
        </path>
      </clipPath>
    </defs>

    <image
      href="assets/pic.jpg"
      width="500"
      height="500"
      clip-path="url(#pondClip)"
      preserveAspectRatio="xMidYMid slice"
    />
  </svg>
</div>


    </div>
  </div>
</section>



  <!-- About Section -->
  <section id="about" class="bg-light text-dark">
    <div class="container">
      <h2 class="mb-4 text-center">About Me</h2>
      <p class="text-center">[Insert a short description about yourself here. For example, your skills, experience, and what you are passionate about.]</p>
      <!-- Optional image -->
      <div class="text-center mt-4">
        <img src="./assets/about-placeholder.jpg" alt="About Image" class="img-fluid rounded" style="max-width: 400px;">
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services">
    <div class="container">
      <h2 class="mb-4 text-center">Services</h2>
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Web Design</h5>
              <p class="card-text">[Brief description of service 1]</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">UI/UX Design</h5>
              <p class="card-text">[Brief description of service 2]</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Web Development</h5>
              <p class="card-text">[Brief description of service 3]</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="bg-light">
    <div class="container">
      <h2 class="mb-4 text-center">Portfolio</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card">
            <img src="./assets/project1.jpg" class="card-img-top" alt="Project 1">
            <div class="card-body">
              <h5 class="card-title">Project Title 1</h5>
              <p class="card-text">Short description of project 1</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./assets/project2.jpg" class="card-img-top" alt="Project 2">
            <div class="card-body">
              <h5 class="card-title">Project Title 2</h5>
              <p class="card-text">Short description of project 2</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./assets/project3.jpg" class="card-img-top" alt="Project 3">
            <div class="card-body">
              <h5 class="card-title">Project Title 3</h5>
              <p class="card-text">Short description of project 3</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="mb-4 text-center">Contact Me</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Your Email">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p>&copy; 2026 MyPortfolio. All rights reserved.</p>
      <p>
        <a href="#" class="text-white me-2">Facebook</a>
        <a href="#" class="text-white me-2">Twitter</a>
        <a href="#" class="text-white">LinkedIn</a>
      </p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Eruda (Mobile Console) -->
  <script src="https://cdn.jsdelivr.net/npm/eruda"></script>
  <script>eruda.init();</script>
</body>
</html>
