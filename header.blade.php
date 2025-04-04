<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header class="bg-primary text-white p-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-white" href="#"><i class="fas fa-globe"></i> Tourism Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-white" href="/"><i class="fas fa-home"></i>
                                Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="about-us"><i
                                    class="fas fa-info-circle"></i> About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="services"><i
                                    class="fas fa-concierge-bell"></i> Services</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="packages"><i
                                    class="fas fa-suitcase"></i> Packages</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="contact-us"><i
                                    class="fas fa-info-circle"></i> About Us</a></li>
                        <?php
                        if ($_SESSION['userType'] == 'guest') {
                        ?>
                            <li class="nav-item"><a class="nav-link text-white" href="/sign-in"><i
                                        class="fas fa-sign-in-alt"></i> Sign In</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="/register"><i
                                        class="fas fa-user-plus"></i> Register</a></li>
                        <?php
                        } else if ($_SESSION['userType'] == 'user') {
                        ?>
                            <li class="nav-item"><a class="nav-link text-white" href="booking"><i
                                        class="fas fa-book"></i> Booking</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="profile"><i
                                        class="fas fa-user"></i> My Profile</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="/logout"><i
                                        class="fas fa-sign-out-alt"></i> Logout</a></li>

                        <?php
                        } else {
                        ?>
                            <li class="nav-item"><a class="nav-link text-white" href="/logout"><i
                                        class="fas fa-sign-out-alt"></i> Logout</a></li>

                        <?php
                        }
                        ?>
                        <li class="nav-item"><a class="nav-link text-white" href="/contact-us"><i
                                    class="fas fa-envelope"></i> Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>