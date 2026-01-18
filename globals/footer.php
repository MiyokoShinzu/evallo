<footer id="footer">

    <!-- MAIN FOOTER -->
    <div class="footer-main">
        <div class="container py-5">
            <div class="row gy-4">

                <!-- ABOUT -->
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title">Karl Stephen Evallo</h6>
                    <hr>
                    <p class="footer-text">
                        Computer Engineer with experience in web development,
                        embedded systems, microcontroller programming, and
                        educational simulations.
                    </p>
                </div>

                <!-- EXPERTISE -->
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title">Expertise</h6>
                    <hr>
                    <ul class="footer-list">
                        <li>PHP, MySQL, JavaScript</li>
                        <li>Bootstrap & Responsive UI</li>
                        <li>Arduino, ESP32, Embedded Systems</li>
                        <li>IoT & Physics Simulations</li>
                    </ul>
                </div>

                <!-- CONTACT -->
                <div class="col-lg-4 col-md-12">
                    <h6 class="footer-title">Contact</h6>
                    <hr>
                    <ul class="footer-list">
                        <li><strong>Location:</strong> Peñablanca, Cagayan, Philippines</li>
                        <li><strong>Email:</strong> <a href="mailto:evallokarl@gmail.com">evallokarl@gmail.com</a></li>
                        <li><strong>Phone:</strong> <a href="tel:+639700841996">+63 970 084 1996</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom">
        © <span id="year"></span> Karl Stephen Evallo. All rights reserved.
    </div>

    <!-- ================= STYLES ================= -->
    <style>
        #footer {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* MAIN FOOTER */
        .footer-main {
            background-color: #0f172a;
            color: #cbd5f5;
        }

        .footer-title {
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 0.03em;
            margin-bottom: 0.5rem;
        }

        .footer-main hr {
            width: 50px;
            height: 2px;
            background: #6366f1;
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
            margin-bottom: 0.6rem;
        }

        .footer-list a {
            color: #cbd5f5;
            text-decoration: none;
        }

        .footer-list a:hover {
            text-decoration: underline;
        }

        /* BOTTOM BAR */
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