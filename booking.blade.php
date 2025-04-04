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
        
        .booking-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://placehold.com/1920x600') center/cover no-repeat;
            color: white;
            padding: 100px 0;
            margin-bottom: 40px;
        }
        
        .package-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .package-img {
            height: 100%;
            min-height: 300px;
            object-fit: cover;
        }
        
        .price-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .star-rating {
            color: #f1c40f;
        }
        
        .facility-icon {
            font-size: 1.2rem;
            margin-right: 8px;
            color: var(--primary-color);
        }
        
        .booking-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .btn-book {
            background-color: var(--secondary-color);
            color: white;
            font-weight: bold;
            padding: 10px 25px;
            border: none;
        }
        
        .hotel-card {
            transition: transform 0.3s;
        }
        
        .hotel-card:hover {
            transform: translateY(-5px);
        }
        
        @media (max-width: 768px) {
            .booking-hero {
                padding: 60px 0;
            }
            
            .package-img {
                min-height: 200px;
            }
            
            .price-tag {
                font-size: 1rem;
                padding: 3px 10px;
            }
        }
    </style>


    <!-- Booking Hero -->
    <section class="booking-hero">
        <div class="container text-center">
            <h1 class="display-5 fw-bold mb-3">Goa Beach Package</h1>
            <p class="lead">1 Night Special - Enjoy the sun, sand and sea</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Left Column - Package Details -->
            <div class="col-lg-8">
                <!-- Package Highlights -->
                <div class="package-card mb-4">
                    <div class="card-body">
                        <h2 class="mb-4"><i class="fas fa-bolt text-warning me-2"></i>Package Highlights</h2>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-2"></i>
                                    <div>
                                        <h5>Beachfront Stay</h5>
                                        <p class="text-muted">Direct access to pristine beaches</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-2"></i>
                                    <div>
                                        <h5>Sunset Cruise</h5>
                                        <p class="text-muted">Complimentary evening boat ride</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-2"></i>
                                    <div>
                                        <h5>Daily Breakfast</h5>
                                        <p class="text-muted">Buffet breakfast included</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-2"></i>
                                    <div>
                                        <h5>Airport Transfers</h5>
                                        <p class="text-muted">Hassle-free pick-up and drop</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Available Hotels -->
                <div class="package-card mb-4">
                    <div class="card-body">
                        <h2 class="mb-4"><i class="fas fa-hotel text-primary me-2"></i>Available Hotels</h2>
                        <div class="row">
                            <!-- 3-star Hotel -->
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 hotel-card">
                                    <img src="https://placehold.com/600x400" class="card-img-top" alt="Sea View Resort">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title">Sea View Resort</h5>
                                            <span class="badge bg-warning text-dark align-self-start">3-star</span>
                                        </div>
                                        <div class="star-rating mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="card-text">
                                            <i class="fas fa-swimming-pool facility-icon"></i>
                                            <i class="fas fa-utensils facility-icon"></i>
                                            <i class="fas fa-wifi facility-icon"></i>
                                            <i class="fas fa-parking facility-icon"></i>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-success fw-bold">₹7,499/person</span>
                                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 4-star Hotel -->
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 hotel-card">
                                    <img src="https://placehold.com/600x400" class="card-img-top" alt="Grand Beach Hotel">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title">Grand Beach Hotel</h5>
                                            <span class="badge bg-primary align-self-start">4-star</span>
                                        </div>
                                        <div class="star-rating mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="card-text">
                                            <i class="fas fa-spa facility-icon"></i>
                                            <i class="fas fa-cocktail facility-icon"></i>
                                            <i class="fas fa-dumbbell facility-icon"></i>
                                            <i class="fas fa-concierge-bell facility-icon"></i>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-success fw-bold">₹9,999/person</span>
                                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Package Details -->
                <div class="package-card mb-4">
                    <div class="card-body">
                        <h2 class="mb-4"><i class="fas fa-info-circle text-info me-2"></i>Package Details</h2>
                        
                        <div class="accordion" id="packageDetails">
                            <!-- Itinerary -->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#itinerary">
                                        Itinerary
                                    </button>
                                </h3>
                                <div id="itinerary" class="accordion-collapse collapse show" data-bs-parent="#packageDetails">
                                    <div class="accordion-body">
                                        <div class="itinerary-day">
                                            <h5>Day 1: Arrival in Goa</h5>
                                            <ul>
                                                <li>Morning: Airport pickup and transfer to hotel</li>
                                                <li>Afternoon: Check-in and leisure time</li>
                                                <li>Evening: Sunset cruise (5:30 PM - 7:30 PM)</li>
                                                <li>Night: Free time to explore local markets</li>
                                            </ul>
                                        </div>
                                        <div class="itinerary-day mt-3">
                                            <h5>Day 2: Departure</h5>
                                            <ul>
                                                <li>Morning: Breakfast at hotel</li>
                                                <li>Late morning: Check-out and airport transfer</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Inclusions -->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inclusions">
                                        Inclusions
                                    </button>
                                </h3>
                                <div id="inclusions" class="accordion-collapse collapse" data-bs-parent="#packageDetails">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>1 night accommodation in selected hotel</li>
                                            <li>Daily buffet breakfast</li>
                                            <li>Sunset cruise tickets (non-alcoholic)</li>
                                            <li>Round-trip airport transfers</li>
                                            <li>All applicable taxes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Exclusions -->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exclusions">
                                        Exclusions
                                    </button>
                                </h3>
                                <div id="exclusions" class="accordion-collapse collapse" data-bs-parent="#packageDetails">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Airfare/train tickets to Goa</li>
                                            <li>Lunch and dinner</li>
                                            <li>Personal expenses</li>
                                            <li>Optional activities</li>
                                            <li>Anything not mentioned in inclusions</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Booking Form -->
            <div class="col-lg-4">
                <div class="booking-form sticky-top" style="top: 20px;">
                    <h3 class="mb-4 text-center">Book This Package</h3>
                    
                    <form>
                        <!-- Hotel Selection -->
                        <div class="mb-3">
                            <label class="form-label">Hotel Category</label>
                            <select class="form-select" required>
                                <option value="">Select Hotel Category</option>
                                <option value="3star">3 Star Hotel (₹7,499 per person)</option>
                                <option value="4star">4 Star Hotel (₹9,999 per person)</option>
                            </select>
                        </div>
                        
                        <!-- Date Selection -->
                        <div class="mb-3">
                            <label class="form-label">Check-in Date</label>
                            <input type="date" class="form-control" required>
                        </div>
                        
                        <!-- Guest Count -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label">Adults</label>
                                <select class="form-select">
                                    <option>1</option>
                                    <option selected>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Children</label>
                                <select class="form-select">
                                    <option selected>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Special Requests -->
                        <div class="mb-4">
                            <label class="form-label">Special Requests</label>
                            <textarea class="form-control" rows="3" placeholder="Any special requirements?"></textarea>
                        </div>
                        
                        <!-- Price Summary -->
                        <div class="card mb-4 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Price Summary</h5>
                                <div class="d-flex justify-content-between">
                                    <span>2 Adults x ₹7,499</span>
                                    <span>₹14,998</span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span>Taxes & Fees</span>
                                    <span>₹1,200</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold">
                                    <span>Total</span>
                                    <span>₹16,198</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Book Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-book btn-lg">
                                <i class="fas fa-lock me-2"></i>Book Now
                            </button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <small class="text-muted">Free cancellation until 7 days before travel</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   


   

   


<?php
include_once "partials/footer.blade.php";
?>