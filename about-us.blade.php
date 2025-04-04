<?php
include_once "partials/header.blade.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Tourism Management System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2ecc71;
            --dark: #2c3e50;
            --light: #ecf0f1;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://via.placeholder.com/1920x600') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            color: white;
        }
        
        .team-member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .stat-box {
            border-left: 4px solid var(--primary);
            padding-left: 15px;
        }
        
        .mission-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">Our Story</h1>
            <p class="lead">Discover the passion behind our tourism services</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://via.placeholder.com/600x400" alt="About Us" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">About TourEase</h2>
                    <p class="lead">We're dedicated to creating unforgettable travel experiences with a personal touch.</p>
                    <p>Founded in 2010, TourEase has grown from a small local agency to a leading tourism management company serving travelers worldwide. Our team combines local knowledge with global standards to deliver exceptional experiences.</p>
                    <p>We believe travel should be transformative, not transactional. That's why we go beyond typical tours to create journeys that connect you with the heart and soul of each destination.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Mission & Values</h2>
                <p class="text-muted">What drives us every day</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="mission-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h4>Global Reach</h4>
                    <p>Connecting travelers to 50+ destinations worldwide with local expertise.</p>
                </div>
                
                <div class="col-md-4 text-center">
                    <div class="mission-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>Sustainable Tourism</h4>
                    <p>Committed to eco-friendly practices and supporting local communities.</p>
                </div>
                
                <div class="col-md-4 text-center">
                    <div class="mission-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Customer Love</h4>
                    <p>98% customer satisfaction rate with personalized service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-box">
                        <h3 class="fw-bold display-5">15K+</h3>
                        <p class="text-muted">Happy Travelers</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h3 class="fw-bold display-5">50+</h3>
                        <p class="text-muted">Destinations</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h3 class="fw-bold display-5">12</h3>
                        <p class="text-muted">Years Experience</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h3 class="fw-bold display-5">98%</h3>
                        <p class="text-muted">Positive Reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Meet Our Team</h2>
                <p class="text-muted">The passionate people behind your perfect journey</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="mb-3 team-member">
                    <h4>Sarah Johnson</h4>
                    <p class="text-primary fw-bold">Founder & CEO</p>
                    <p>15 years in tourism industry</p>
                    <div class="social-links">
                        <a href="#" class="text-dark mx-1"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-dark mx-1"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="mb-3 team-member">
                    <h4>Michael Chen</h4>
                    <p class="text-primary fw-bold">Operations Director</p>
                    <p>Logistics expert</p>
                    <div class="social-links">
                        <a href="#" class="text-dark mx-1"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="mb-3 team-member">
                    <h4>Priya Patel</h4>
                    <p class="text-primary fw-bold">Customer Experience</p>
                    <p>Multilingual guide</p>
                    <div class="social-links">
                        <a href="#" class="text-dark mx-1"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">What Our Clients Say</h2>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"The best travel experience I've ever had! Every detail was perfectly arranged."</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Client" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">Robert Smith</h6>
                                    <small class="text-muted">New York, USA</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"Exceptional service from start to finish. Will definitely book again!"</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Client" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">Maria Garcia</h6>
                                    <small class="text-muted">Madrid, Spain</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="card-text">"The local guides were incredibly knowledgeable. Felt like traveling with friends."</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Client" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">James Wilson</h6>
                                    <small class="text-muted">London, UK</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
include_once "partials/footer.blade.php";
?>

