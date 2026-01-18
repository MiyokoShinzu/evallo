<footer id="footer">

    <!-- TOP SOCIAL BAR -->
    <div class="footer-top">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <span class="footer-top-text">
                Get connected with me on social networks:
            </span>

            <div class="footer-top-socials">
                <a href="https://github.com" target="_blank">
                    <img src="./assets/socials/github.png" alt="GitHub">
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <img src="./assets/socials/linkedin.png" alt="LinkedIn">
                </a>
                <a href="https://facebook.com" target="_blank">
                    <img src="./assets/socials/facebook.png" alt="Facebook">
                </a>
                <a href="https://youtube.com" target="_blank">
                    <img src="./assets/socials/youtube.png" alt="YouTube">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="./assets/socials/instagram.png" alt="Instagram">
                </a>
                <a href="https://tiktok.com" target="_blank">
                    <img src="./assets/socials/tiktok.png" alt="TikTok">
                </a>
                <a href="https://x.com" target="_blank">
                    <img src="./assets/socials/x.png" alt="X" style="border-radius:4px">
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN FOOTER -->
    <div class="footer-main">
        <div class="container py-5">
            <div class="row gy-4">

                <!-- ABOUT -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title">Karl Stephen Evallo</h6>
                    <hr>
                    <p class="footer-text">
                        Computer Engineer specializing in web development,
                        embedded systems, and microcontroller programming.
                    </p>
                </div>

                <!-- SKILLS -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title">Skills</h6>
                    <hr>
                    <ul class="footer-list">
                        <li>PHP & MySQL</li>
                        <li>JavaScript & Bootstrap</li>
                        <li>Arduino / ESP32</li>
                        <li>IoT Systems</li>
                    </ul>
                </div>

                <!-- LINKS -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title">Useful Links</h6>
                    <hr>
                    <ul class="footer-list">
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- CONTACT -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title">Contact</h6>
                    <hr>
                    <ul class="footer-list">
                        <li>📍 Philippines</li>
                        <li>✉️ karl@example.com</li>
                        <li>📞 +63 900 000 0000</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom">
        © <span id="year"></span> Karl Stephen Evallo
    </div>

    <!-- ================= STYLES ================= -->
    <style>
        #footer {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* TOP BAR */
        .footer-top {
            background: linear-gradient(90deg, #6f63d9, #7c3aed);
            color: #fff;
            padding: 0.75rem 0;
            font-size: 0.9rem;
        }

        .footer-top-socials {
            display: flex;
            gap: 14px;
            align-items: center;
        }

        .footer-top-socials img {
            width: 22px;
            height: 22px;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .footer-top-socials a:hover img {
            transform: scale(1.15);
            filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.6));
        }

        /* MAIN FOOTER */
        .footer-main {
            background-color: #0f172a;
            color: #cbd5f5;
        }

        .footer-title {
            color: #fff;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .footer-main hr {
            width: 50px;
            height: 2px;
            background: linear-gradient(90deg, #0d6efd, #7c3aed);
            border: none;
            margin-bottom: 1rem;
        }

        .footer-text {
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 0.9rem;
        }

        .footer-list li {
            margin-bottom: 0.5rem;
        }

        .footer-list a {
            color: #cbd5f5;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-list a:hover {
            color: #8b5cf6;
        }

        /* BOTTOM */
        .footer-bottom {
            background-color: #020617;
            color: #94a3b8;
            text-align: center;
            font-size: 0.85rem;
            padding: 0.75rem 0;
        }
    </style>

    <!-- ================= SCRIPT ================= -->
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

</footer>