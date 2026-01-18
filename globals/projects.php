<section id="projects" class="section-padding bg-light">
    <div class="container">

        <!-- SECTION HEADER -->
        <header class="text-center mb-5">
            <h2 class="section-title fw-bold">Projects</h2>
            <p class="text-muted mt-2">
                Selected works in web development, embedded systems, and IoT
            </p>
        </header>

        <!-- FILTER BUTTONS -->
        <div class="text-center my-4">
            <button class="btn btn-outline-primary filter-btn active" data-filter="all">All</button>
            <button class="btn btn-outline-primary filter-btn" data-filter="web">Web</button>
            <button class="btn btn-outline-primary filter-btn" data-filter="embedded">Embedded</button>
            <button class="btn btn-outline-primary filter-btn" data-filter="iot">IoT</button>
        </div>

        <!-- PROJECT GRID -->
        <div class="row g-4" id="projectGrid">

            <!-- FEATURED PROJECT -->
            <article class="col-lg-4 col-md-6 project-card" data-category="web">
                <div class="card h-100 project-item featured">

                    <!-- RIBBON -->
                    <span class="project-ribbon">Featured</span>

                    <!-- IMAGE -->
                    <div class="project-image-wrapper skeleton">
                        <img src="./assets/projects/accreditation.png"
                            alt="College Accreditation Website"
                            loading="lazy"
                            onload="this.parentElement.classList.remove('skeleton')">
                        <div class="project-overlay">
                            <span>View Overview</span>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5">College Accreditation Website</h3>

                        <!-- PRIVATE LABEL -->
                        <span class="project-private">Internal System</span>

                        <p class="card-text mt-2">
                            A centralized accreditation management website developed for my
                            college to organize documents, evidence, and reports.
                        </p>

                        <!-- TECH STACK -->
                        <div class="project-tags mb-3">
                            <span class="badge">PHP</span>
                            <span class="badge">MySQL</span>
                            <span class="badge">Bootstrap</span>
                            <span class="badge">JavaScript</span>
                        </div>

                        <!-- CTA -->
                        <div class="mt-auto">
                            <a href="#"
                                class="btn btn-sm btn-outline-primary disabled">
                                Live Demo (Restricted)
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- IOT PROJECT -->
            <article class="col-lg-4 col-md-6 project-card" data-category="iot">
                <div class="card h-100 project-item featured">
                    <span class="project-ribbon">Featured</span>
                    <div class="project-image-wrapper skeleton">
                        <img src="./assets/projects/iot-dashboard.jpg"
                            alt="IoT Monitoring Dashboard"
                            loading="lazy"
                            onload="this.parentElement.classList.remove('skeleton')">
                        <div class="project-overlay">
                            <span>Live Preview</span>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5">IoT Monitoring Dashboard</h3>

                        <p class="card-text mt-2">
                            ESP32-based sensor monitoring system with real-time
                            web dashboard visualization.
                        </p>

                        <div class="project-tags mb-3">
                            <span class="badge">ESP32</span>
                            <span class="badge">IoT</span>
                            <span class="badge">Web</span>
                        </div>

                        <div class="mt-auto">
                            <a href="https://your-demo-link.com"
                                target="_blank"
                                class="btn btn-sm btn-outline-primary">
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 project-card" data-category="web">
                <div class="card h-100 project-item featured">
                    <span class="project-ribbon">Featured</span>
                    <div class="project-image-wrapper">
                        <img
                            src="./assets/projects/swim.png"
                            alt="Smart Water Information Map showing flood risk areas"
                            loading="lazy">
                    </div>

                    <div class="card-body">
                        <h3 class="card-title h5">SWIM Decision Support System</h3>

                        <p class="card-text">
                            A web-based geospatial system that visualizes real-time river water levels
                            and flood risk areas using interactive satellite maps.
                            It provides color-coded alerts to support flood monitoring and disaster preparedness.
                        </p>

                        <div class="project-tags">
                            <span class="badge">PHP</span>
                            <span class="badge">Mysql</span>
                            <span class="badge">Esp32Http</span>
                            
                        </div>
                    </div>

                </div>
            </article>


            <!-- EMBEDDED PROJECT -->
            <article class="col-lg-4 col-md-6 project-card" data-category="embedded">
                <div class="card h-100 project-item">

                    <div class="project-image-wrapper skeleton">
                        <img src="./assets/projects/embedded-system.jpg"
                            alt="STM32 Display System"
                            loading="lazy"
                            onload="this.parentElement.classList.remove('skeleton')">
                        <div class="project-overlay">
                            <span>Project Details</span>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5">STM32 Display System</h3>

                        <p class="card-text mt-2">
                            Embedded UI system using STM32 microcontroller and TFT display.
                        </p>

                        <div class="project-tags mb-3">
                            <span class="badge">STM32</span>
                            <span class="badge">Embedded</span>
                        </div>

                        <div class="mt-auto">
                            <span class="text-muted small">Demo upon request</span>
                        </div>
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

        .project-item {
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
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
        }

        .project-image-wrapper img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            background: #fff;
            border-radius: 12px;
        }

        /* OVERLAY */
        .project-overlay {
            position: absolute;
            inset: .75rem;
            background: rgba(15, 23, 42, .65);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            opacity: 0;
            transition: opacity .3s;
            font-weight: 500;
        }

        .project-item:hover .project-overlay {
            opacity: 1;
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

        /* BADGES */
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

    <!-- ================= SCRIPT ================= -->
    <script>
        const filterButtons = document.querySelectorAll(".filter-btn");
        const projects = document.querySelectorAll(".project-card");

        filterButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                filterButtons.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");

                const filter = btn.dataset.filter;

                projects.forEach(project => {
                    project.style.display =
                        filter === "all" || project.dataset.category === filter ?
                        "block" :
                        "none";
                });
            });
        });
    </script>
</section>