<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Home</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .custom-image {
            cursor: pointer;
            height: 200px;
            object-fit: cover;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-inner {
            width: 100%;
            height: calc(100vw * 16 / 9);
            max-height: 711px;
        }

        .hero-text {
            font-weight: 600;
            line-height: 1.2;
        }

        .hero-text span {
            color: #28a745;
        }

        .text-green {
            color: #28a745;
        }

        .hero-image {
            max-height: 450px;
        }

        .project-img {
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 576px) {
        .hero-section {
            padding-top: 40px;
            padding-bottom: 40px; /* Adjust height for mobile */
        }
        
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .hero-section {
            padding-top: 40px;
            padding-bottom: 40px; /* Adjust height for mobile */
        }
}
    </style>
</head>

<body>

    <!-- Navbar (Sticky) -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Assets/images/logo-1.png" alt="Logo" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#experience">Our Experienced Path</a></li>
                </ul>
                <form class="d-flex">
                    <a href="tel:+918940104441" class="btn btn-success">Contact Us</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-fluid bg-dark text-white hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 hero-text">We Bring<br><span>Trending Concept</span> To Reality</h1>
                    <p class="mt-3"><b class="text-green">100% Assured Quality</b> on Building & Our Services<br>
                        with skilled and dedicated teams
                    </p>
                </div>
                <div class="col-lg-6 text-end d-none d-lg-block">
                    <img src="Assets/images/2.png" class="img-fluid hero-image" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="container py-5" id="services">
        <div class="text-center">
            <h6 class="text-danger fw-bold">OUR SERVICES</h6>
            <h2 class="fw-bold">What We Do ?</h2>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/indi.png" alt="Residential Buildings" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">Individual Residential Buildings</h5>
                        <p>Complete framed structure with proper structural designing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/alteration.png" alt="Alteration" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">Alteration on Existing Buildings</h5>
                        <p>We deeply co-ordinate & combine decision with clients for making all types of alteration works on different buildings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/apartment.png" alt="Apartments" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">Residential Apartments</h5>
                        <p>Latest Concepts of combined flats with entire facilities & needs</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-1">
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/complex.png" alt="Commercial Complexes" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">Commercial Complexes</h5>
                        <p>We also takeover commercial projects & complexes with specific government process.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/steel.png" alt="Steel Structures" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">Steel Structures</h5>
                        <p>Building designed with steel members like ISMB, ISMC, Universal Column, Universal Beam</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/interior.png" alt="Interior Design" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">Interior Designing</h5>
                        <p>Creating innovative ideas & site execution through site visit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-1">
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/3d.png" alt="3D Planning" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">3D Planning</h5>
                        <p>Complete interiors, exteriors, elevation & Visualization</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-start border rounded p-3 shadow-sm h-100">
                    <div class="icon-box me-3">
                        <img src="Assets/icons/2d.png" alt="2D AutoCAD Planning" width="40">
                    </div>
                    <div>
                        <h5 class="fw-bold">2D AutoCAD Planning</h5>
                        <p>Site plan represented by flat lines and blueprint process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="bg-dark" id="experience">
        <div class="container py-5">
            <div class="text-center mb-4">
                <h6 class="text-uppercase text-danger fw-bold">Our Experienced Path</h6>
                <h2 class="fw-bold text-white">What We Build?</h2>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="bg-success rounded overflow-hidden">
                        <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/images/400x711/1.png" class="d-block w-100 custom-image project-img" alt="Project 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/images/400x711/2.png" class="d-block w-100 custom-image project-img" alt="Project 2">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bg-success rounded overflow-hidden">
                        <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/images/400x711/3.png" class="d-block w-100 custom-image project-img" alt="Project 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/images/400x711/4.png" class="d-block w-100 custom-image project-img" alt="Project 4">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="Assets/images/1.png" class="img-fluid rounded" alt="Why Choose Us">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold">Why Choose Us?</h2>
                <p>Choose us for quality construction, timely delivery, innovative designs, skilled craftsmanship, and unwavering commitment to client satisfaction.</p>
                <ul class="list-group border-0">
                    <li class="list-group-item border-0 ps-0"><strong>Expert Craftsmanship</strong> – Skilled professionals delivering exceptional quality in every project.</li>
                    <li class="list-group-item border-0 ps-0"><strong>Timely Completion</strong> – Commitment to completing projects on schedule without compromising quality.</li>
                    <li class="list-group-item border-0 ps-0"><strong>Innovative Designs</strong> – Creative solutions tailored to meet modern and functional architectural needs.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="bg-dark">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h6 class="fw-bold">Office</h6>
                    <p>SN Complex, Govindhasamy nagar, Near old bus stand,<br>Salem- 636015</p>
                    <h6 class="fw-bold">Email</h6>
                    <a href="mailto:welcome@everhomesconstruction.com" class="link-light text-decoration-none">welcome@everhomesconstruction.com</a>
                    <h6 class="fw-bold">Phone</h6>
                    <a href="tel:+918940104441" class="link-light text-decoration-none">+91 89401 04441</a>
                </div>

                <div class="col-md-6">
                    <form action="send_message.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Phone Number" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-control" required>
                                <option value="" disabled selected>Select a Service</option>
                                <optgroup label="Services">
                                    <option value="individual-buildings">Individual Residential Buildings</option>
                                    <option value="alteration">Alteration on Existing Buildings</option>
                                    <option value="apartments">Residential Apartments</option>
                                    <option value="commercial-complexes">Commercial Complexes</option>
                                    <option value="steel-structures">Steel Structures</option>
                                    <option value="interior-design">Interior Designing</option>
                                    <option value="3d-planning">3D Planning</option>
                                    <option value="2d-planning">2D AutoCAD Planning</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-light py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center border-top border-bottom py-3" style="border-color: #006400;">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <span class="fw-bold">Find us on :</span>
                    <a href="mailto:welcome@everhomesconstruction.com" class="text-light ms-4">
                        <i class="bi bi-envelope-fill" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="#" class="text-light ms-3">
                        <i class="bi bi-facebook" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="#" class="text-light ms-3">
                        <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                    </a>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <span>Builder 2025 ©, All rights reserved.</span>
                </div>
                <div class="col-md-4 text-center">
                    <span>Created by : <a target="_blank" href="https://hfadigitalcreations.com" class="text-light text-decoration-none">hfadigitalcreations.com</a></span>
                </div>
            </div>
        </div>
    </footer>

    <script src="bootstrap/js/bootstrap.js" async></script>
</body>

</html>