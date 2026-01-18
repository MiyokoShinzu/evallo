<section id="projects" class="section-padding bg-light">
    <div class="container">

        <!-- SECTION HEADER -->
        <header class="text-center mb-5">
            <h2 class="section-title fw-bold">Projects</h2>
            <p class="text-muted mt-2">
                Selected works in web development, embedded systems, and IoT
            </p>
        </header>

        <!-- PROJECT GRID -->
        <div class="row g-4 justify-content-center">

            <!-- PROJECT 1 -->
            <article class="col-lg-4 col-md-6">
                <div class="card h-100 project-item featured">

                    <span class="project-ribbon">Featured</span>

                    <div class="project-image-wrapper skeleton">
                        <img src="./assets/projects/accreditation.png"
                            alt="College Accreditation Website"
                            loading="lazy"
                            onload="this.parentElement.classList.remove('skeleton')">
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5">College Accreditation Website</h3>

                        <span class="project-private">Internal System</span>

                        <p class="card-text mt-2">
                            A centralized accreditation management system
                            developed to organize documents, evidence, and reports.
                        </p>

                        <div class="project-tags mb-3">
                            <span class="badge">PHP</span>
                            <span class="badge">MySQL</span>
                            <span class="badge">Bootstrap</span>
                            <span class="badge">JavaScript</span>
                        </div>

                        <div class="mt-auto">
                            <a class="btn btn-sm btn-outline-primary disabled">
                                Live Demo (Restricted)
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJECT 2 -->
            <article class="col-lg-4 col-md-6">
                <div class="card h-100 project-item featured">

                    <span class="project-ribbon">Featured</span>

                    <div class="project-image-wrapper skeleton">
                        <img src="./assets/projects/physics.png"
                            alt="Physics Simulation Website"
                            loading="lazy"
                            onload="this.parentElement.classList.remove('skeleton')">
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5">Physics Simulation Website</h3>

                        <p class="card-text mt-2">
                            An interactive physics simulation platform featuring
                            real-time vector visualization, motion analysis, and
                            dynamic graphs for teaching and learning mechanics.
                        </p>

                        <div class="project-tags mb-3">
                            <span class="badge">JavaScript</span>
                            <span class="badge">HTML5 Canvas</span>
                            <span class="badge">Physics</span>
                        </div>

                        <a class="btn btn-sm btn-outline-primary disabled">
                            Live Demo (In Development)
                        </a>
                    </div>
                </div>
            </article>


            <!-- PROJECT 3 -->
            <article class="col-lg-4 col-md-6">
                <div class="card h-100 project-item featured">

                    <span class="project-ribbon">Featured</span>

                    <div class="project-image-wrapper skeleton">
                        <img src="./assets/projects/swim.png"
                            alt="SWIM Decision Support System"
                            loading="lazy"
                            onload="this.parentElement.classList.remove('skeleton')">
                    </div>

                    <div class="card-body">
                        <h3 class="card-title h5">SWIM Decision Support System</h3>

                        <p class="card-text">
                            A geospatial decision support system visualizing
                            real-time river levels and flood risk areas using
                            interactive satellite maps.
                        </p>

                        <div class="project-tags mb-3">
                            <span class="badge">PHP</span>
                            <span class="badge">MySQL</span>
                            <span class="badge">ESP32</span>
                        </div>
                        <a class="btn btn-sm btn-outline-primary disabled">
                            Live Demo (Restricted)
                        </a>
                    </div>
                </div>
            </article>

        </div>
    </div>

    <!-- ================= STYLES ================= -->
    <style>
        .section-padding {
            padding: 4rem 0;
        }

        .section-title {
            font-size: 2.3rem;
            color: #0f172a;
        }

        /* CARD */
        .project-item {
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
            background: #fff;
        }

        .project-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(124, 58, 237, .15);
        }

        /* IMAGE */
        .project-image-wrapper {
            position: relative;
            padding: .75rem;
            background: #f8fafc;
            height: 220px;
            overflow: hidden;
        }

        .project-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        /* FEATURED RIBBON */
        .project-ribbon {
            position: absolute;
            top: 12px;
            left: -32px;
            background: linear-gradient(135deg, #0d6efd, #7c3aed);
            color: #fff;
            padding: .25rem 2.5rem;
            font-size: .7rem;
            transform: rotate(-45deg);
            z-index: 2;
        }

        /* PRIVATE LABEL */
        .project-private {
            font-size: .7rem;
            text-transform: uppercase;
            letter-spacing: .05em;
            color: #7c3aed;
            font-weight: 600;
        }

        /* TAGS */
        .project-tags .badge {
            background: linear-gradient(135deg, #0d6efd, #7c3aed);
            margin-right: .25rem;
            font-weight: 500;
        }

        /* SKELETON */
        .skeleton::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg,
                    #e5e7eb 25%,
                    #f3f4f6 37%,
                    #e5e7eb 63%);
            animation: shimmer 1.4s infinite;
            border-radius: 16px;
        }

        @keyframes shimmer {
            0% {
                background-position: -200px 0;
            }

            100% {
                background-position: 200px 0;
            }
        }
    </style>
</section>