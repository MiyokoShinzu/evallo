<!-- hero.php -->
<section class="hero d-flex align-items-center">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text Column -->
      <div class="col-lg-6 hero-text text-lg-start text-center mb-4 mb-lg-0">
        <h1>Build. Code. Create.</h1>
        <p>Turning ideas into responsive and functional web experiences.</p>
        <a href="#portfolio" class="btn btn-primary">View My Work</a>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6 hero-image text-center">
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <clipPath id="diagonalClip">
              <!-- Parallelogram shape -->
              <polygon points="50,0 500,0 450,500 0,500" />
            </clipPath>
          </defs>
          <image href="assets/pic.jpg" width="500" height="500" clip-path="url(#diagonalClip)" preserveAspectRatio="xMidYMid cover"/>
        </svg>
      </div>

    </div>
  </div>
</section>

<!-- Custom CSS for hero section -->
<style>
.hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-color: #00171F;
  color: white;
  overflow: hidden;
  padding: 60px 0;
}

.hero-text h1 {
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 700;
}

.hero-text p {
  font-size: 1.2rem;
  margin: 1rem 0;
}

.btn-primary {
  background-color: #007EA7;
  border: none;
}

.btn-primary:hover {
  background-color: #00A8E8;
}

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
    max-width: 300px;
    margin-bottom: 2rem;
  }
}
</style>
