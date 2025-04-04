<?php 
include_once "partials/header.blade.php";
?>

<main class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400" class="img-fluid" alt="Register">
            </div>
            <div class="col-md-6">
                <h2>Register</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword"  class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <div class="mt-2">
                        <a href="sign-in">Already have an account? Login</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php 
include_once "partials/footer.blade.php";
?>