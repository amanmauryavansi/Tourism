<?php 
include_once "partials/header.blade.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Tourism Management System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .alert {
            display: none; /* Hidden by default */
        }
    </style>
</head>
<body>
    <main class="container mt-4 mb-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400" class="contact-img img-fluid" alt="Contact">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Contact Us</h2>
                
                <!-- Alert Message -->
                <div id="successAlert" class="alert alert-success" role="alert" href="./forms/contact.php">
                    Your message has been sent successfully!
                </div>

                <form id="contactForm">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" class="form-control" placeholder="Your Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" href="contact.php">Send Message</button>
                </form>
            </div>
        </div>
    </main>

<?php 
include_once "partials/footer.blade.php";
?>

<!-- Bootstrap JS and Custom Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent form from submitting normally
        
        // Show the alert
        const alert = document.getElementById('successAlert');
        alert.style.display = 'block';
        
        // Reset the form
        this.reset();
        
        // Hide the alert after 3 seconds
        setTimeout(() => {
            alert.style.display = 'none';
        }, 3000);
    });
</script>
</body>
</html>