<?php
include_once "partials/header.blade.php";
?>

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
            color: white;
            display: flex;
            align-items: center;
        }

        .service-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .pricing-table {
            background: var(--light);
            border-radius: 10px;
            padding: 2rem;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">Our Services</h1>
            <p class="lead">Explore our comprehensive tourism solutions</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">What We Offer</h2>
                <p class="text-muted">Tailored tourism services for every traveler</p>
            </div>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-plane-departure"></i>
                            </div>
                            <h4 class="card-title fw-bold">Travel Planning</h4>
                            <p class="card-text">Custom itineraries, flight bookings, and accommodation arrangements tailored to your preferences.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h4 class="card-title fw-bold">Guided Tours</h4>
                            <p class="card-text">Expert-led tours with local guides, available in multiple languages for an immersive experience.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <h4 class="card-title fw-bold">Transportation</h4>
                            <p class="card-text">Reliable transfers, car rentals, and private chauffeurs for seamless travel.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <h4 class="card-title fw-bold">Ticket Booking</h4>
                            <p class="card-text">Secure tickets for attractions, events, and experiences with priority access.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-umbrella-beach"></i>
                            </div>
                            <h4 class="card-title fw-bold">Holiday Packages</h4>
                            <p class="card-text">All-inclusive packages for beach getaways, adventure trips, and cultural tours.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4 class="card-title fw-bold">24/7 Support</h4>
                            <p class="card-text">Round-the-clock customer assistance for all your travel needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Service Packages</h2>
                <p class="text-muted">Choose the perfect plan for your journey</p>
            </div>

            <div class="row g-4">
                <!-- Basic Package -->
                <div class="col-md-4">
                    <div class="pricing-table text-center">
                        <h3 class="fw-bold">Basic Explorer</h3>
                        <p class="text-muted">Starting at</p>
                        <h2 class="text-primary">$299</h2>
                        <ul class="list-unstyled my-4">
                            <li>Flight Booking</li>
                            <li>Hotel Reservation</li>
                            <li>Basic Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>

                <!-- Standard Package -->
                <div class="col-md-4">
                    <div class="pricing-table text-center">
                        <h3 class="fw-bold">Adventure Pro</h3>
                        <p class="text-muted">Starting at</p>
                        <h2 class="text-primary">$599</h2>
                        <ul class="list-unstyled my-4">
                            <li>All Basic Features</li>
                            <li>Guided Tours</li>
                            <li>Transportation</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>

                <!-- Premium Package -->
                <div class="col-md-4">
                    <div class="pricing-table text-center">
                        <h3 class="fw-bold">Luxury Traveler</h3>
                        <p class="text-muted">Starting at</p>
                        <h2 class="text-primary">$999</h2>
                        <ul class="list-unstyled my-4">
                            <li>All Pro Features</li>
                            <li>Premium Hotels</li>
                            <li>Private Transfers</li>
                            <li>Exclusive Experiences</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Ready to Start Your Journey?</h2>
            <p class="lead mb-4">Let us craft your perfect travel experience today!</p>
            <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </section>

<?php 
include_once "partials/footer.blade.php";
?>

