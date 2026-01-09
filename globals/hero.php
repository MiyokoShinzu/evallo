<!-- hero.php -->
<section class="hero d-flex align-items-center bg-white">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image Column (Left) -->
      <div class="col-lg-6 hero-image text-center mb-4 mb-lg-0">
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <!-- First parallelogram -->
            <clipPath id="clip1">
              <polygon points="0,0 220,0 180,500 0,500" />
            </clipPath>
            <!-- Second parallelogram with a small gap -->
            <clipPath id="clip2">
              <polygon points="230,0 500,0 500,500 200,500" />
            </clipPath>
          </defs>

          <!-- Two clipped images -->
          <image href="assets/pic.jpg" width="500" height="500" clip-path="url(#clip1)" preserveAspectRatio="xMidYMid cover"/>
          <image href="assets/pic.jpg" width="500" height="500" clip-path="url(#clip2)" preserveAspectRatio="xMidYMid cover"/>
        </svg>
      </div>

      <!-- Text Column (Right) -->
      <div class="col-lg-6 hero-text text-lg-start text-center">
        <h1 style="color: #007EA7;">Build. Code. Create.</h1>
        <p style="color: #333;">Turning ideas into responsive and functional web experiences.</p>
        <a href="#portfolio" class="btn btn-primary mt-3">View My Work</a>
      </div>

    </div>
  </div>
</section>

<!-- Hero Section Styles -->
<style>
.hero {
  min-height: 90vh;
  padding: 60px 0;
}

.hero-text h1 {
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 700;
}

.hero-text p {
  font-size: 1.1rem;
  margin: 1rem 0;
}

.btn-primary {
  background-color: #007EA7;
  border: none;
}

.btn-primary:hover {
  background-color: #005f8a;
}

/* SVG Image responsiveness */
.hero-image svg {
  width: 100%;
  max-width: 500px;
  height: auto;
}

@media (max-width: 768px) {
  .hero {
    flex-direction: column-reverse;
    text-align: center;
    padding: 2rem 1rem;
  }
  .hero-image svg {
    max-width: 350px;
    margin-bottom: 2rem;
  }
  .hero-text h1 {
    font-size: 2rem;
  }
}
</style>
