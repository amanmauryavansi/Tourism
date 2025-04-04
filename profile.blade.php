<?php
include_once "partials/header.blade.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="https://via.placeholder.com/150" class="rounded-circle img-fluid" alt="Profile Photo">
            <h3 class="mt-3">John Doe</h3>
        </div>
        <div class="col-md-8">
            <h4>Contact Information</h4>
            <ul class="list-group">
                <li class="list-group-item"><strong>Email:</strong> johndoe@example.com</li>
                <li class="list-group-item"><strong>Phone:</strong> +1234567890</li>
                <li class="list-group-item"><strong>Address:</strong> 123 Street, City, Country</li>
            </ul>
            <h4 class="mt-4">Booking Information</h4>
            <ul class="list-group">
                <li class="list-group-item"><strong>Tour Package:</strong> Explore Paris</li>
                <li class="list-group-item"><strong>Booking ID:</strong> #TMS2025001</li>
                <li class="list-group-item"><strong>Travel Date:</strong> 15th April 2025</li>
            </ul>
            <button class="btn btn-primary mt-3">Edit Profile</button>
            <button class="btn btn-success mt-3">Confirm Booking</button>
        </div>
    </div>
</div>
<?php
include_once "partials/footer.blade.php";
?>