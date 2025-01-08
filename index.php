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
        .green{
            color: #329F45;
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

        

.logo {
    
    animation: slideFromBot 1s ease-out forwards; /* Apply the slide from top animation */
}

@keyframes slideFromBot {
    0% {
        transform: translateY(-100%); /* Start the logo above the screen (off-screen) */
        opacity: 0; /* Initially hidden */
    }
    100% {
        transform: translateY(0); /* Move the logo to its original position */
        opacity: 1; /* Fully visible */
    }
}




    </style>
</head>

<body>

    <!-- Navbar (Sticky) -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top logo">
        <div class="container ">
            <a class="navbar-brand" href="#">
                <img src="Assets/images/logo-1.png" alt="Logo" class="logo" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#about">About Us</a></li>
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
    <div class="container-fluid bg-dark text-white hero-section py-5 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 hero-text">We Bring<br><span>Trending Concept</span> To Reality</h1>
                    <p class="mt-3"><b class="text-green">100% Assured Quality</b> on Building & Our Services<br>
                        with skilled and dedicated teams
                    </p>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <img src="Assets/images/2.png" class="img-fluid hero-image" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>

    <!-- about -->

    <section class="about-us py-5 bg-white text-dark" id="about">
  <div class="container">
    <div class="row align-items-center">
      <!-- About Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="Assets/images/3.png" alt="About Us" class="img-fluid rounded-circle shadow-lg">
      </div>
      <!-- About Content -->
      <div class="col-md-6">
        <h2 class="display-4 fw-bold mb-4">About Us</h2>
        <p class="lead mb-4">
        A Legacy Since 2004, For over two decades, we have proudly turned dreams into reality by crafting exquisite homes for clients who trust us with their vision Our extensive portfolio showcases numerous successful projects, blending innovative design with seamless build processes to deliver exceptional results.
        </p>
        <ul class="list-unstyled mb-4">
          <li><i class="bi bi-check-circle-fill"></i> Proven Expertise in Design and Construction</li>
          <li><i class="bi bi-check-circle-fill"></i> Commitment to Uncompromising Quality</li>
          <li><i class="bi bi-check-circle-fill"></i> Innovation in Design and Construction Techniques</li>
          <li><i class="bi bi-check-circle-fill"></i> Client-centric approach</li>
        </ul>
        
      </div>
    </div>
  </div>
</section>



    <!-- counters -->
     <div class="bg-black">
    <div class="container py-5  text-white rounded-3 shadow-lg">
    <div class="row align-items-center text-center">
        <!-- Counter 1: Projects Completed -->
        <div class="col-md-3 mb-4 mb-md-0">
            <div class="counter-box">
                <div class="counter fs-2 fw-bold" id="counter1">0</div>
                <h5>Projects Completed</h5>
            </div>
        </div>
        <!-- Counter 2: Years of Experience -->
        <div class="col-md-3 mb-4 mb-md-0">
            <div class="counter-box">
                <div class="counter fs-2 fw-bold" id="counter2">0</div>
                <h5>Years of Experience</h5>
            </div>
        </div>
        <!-- Counter 3: Satisfied Clients -->
        <div class="col-md-3 mb-4 mb-md-0">
            <div class="counter-box">
                <div class="counter fs-2 fw-bold" id="counter3">0</div>
                <h5>Satisfied Clients</h5>
            </div>
        </div>
        <!-- Counter 4: Buildings Constructed -->
        <div class="col-md-3 mb-4 mb-md-0">
            <div class="counter-box">
                <div class="counter fs-2 fw-bold" id="counter4">0</div>
                <h5>Buildings Constructed</h5>
            </div>
        </div>
    </div>
</div></div>


    <!-- Services Section -->
    <div class="container py-5  " id="services">
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
                <!-- First Carousel -->
                <div class="col-md-6">
                    <div class="bg-dark rounded overflow-hidden">
                        <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/projects/1.png" class="d-block w-100 img-fluid" alt="Project 1" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Fairlands Residential Apartment</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/2.png" class="d-block w-100 img-fluid" alt="Project 2" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Fairlands Residential Apartment</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/5.png" class="d-block w-100 img-fluid" alt="Project 5" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Steel structure -Dharmapuri roller flour mills </h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/6.png" class="d-block w-100 img-fluid" alt="Project 6" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Steel structure -Dharmapuri roller flour mills </h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/7.png" class="d-block w-100 img-fluid" alt="Project 6" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Steel structure -Dharmapuri roller flour mills </h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/8.png" class="d-block w-100 img-fluid" alt="Project 6" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Individual house- Kallakuruchi  </h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/13.png" class="d-block w-100 img-fluid" alt="Project 6" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Individual residential buildings </h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/14.png" class="d-block w-100 img-fluid" alt="Project 6" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Individual residential buildings </h5>
                                    </div>
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

                <!-- Second Carousel -->
                <div class="col-md-6">
                    <div class="bg-dark rounded overflow-hidden">
                        <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/projects/3.png" class="d-block w-100 img-fluid" alt="Project 3" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Steel structure -Dharmapuri roller flour mills </h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/4.png" class="d-block w-100 img-fluid" alt="Project 4" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Steel structure -Dharmapuri roller flour mills </h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/9.png" class="d-block w-100 img-fluid" alt="Project 9" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Residential Apartment salem</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/10.png" class="d-block w-100 img-fluid" alt="Project 10" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Demolishing & plot leveling work in saravanabhavan projects</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/11.png" class="d-block w-100 img-fluid" alt="Project 10" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Demolishing & plot leveling work in saravanabhavan projects</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/projects/11.png" class="d-block w-100 img-fluid" alt="Project 10" style="max-height: 720px;">
                                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                        <h5>Demolishing & plot leveling work in saravanabhavan projects</h5>
                                    </div>
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
                <p class="green">We are the friendly & respectfull organisation. We provide budget friendly houses & building with 100% Quality Assurance.</p>
                <p class="green">We link your thoughts with our trending & innovative ideas.</p>
                <!-- <ul class="list-group border-0">
                    <li class="list-group-item border-0 ps-0"><strong>Expert Craftsmanship</strong> – Skilled professionals delivering exceptional quality in every project.</li>
                    <li class="list-group-item border-0 ps-0"><strong>Timely Completion</strong> – Commitment to completing projects on schedule without compromising quality.</li>
                    <li class="list-group-item border-0 ps-0"><strong>Innovative Designs</strong> – Creative solutions tailored to meet modern and functional architectural needs.</li>
                </ul> -->
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


    <!-- keywords -->
    <section class="container my-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-black">Keywords</h2>
      <p class="text-muted">Explore our wide range of services in construction and interior design</p>
    </div>

    <div class="row g-5">
      <!-- Construction Keywords -->
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="bi bi-building fs-4"></i>
              </div>
              <h4 class="ms-3 mb-0 text-success">Construction Services</h4>
            </div>
            <p class="card-text mt-3">
              Building Construction, Contractors, Builders, Construction Company, Residential Apartment Construction, Remodeling, House Alterations, Building Alterations, Construction Management, General Contractors, Construction Worker, Construction Materials, Construction Site, Building Contractor, New Construction, House Building, Construction Consulting, Commercial Projects, Building Projects, Residential Construction, Steel Structure, Steel Building, Steel Construction, 2D Planning, 3D Elevation, 3D Design, Commercial Complex, Commercial Structure.
            </p>
          </div>
        </div>
      </div>

      <!-- Interior Keywords -->
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="bi bi-house-door fs-4"></i>
              </div>
              <h4 class="ms-3 mb-0 text-success">Interior Services</h4>
            </div>
            <p class="card-text mt-3">
              Interior Design, Interior Decoration, Modular Kitchen, Cupboard Design, Wardrobe Design, Kitchen Basket, Tandem Box, Inside Decorating.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.js" async></script>
    <script>
    // Counter animation function
    function animateCounter(counterId, targetValue, duration) {
        let counter = $(counterId);
        $({ countNum: 0 }).animate({ countNum: targetValue }, {
            duration: duration,
            easing: 'swing',
            step: function () {
                counter.text(Math.floor(this.countNum));
            }
        });
    }

    $(document).ready(function() {
        // Set target values and duration for each counter
        animateCounter('#counter1', 150, 2000);  // Projects Completed
        animateCounter('#counter2', 25, 3000);   // Years of Experience
        animateCounter('#counter3', 1200, 2500);  // Satisfied Clients
        animateCounter('#counter4', 200, 3500);   // Buildings Constructed
    });
</script>

</body>

</html>