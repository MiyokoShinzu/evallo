<!-- hero.php -->
<section class="hero d-flex align-items-center bg-white">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image Column (Left) -->
      <div class="col-lg-6 hero-image text-center mb-4 mb-lg-0">
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <!-- ClipPaths for 5 parallelograms -->
            <clipPath id="clip1"><polygon points="0,0 100,0 90,500 0,500"/></clipPath>
            <clipPath id="clip2"><polygon points="100.3,0 200.3,0 190.3,500 100.3,500"/></clipPath>
            <clipPath id="clip3"><polygon points="200.6,0 300.6,0 290.6,500 200.6,500"/></clipPath>
            <clipPath id="clip4"><polygon points="300.9,0 400.9,0 390.9,500 300.9,500"/></clipPath>
            <clipPath id="clip5"><polygon points="401.2,0 500,0 500,500 401.2,500"/></clipPath>
          </defs>

          <!-- 5 images with animation -->
          <image class="parallelogram" href="assets/pic.jpg" width="500" height="500" clip-path="url(#clip1)" preserveAspectRatio="xMidYMid cover"/>
          <image class="parallelogram" href="assets/pic.jpg" width="500" height="500" clip-path="url(#clip2)" preserveAspectRatio="xMidYMid cover"/>
          <image class="parallelogram" href="assets/pic.jpg" width="500" height="500" clip-path="url(#clip3)" preserveAspectRatio="xMidYMid cover"/>
          <image class="parallelogram" href="assets/pic.jpg" width="500" height="500" clip-path="url(#clip4)" preserveAspectRatio="xMidYMid cover"/>
          <image class="parallelogram" href="assets/pic.jpg" width="500" height="500" clip-path="url(#clip5)" preserveAspectRatio="xMidYMid cover"/>
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
  display: flex;
  align-items: center;
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

/* Animate the parallelograms alternately */
.parallelogram {
  animation: wiggle 4s ease-in-out infinite alternate;
}

.parallelogram:nth-child(odd) {
  animation-delay: 0s;
}

.parallelogram:nth-child(even) {
  animation-delay: 2s; /* alternate start */
}

@keyframes wiggle {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-10px); } /* move up */
  100% { transform: translateY(0px); }
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
