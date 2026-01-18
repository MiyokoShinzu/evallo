<section id="about" class="section-padding bg-light">
    <div class="container">

        <!-- SECTION HEADER -->
        <header class="text-center mb-4">
            <h2 class="section-title fw-bold">About Me</h2>
            <p class="text-muted mt-2">
                A brief overview of my background, skills, and achievements
            </p>
        </header>

        <!-- SINGLE PARAGRAPH INTRO -->
        <article class="row align-items-center mx-auto" style="max-width: 1000px;">

            <!-- TEXT COLUMN -->
            <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                <p class="lead mb-0 about-paragraph">
                    <span style="color: #2563eb;">I am a Computer Engineer</span> specializing in web development,
                    embedded systems, and microcontroller programming, with a strong
                    background in competitive programming and circuit design. My work
                    focuses on building reliable and scalable solutions for academic,
                    institutional, and industrial applications.
                </p>

                <!-- GRADIENT DIVIDERS -->
                <div class="about-divider">
                    <hr class="divider-long">
                    <hr class="divider-short">
                </div>

            </div>

            <!-- IMAGE COLUMN -->
            <div class="col-lg-4 text-center">
                <img src="./assets/pic.jpg"
                    alt="Computer Engineering Profile"
                    class="img-fluid about-image">
            </div>

        </article>


        <!-- ACHIEVEMENTS -->
        <div class="row mt-5 gy-4">

            <div class="col-12 text-center">
                <h3 class="h6 fw-semibold accent-heading mb-3">
                    Recognitions & Achievements
                </h3>
            </div>

            <!-- AWARD 1 -->
            <div class="col-md-4">
                <div class="award-card h-100">
                    <div class="award-image">
                        <img src="./assets/about/award1.png"
                            alt="Cyber Summit Breadboarding Champion">
                    </div>
                    <div class="award-body text-center p-3">
                        <p class="mb-0 text-muted">
                            <strong>Champion</strong><br>
                            Breadboarding Circuit Connection<br>
                            <em>Cyber Summit 2023</em>
                        </p>
                    </div>
                </div>
            </div>

            <!-- AWARD 2 -->
            <div class="col-md-4">
                <div class="award-card h-100">
                    <div class="award-image">
                        <img src="./assets/about/award2.png"
                            alt="ICPEP CpE Challenge 2022 Champion">
                    </div>
                    <div class="award-body text-center p-3">
                        <p class="mb-0 text-muted">
                            <strong>Champion</strong><br>
                            C++ Programming<br>
                            <em>ICPEP National CpE Challenge 2022</em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="award-card h-100">
                    <div class="award-image">
                        <img src="./assets/about/award4.png"
                            alt="Regional Champion C++ Programming 2022">
                    </div>
                    <div class="award-body text-center p-3">
                        <p class="mb-0 text-muted">
                            <strong>Champion</strong><br>
                            C++ Programming<br>
                            <em>ICPEP Regional CPE Challenge 2022</em>
                        </p>
                    </div>
                </div>
            </div>
            <!-- AWARD 3 -->
            <div class="col-md-4">
                <div class="award-card h-100">
                    <div class="award-image">
                        <img src="./assets/about/award3.png"
                            alt="5th Place C++ Programming 2021">
                    </div>
                    <div class="award-body text-center p-3">
                        <p class="mb-0 text-muted">
                            <strong>5th Place</strong><br>
                            C++ Programming<br>
                            <em>ICPEP National CPE Challenge 2021</em>
                        </p>
                    </div>
                </div>
            </div>

            <!-- AWARD 4 -->


            <!-- AWARD 5 -->
            <div class="col-md-4">
                <div class="award-card h-100">
                    <div class="award-image">
                        <img src="./assets/about/award5.png"
                            alt="Champion ICPEP Regional CpE Challenge 2021">
                    </div>
                    <div class="award-body text-center p-3">
                        <p class="mb-0 text-muted">
                            <strong>Champion</strong><br>
                            C++ Programming
                            <br>
                            <em>ICPEP Regional CpE Challenge 2021</em>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- ================= STYLES ================= -->
    <style>
        .section-padding {
            padding: 4rem 0;
        }

        .section-title {
            font-size: 2.2rem;
            color: #0f172a;
        }

        .about-paragraph {
            color: #334155;
            line-height: 1.65;
        }

        .about-paragraph strong {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .accent-heading {
            color: #4f46e5;
        }

        /* AWARDS */
        .award-card {
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            overflow: hidden;
            background: #ffffff;
        }

        .award-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
            background: #f8fafc;
        }

        .award-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .award-body {
            background: #ffffff;
        }

        .about-paragraph {
            color: #334155;
            /* professional slate */
            line-height: 1.65;
            font-weight: 400;
            /* normal weight */
        }

        .about-image {
            max-height: 280px;
            width: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .about-divider {
            margin-top: 1rem;
        }

        .about-divider hr {
            border: none;
            height: 5px;
            background: linear-gradient(90deg, #2563eb, #7c3aed);
            margin: 0.4rem 0;
        }

        .divider-long {
            width: 220px;
        }

        .divider-short {
            width: 160px;
        }
    </style>
</section>