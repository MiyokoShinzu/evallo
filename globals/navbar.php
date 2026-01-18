<nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Evallo</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-center"><a class="nav-link custom-link" href="#hero">Home</a></li>
                <li class="nav-item text-center"><a class="nav-link custom-link" href="#services">Services</a></li>
                <li class="nav-item text-center"><a class="nav-link custom-link" href="#projects">Projects</a></li>
                <li class="nav-item text-center"><a class="nav-link custom-link" href="#contact">Contact</a></li>
                <li class="nav-item text-center"><a class="nav-link custom-link" href="#about">About</a></li>
            </ul>
        </div>
    </div>
</nav>
<style>
    .sticky-navbar {
        position: sticky;
        top: 0;
        z-index: 1020;
        background-color: #0f172a;
        /* SAME AS FOOTER */
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* Brand */
    .navbar-brand {
        color: #ffffff;
    }

    .navbar-brand:hover {
        color: #c7d2fe;
    }

    /* Nav links */
    .custom-link {
        position: relative;
        padding: 0.5rem 1rem;
        margin: 0 0.5rem;
        color: #e5e7eb;
        font-weight: 500;
        transition: color 0.3s, transform 0.2s;
    }

    /* Gradient underline */
    .custom-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background: linear-gradient(90deg, #0d6efd, #7c3aed);
        transition: width 0.3s ease;
        border-radius: 2px;
    }

    .custom-link:hover::after {
        width: 100%;
    }

    .custom-link:hover {
        color: #c7d2fe;
        transform: scale(1.05);
    }

    /* Navbar toggler (mobile) */
    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.2);
    }

    .navbar-toggler-icon {
        filter: invert(1);
    }
</style>