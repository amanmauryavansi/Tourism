<?php 
include_once "partials/header.blade.php";
?>



<style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --dark-color: #2c3e50;
            --light-color: #ecf0f1;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--dark-color) !important;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://placehold.co/1920x600') center/cover no-repeat;
            color: white;
            padding: 120px 0;
            margin-bottom: 40px;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }
        
        .card:hover {
            transform: translateY(-10px);
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .price-tag {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .star-rating {
            color: #f1c40f;
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 40px 0;
            margin-top: 50px;
        }
        
        .special-offer {
            border: 2px solid var(--secondary-color);
            position: relative;
        }
        
        .special-offer::after {
            content: "Special Offer";
            position: absolute;
            top: 10px;
            left: -10px;
            background-color: var(--secondary-color);
            color: white;
            padding: 3px 15px;
            font-size: 12px;
            transform: rotate(-20deg);
        }
        
        .search-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }
    </style>


<main class="container mt-4">
    <h1 class="text-center">Welcome to Our Tourism Management System</h1>
    <p class="text-center">Explore our amazing travel packages and book your next adventure.</p>

    <a href="./packages.blade.phps" class="btn btn-primary btn-lg px-4 me-2">Explore Packages</a>
            <a href="./packages.blade.php" class="btn btn-outline-light btn-lg px-4">Customize Trip</a>
        </div>
    </section>

    <!-- Search Box -->
    <div class="container search-box">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Destination</label>
                    <select class="form-select">
                        <option>Select Destination</option>
                        <option>Goa</option>
                        <option>Manali</option>
                        <option>Kerala</option>
                        <option>Rajasthan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Check In</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Check Out</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Guests</label>
                    <select class="form-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4+</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Star Category</label>
                    <select class="form-select">
                        <option>Any</option>
                        <option>3 Star</option>
                        <option>4 Star</option>
                        <option>5 Star</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-primary px-5">Search</button>
        </div>
    </div>


  
        
    <!-- Featured Packages -->
    <section class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Featured Packages</h2>
            <a href="./packages.blade.php" class="btn btn-outline-primary">View All</a>
        </div>
        <div class="row">
            <!-- Goa Special Offer -->
            <div class="col-md-4">
                <div class="card special-offer">
                    <div class="price-tag">₹8,999</div>
                    <img src="https://placehold.co/600x400/3b5998/ffffff?text=Goa+Beach" class="card-img-top" alt="Goa">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-primary fw-bold">Today's Deal</span>
                            <span class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h5 class="card-title">Goa - 1 Night Special</h5>
                        <p class="card-text">Experience the vibrant beaches of Goa with this exclusive one-night package.</p>
                        <div class="mb-3">
                            <span class="badge bg-warning text-dark me-2">3-star</span>
                            <span class="badge bg-primary">4-star</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-swimming-pool me-2 text-primary"></i>
                                <i class="fas fa-utensils me-2 text-primary"></i>
                                <i class="fas fa-wifi me-2 text-primary"></i>
                            </div>
                            <a href="booking" class="btn btn-sm btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Manali Package -->
            <div class="col-md-4">
                <div class="card">
                    <div class="price-tag">₹12,499</div>
                    <img src="https://placehold.co/600x400/2ecc71/ffffff?text=Manali+Hills" class="card-img-top" alt="Manali">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-success fw-bold">Best Seller</span>
                            <span class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                        </div>
                        <h5 class="card-title">Manali - 3 Days / 2 Nights</h5>
                        <p class="card-text">Snow-capped mountains and adventure activities await you in Manali.</p>
                        <div class="mb-3">
                            <span class="badge bg-warning text-dark me-2">3-star</span>
                            <span class="badge bg-primary">4-star</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-mountain me-2 text-primary"></i>
                                <i class="fas fa-skiing me-2 text-primary"></i>
                                <i class="fas fa-spa me-2 text-primary"></i>
                            </div>
                            <a href="booking" class="btn btn-sm btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Kerala Package -->
            <div class="col-md-4">
                <div class="card">
                    <div class="price-tag">₹15,999</div>
                    <img src="https://placehold.co/600x400/e74c3c/ffffff?text=Kerala+Backwaters" class="card-img-top" alt="Kerala">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-info fw-bold">Luxury</span>
                            <span class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <h5 class="card-title">Kerala - 4 Days / 3 Nights</h5>
                        <p class="card-text">Relax in houseboats and experience Ayurvedic treatments in God's Own Country.</p>
                        <div class="mb-3">
                            <span class="badge bg-primary">4-star</span>
                            <span class="badge bg-dark ms-2">5-star</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-ship me-2 text-primary"></i>
                                <i class="fas fa-leaf me-2 text-primary"></i>
                                <i class="fas fa-spa me-2 text-primary"></i>
                            </div>
                            <a href="booking" class="btn btn-sm btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Popular Destinations -->
<section class="container mt-5">
        <h2 class="text-center mb-5">Popular Destinations</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="https://placehold.co/400x300/3498db/ffffff?text=Rajasthan" class="card-img-top rounded" alt="Rajasthan">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                            <div class="bg-dark bg-opacity-50 text-white p-3 rounded-bottom">
                                <h5 class="card-title mb-0">Rajasthan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="https://placehold.co/400x300/e67e22/ffffff?text=Shimla" class="card-img-top rounded" alt="Shimla">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                            <div class="bg-dark bg-opacity-50 text-white p-3 rounded-bottom">
                                <h5 class="card-title mb-0">Shimla</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="https://placehold.co/400x300/9b59b6/ffffff?text=Darjeeling" class="card-img-top rounded" alt="Darjeeling">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                            <div class="bg-dark bg-opacity-50 text-white p-3 rounded-bottom">
                                <h5 class="card-title mb-0">Darjeeling</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="https://placehold.co/400x300/1abc9c/ffffff?text=Andaman" class="card-img-top rounded" alt="Andaman">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                            <div class="bg-dark bg-opacity-50 text-white p-3 rounded-bottom">
                                <h5 class="card-title mb-0">Andaman</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us -->
    <section class="container mt-5">
        <h2 class="text-center mb-5">Why Choose Us</h2>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h5>Safe Travel</h5>
                    <p class="mb-0">Your safety is our top priority with verified partners</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-rupee-sign fa-3x text-primary mb-3"></i>
                    <h5>Best Price</h5>
                    <p class="mb-0">Guaranteed best prices for all our packages</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                    <h5>24/7 Support</h5>
                    <p class="mb-0">Our travel experts are available round the clock</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-map-marked-alt fa-3x text-primary mb-3"></i>
                    <h5>Customizable</h5>
                    <p class="mb-0">Tailor-made itineraries to suit your needs</p>
                </div>
            </div>
        </div>
    </section>
     <!-- Testimonials -->
     <section class="bg-light py-5 mt-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"The Goa package was amazing! The hotel was right on the beach and the service was excellent."</p>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/50x50" class="rounded-circle me-3" alt="Customer">
                                <div>
                                    <h6 class="mb-0">Rahul Sharma</h6>
                                    <small class="text-muted">Mumbai</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="card-text">"Manali trip was well organized. The snow experience was magical. Will definitely book again!"</p>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/50x50" class="rounded-circle me-3" alt="Customer">
                                <div>
                                    <h6 class="mb-0">Priya Patel</h6>
                                    <small class="text-muted">Delhi</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"Kerala backwaters experience was peaceful and rejuvenating. The houseboat staff was very courteous."</p>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/50x50" class="rounded-circle me-3" alt="Customer">
                                <div>
                                    <h6 class="mb-0">Ananya Gupta</h6>
                                    <small class="text-muted">Bangalore</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="container my-5">
        <div class="bg-primary text-white rounded p-5 text-center">
            <h3 class="mb-3">Subscribe to Our Newsletter</h3>
            <p class="mb-4">Get exclusive deals and travel inspiration straight to your inbox</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your email address">
                        <button class="btn btn-dark" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
</main>

<?php 
include_once "partials/footer.blade.php";
?>