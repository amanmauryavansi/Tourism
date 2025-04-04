<?php 
include_once "partials/header.blade.php";
?>

<main class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400" class="img-fluid" alt="Login">
            </div>
            <div class="col-md-6">
                <h2>Login</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Email or Phone</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email or Phone" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" name="remember" for="rememberMe">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="mt-2">
                        <a href="#">Forgot Password?</a> | <a href="register.php">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php 
include_once "partials/footer.blade.php";
?>