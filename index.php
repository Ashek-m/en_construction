<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <meta name="description" content="We are the pleasant & friendly organization. We offer affordable houses and constructions with 100% Quality Assurance.We link your thoughts with our trending & innovative ideas.">
    <!--<meta name="keywords" content="keyword1, keyword2, keyword3">-->
    <meta name="author" content="Everhome's Construction">
  <link rel="icon" type="image/png" href="Assets/images/logo.png" sizes="32x32">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <title>Everhome's Construction</title>
  <style>
    /* Basic styling for the table */
    table {
      width: 100%;
      /* border-spacing: 32px 5px; */
      border-collapse: separate;
      /* margin: 20px 0; */
    }

    /* table, td {
      border: 1px solid #000;
    } */

    td {
      padding: 5px;
      text-align: left;
    }


    /* Responsive adjustments */
    @media (max-width: 768px) {
      td {
        display: block;
        width: 100%;
        /* box-sizing: border-box; */
      }

      tr {
        display: block;
        margin-bottom: 10px;
      }

      /* td:nth-child(odd) {
        font-weight: bold;
      } */

      /* td:last-child {
        border-bottom: 1px solid #000;
      } */
    }

    /* Preloader
-------------------------------------------------------*/

    .loader-mask {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #fff;
      z-index: 99999;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      /* Stack elements vertically */
    }

    .loader {
      position: absolute;
      left: 50%;
      top: 42%;
      width: 50px;
      height: 50px;
      font-size: 0;
      color: #00c9d0;
      display: inline-block;
      margin: -25px 0 0 -25px;
      text-indent: -9999em;
      -webkit-transform: translateZ(0);
      -ms-transform: translateZ(0);
      transform: translateZ(0);
    }

    .lead {
      font-size: 13px;
    }

    .loader div {
      background-color: #d9b06a;
      display: inline-block;
      float: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 50px;
      height: 50px;
      opacity: .5;
      border-radius: 50%;
      -webkit-animation: ballPulseDouble 2s ease-in-out infinite;
      animation: ballPulseDouble 2s ease-in-out infinite;
    }

    .loader div:last-child {
      -webkit-animation-delay: -1s;
      animation-delay: -1s;
    }

    @-webkit-keyframes ballPulseDouble {

      0%,
      100% {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      50% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes ballPulseDouble {

      0%,
      100% {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      50% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    .loader-text {
    font-size: 18px;
    color: #000000;
    text-align: center;
    font-weight: 800;
}
  </style>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .text-justify-custom {
      text-align: justify;
      display: block;
    }

    span1 {
      font-size: 13px;
    }



    .green {
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
      height: auto;
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

      animation: slideFromBot 1s ease-out forwards;
      /* Apply the slide from top animation */
    }

    @keyframes slideFromBot {
      0% {
        transform: translateY(-100%);
        /* Start the logo above the screen (off-screen) */
        opacity: 0;
        /* Initially hidden */
      }

      100% {
        transform: translateY(0);
        /* Move the logo to its original position */
        opacity: 1;
        /* Fully visible */
      }
    }
  </style>
</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <!-- <div class="loader">
      <div></div>
      <div></div>
    </div> -->
    <div class="loader-text text-to-fade">Welcome to <br> EverHome's Construction</div>
    

  </div>
  <!-- Preloader -->

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
        <!-- <form class="d-flex">
                    <a href="tel:+918940104441" class="btn btn-success">Contact Us</a>
                </form> -->
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="container-fluid bg-dark text-white hero-section  ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="display-4 hero-text">We Bring<br><span>Trending Concept</span> To Reality</h1>
          <p class="mt-3"><b class="text-green fs-5">100% Assured Quality</b> on Buildings & Our Services<br>
            with skilled and professional managements.
          </p>
          <p class="mt-3"><b class="text-green fs-5">உங்க வீட்டுக்கு நாங்க கேரண்டி!!!</b>
          </p>
          <form class="d-flex">
            <a href="tel:+918940104441" class="btn btn-light">Contact Us</a>
          </form>
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
            With a legacy since 1993, we have spent over two generations turning dreams into reality by creating beautiful homes for clients who trust us with their vision.<br>
            Our extensive portfolio highlights numerous successful projects, combining innovative design with seamless construction to deliver exceptional results.
          </p>
          <ul class="list-unstyled mb-4">
            <li><i class="bi bi-check-circle-fill text-green"></i> Proven Expertise in Design and Construction</li>
            <li><i class="bi bi-check-circle-fill text-green"></i> Commitment to Uncompromising Quality</li>
            <li><i class="bi bi-check-circle-fill text-green"></i> Innovation in Design and Construction Techniques</li>
            <li><i class="bi bi-check-circle-fill text-green"></i> Client-centric approach</li>
          </ul>

        </div>
      </div>
    </div>
  </section>




  <!-- Services Section -->
  <div class="container py-5  " id="services">
    <div class="text-center">
      <h6 class="text-green fs-5 fw-bold">OUR SERVICES</h6>
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
        <h6 class="text-uppercase text-green fs-5 fw-bold">Our Experienced Path</h6>
        <h2 class="fw-bold text-white">What We Build?</h2>
      </div>

      <div class="container mt-5">
        <!-- Image Cards -->
        <div class="row justify-content-center">
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal3">
              <img src="Assets/projects/15.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal2">
              <img src="Assets/projects/14.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal1">
              <img src="Assets/projects/13.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card border-0 h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal4">
              <img src="Assets/projects/8.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">
              <div class="card-body text-center d-flex flex-column justify-content-between">
                <p class="card-text fw-bold">Individual House - Kallakurichi</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal5">
              <img src="Assets/projects/2.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">
              <div class="card-body text-center d-flex flex-column justify-content-between">
                <p class="card-text fw-bold">Fairlands Residential Apartment - Salem</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal14">
              <img src="Assets/projects/24.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">
              <div class="card-body text-center d-flex flex-column justify-content-between">
                <p class="card-text fw-bold">Individual Residential Buildings - Salem</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal15">
              <img src="Assets/projects/12.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">
              <div class="card-body text-center d-flex flex-column justify-content-between">
                <p class="card-text fw-bold">Demolishing & Plot Leveling Work - </p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal8">
              <img src="Assets/projects/18.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal9">
              <img src="Assets/projects/4.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">
              <div class="card-body text-center d-flex flex-column justify-content-between">
                <p class="card-text fw-bold">Steel Structure - Dharmapuri Roller Flour Mills</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal10">
              <img src="Assets/projects/9.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">
              <div class="card-body text-center d-flex flex-column justify-content-between">
                <p class="card-text fw-bold">Residential Apartment - Salem</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal11">
              <img src="Assets/projects/19.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal12">
              <img src="Assets/projects/20.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal13">
              <img src="Assets/projects/21.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal6">
              <img src="Assets/projects/16.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal7">
              <img src="Assets/projects/17.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal16">
              <img src="Assets/projects/22.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card border-0 h-auto" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal17">
              <img src="Assets/projects/23.jpg" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">

            </div>
          </div>
          <!-- <div class="col-md-3 mb-4">
            <div class="card border-0 h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#carouselModal18">
                <img src="Assets/projects/26.png" class="card-img-top img-fluid rounded" alt="Project Image" style="width: 100%; height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <p class="card-text fw-bold">Interiors</p>
                </div>
            </div>
        </div> -->

        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="carouselModal1" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/13.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="carouselModal2" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/14.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="carouselModal3" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/15.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="carouselModal4" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/8.png" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>



      <!-- Modal with Carousel -->
      <div class="modal fade" id="carouselModal5" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel">Project Gallery</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Assets/projects/1.png" class="d-block w-100 img-fluid" alt="Project 1">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/2.png" class="d-block w-100 img-fluid" alt="Project 2">
                  </div>
                  <!-- <div class="carousel-item">
                            <img src="Assets/projects/3.png" class="d-block w-100 img-fluid" alt="Project 3">
                        </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Modal -->
      <div class="modal fade" id="carouselModal6" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/16.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div><!-- Modal -->
      <div class="modal fade" id="carouselModal7" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/17.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div><!-- Modal -->
      <div class="modal fade" id="carouselModal8" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/18.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>


      <!-- Modal with Carousel -->
      <div class="modal fade" id="carouselModal9" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel">Project Gallery</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Assets/projects/3.png" class="d-block w-100 img-fluid" alt="Project 1">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/4.png" class="d-block w-100 img-fluid" alt="Project 2">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/5.png" class="d-block w-100 img-fluid" alt="Project 3">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/6.png" class="d-block w-100 img-fluid" alt="Project 3">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/7.png" class="d-block w-100 img-fluid" alt="Project 3">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="carouselModal10" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/9.png" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="carouselModal11" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/19.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="carouselModal12" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/20.png" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="carouselModal13" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/21.png" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>

      <!-- Modal with Carousel -->
      <div class="modal fade" id="carouselModal14" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel">Project Gallery</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <img src="Assets/projects/24.png" class="img-fluid" alt="Project 1">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/25.png" class="img-fluid" alt="Project 2">
                  </div>
                  <!-- Additional carousel items can be uncommented as needed -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Modal with Carousel -->
      <div class="modal fade" id="carouselModal15" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel">Project Gallery</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <img src="Assets/projects/10.png" class="img-fluid" alt="Project 1">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/11.png" class="img-fluid" alt="Project 2">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/12.png" class="img-fluid" alt="Project 2">
                  </div>
                  <!-- Additional carousel items can be uncommented as needed -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>


          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="carouselModal16" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/22.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="carouselModal17" tabindex="-1" aria-labelledby="carouselModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel1">Project Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="Assets/projects/23.jpg" class="img-fluid rounded" alt="Project Image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>


      <!-- Modal with Carousel -->
      <div class="modal fade" id="carouselModal18" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="carouselModalLabel">Project Gallery</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <img src="Assets/projects/26.png" class="img-fluid" alt="Project 1">
                  </div>
                  <div class="carousel-item">
                    <img src="Assets/projects/27.png" class="img-fluid" alt="Project 2">
                  </div>

                  <!-- Additional carousel items can be uncommented as needed -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
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
        <p class="green">We are the pleasant & friendly organization. We offer affordable houses and constructions with 100% Quality Assurance.</p>
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
          <h6 class="fw-bold">Name</h6>
          <p>Er. R. Balaramanan <br>
            <span1>(Managing Director)</span1>
          </p>

          <h6 class="fw-bold">Office</h6>
          <p>SN Complex, Govindhasamy nagar, Near old bus stand,<br>Salem- 636015</p>
          <h6 class="fw-bold">Email</h6>
          <p><a href="mailto:welcome@everhomesconstruction.com" class="link-light text-decoration-none">welcome@everhomesconstruction.com</a></p>
          <h6 class="fw-bold">Phone</h6>
          <a href="tel:+918940104441" class="link-light text-decoration-none">+91 89401 04441</a><br>
          <a href="tel:+918015223441" class="link-light text-decoration-none">+91 80152 23441</a>
        </div>

        <div class="col-md-6">
          <form action="send_mail.php" method="POST">
            <div class="mb-3">
              <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number" pattern="[0-9]{10}" required>
            </div>
            <div class="mb-3">
              <select class="form-control" id="service" name="service" required>
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
              <textarea class="form-control" id="comments" name="comments" rows="5" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-success w-100">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- keywords -->
  <section class="container my-5">
    <!-- <div class="text-center mb-5">
      <h2 class="fw-bold text-black">Keywords</h2>
      <p class="text-muted">Explore our wide range of services in construction and interior design</p>
    </div> -->

    <div class="row g-5">
      <!-- Construction Keywords -->
      <div class="col-md-12">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="bi bi-building fs-4"></i>
              </div>
              <h4 class="ms-3 mb-0 text-success">Construction Services</h4>
            </div>

            <table>
              <tr>
                <td>Building Construction</td>
                <td>Contractors</td>
                <td>Builders</td>
                <td>Construction Company</td>
              </tr>
              <tr>
                <td>Residential Apartment Construction</td>
                <td>Remodeling</td>
                <td>House Alterations</td>
                <td>Building Alterations</td>
              </tr>
              <tr>
                <td>Construction Management</td>
                <td>General Contractors</td>
                <td>Construction Worker</td>
                <td>Construction Materials</td>
              </tr>
              <tr>
                <td>Construction Site</td>
                <td>Building Contractor</td>
                <td>New Construction</td>
                <td>House Building</td>
              </tr>
              <tr>
                <td>Construction Consulting</td>
                <td>Commercial Projects</td>
                <td>Building Projects</td>
                <td>Residential Construction</td>
              </tr>
              <tr>
                <td>Steel Structure</td>
                <td>Steel Building</td>
                <td>Steel Construction</td>
                <td>2D Planning</td>
              </tr>
              <tr>
                <td>3D Elevation</td>
                <td>3D Design</td>
                <td>Commercial Complex</td>
                <td>Commercial Structure</td>
              </tr>
              <tr>
                <td>Construction in Salem</td>
                <td>Builders in Salem</td>
                <td>Building contraction in Salem</td>
                <td>Building consulting in Salem</td>
              </tr>
            </table>



          </div>
        </div>
      </div>

      <!-- Interior Keywords -->
      <div class="col-md-12">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="bi bi-house-door fs-4"></i>
              </div>
              <h4 class="ms-3 mb-0 text-success">Interior Services</h4>
            </div>
            <p class="card-text mt-3 text-justify-custom">
            <table>
              <tr>
                <td>Interior Design</td>
                <td>Interior Decoration</td>
                <td>Modular Kitchen</td>
                <td>Cupboard Design</td>
                <td>Wardrobe Design</td>
                <td>Kitchen Basket</td>
                <td>Tandem Box</td>
              </tr>
              <tr>


                <td>Inside Decorating</td>
              </tr>
            </table>
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

        <div class="col-md-5 text-center text-md-end">
          <span>Everhomes's Construction © 2025. All rights reserved.</span>
        </div>
        <div class="col-md-3 text-center mb-3 mb-md-0">
          <span class="fw-bold">Find us on :</span>
          <a href="mailto:welcome@everhomesconstruction.com" class="text-light ms-4">
            <i class="bi bi-envelope-fill" style="font-size: 1.5rem;"></i>
          </a>
          <a href="https://www.facebook.com/profile.php?id=61571949212883&mibextid=ZbWKwL" class="text-light ms-3" target="_blank">
            <i class="bi bi-facebook" style="font-size: 1.5rem;"></i>
          </a>
          <a href="https://www.instagram.com/rbala_ramanan?igsh=MW45dTUzMWRzYjZtbw==" class="text-light ms-3" target="_blank">
            <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
          </a>
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
      $({
        countNum: 0
      }).animate({
        countNum: targetValue
      }, {
        duration: duration,
        easing: 'swing',
        step: function() {
          counter.text(Math.floor(this.countNum));
        }
      });
    }

    $(document).ready(function() {
      // Set target values and duration for each counter
      animateCounter('#counter1', 150, 2000); // Projects Completed
      animateCounter('#counter2', 25, 3000); // Years of Experience
      animateCounter('#counter3', 1200, 2500); // Satisfied Clients
      animateCounter('#counter4', 200, 3500); // Buildings Constructed
    });

    document.addEventListener('contextmenu', event => event.preventDefault());

    $(window).on('load', function () {
  console.log('Window loaded');

  // Fade out the loader over 5 seconds (5000ms)
  $('.loader').fadeOut(5000, function () {
    console.log('.loader faded out');
  });

  // Delay for 500ms, then fade out the loader-mask over 5 seconds
  $('.loader-mask').delay(1000).fadeOut(5000, function () {
    console.log('.loader-mask faded out');
  });

  // Sequentially fade in and out text elements
  let textElements = $('.text-to-fade'); // Select all text elements
  let delay = 0; // Initial delay time

  textElements.each(function (index, element) {
    $(element)
      .delay(delay)
      .fadeIn(1000) // Fade in over 1 second
      .delay(1000) // Wait for 2 seconds
      .fadeOut(1000, function () {
        console.log(`Text element ${index + 1} faded out`);
      }); // Fade out over 1 second
    delay += 3000; // Increase delay for the next element
  });
});

  </script>

</body>

</html>