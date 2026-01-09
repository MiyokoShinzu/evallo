<!-- hero.php -->
<section class="hero d-flex align-items-center bg-white">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image Column (Left) -->
      <div class="col-lg-6 hero-image text-center mb-4 mb-lg-0">
        <div class="image-wrapper position-relative">
          <!-- Base Image -->
          <img src="assets/pic.jpg" alt="Hero Image" class="img-fluid">

          <!-- Animated Parallelogram Overlays -->
          <div class="parallelogram overlay1"></div>
          <div class="parallelogram overlay2"></div>
          <div class="parallelogram overlay3"></div>
          <div class="parallelogram overlay4"></div>
          <div class="parallelogram overlay5"></div>
        </div>
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

<style>
.hero {
  min-height: 90vh;
  display: flex;
  align-items: center;
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

/* Image wrapper positioning */
.image-wrapper {
  position: relative;
  display: inline-block;
  width: 100%;
  max-width: 500px;
}

/* Base image */
.image-wrapper img {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 8px;
}

/* Parallelogram overlays */
.parallelogram {
  position: absolute;
  top: 0;
  left: -120%; /* Start outside left */
  width: 22%;   /* approximate width for 5 parallelograms with tiny gaps */
  height: 100%;
  background-color: rgba(0, 126, 167, 0.3);
  clip-path: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
  transform: translateY(0);
  animation: slideIn 2s forwards;
}

/* Staggered animation for alternating top/bottom movement */
.overlay1 { animation-delay: 0s; }
.overlay2 { animation-delay: 0.3s; transform: translateY(-10px); }
.overlay3 { animation-delay: 0.6s; }
.overlay4 { animation-delay: 0.9s; transform: translateY(-10px); }
.overlay5 { animation-delay: 1.2s; }

/* Animation keyframes */
@keyframes slideIn {
  0% {
    left: -120%;
    opacity: 0;
  }
  100% {
    left: calc((var(--i) - 1) * 20%); /* final position */
    opacity: 1;
  }
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .hero {
    flex-direction: column-reverse;
    text-align: center;
    padding: 2rem 1rem;
  }

  .image-wrapper {
    max-width: 350px;
    margin-bottom: 2rem;
  }

  .hero-text h1 {
    font-size: 2rem;
  }
}
</style>
