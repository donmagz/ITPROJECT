<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Studies Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img class="logo me-2" src="img/Alogo1.jpg" alt="Logo">
                <span>Computer Studies Portfolio</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="\itproject\Admin\admin.php">Admin Panel</a></li>
                    <li class="nav-item"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="\itproject\Login\login.php"><i class="fa-regular fa-user"></i> Log in</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="container my-5">
        <div class="card bg-dark text-light shadow-lg p-4">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="img/abouthead.jpg" class="img-fluid rounded" alt="About Us">
                </div>
                <div class="col-md-8">
                    <h2>About the Appointment System</h2>
                    <p>The Appointment Scheduling System is a digital tool designed to streamline appointment management...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div class="container my-5">
        <h2 class="text-center">Gallery</h2>
        <div class="row g-3">
            <div class="col-md-3"><img src="img/ph1.1.jpg" class="img-fluid" alt="Gallery Image 1"></div>
            <div class="col-md-3"><img src="img/ph1.jpg" class="img-fluid" alt="Gallery Image 2"></div>
            <div class="col-md-3"><img src="img/ph2.jpg" class="img-fluid" alt="Gallery Image 3"></div>
            <div class="col-md-3"><img src="img/ph3.jpg" class="img-fluid" alt="Gallery Image 4"></div>
        </div>
    </div>

    <!-- Google Map & YouTube Video -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <iframe class="w-100" height="250" src="https://www.google.com/maps/embed?" allowfullscreen></iframe>
            </div>
            <div class="col-md-5">
                <iframe class="w-100" height="250" src="https://www.youtube.com/embed/F4fbwKV9dBU" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Project Slideshow -->
    <div class="container my-5">
        <h2 class="text-center">Projects</h2>
        <div class="card bg-dark text-light p-4 text-center">
            <div class="slideshow-container">
                <img src="img/ph1.jpg" class="img-fluid slide" alt="Slide 1">
                <img src="img/ph2.jpg" class="img-fluid slide d-none" alt="Slide 2">
                <img src="img/ph3.jpg" class="img-fluid slide d-none" alt="Slide 3">
            </div>
        </div>
    </div>

    <!-- Social Media Section -->
    <div class="container my-5 text-center">
        <h2>Connect with us</h2>
        <div class="social-icons mt-3">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let slideIndex = 0;
        function showSlides() {
            let slides = document.querySelectorAll(".slide");
            slides.forEach(slide => slide.classList.add("d-none"));
            slides[slideIndex].classList.remove("d-none");
            slideIndex = (slideIndex + 1) % slides.length;
            setTimeout(showSlides, 2000);
        }
        showSlides();
    </script>

</body>
</html>
