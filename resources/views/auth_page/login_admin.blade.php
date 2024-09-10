<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/img/logo/LOGO GRAGE MANDIRI.png" rel="icon">
    <title>Techno Indie - Admin Login</title>
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-login">
    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary btn-block" id="loginButton">Login</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                                <div class="text-center">
                                    <p>&copy;<script>document.write(new Date().getFullYear());</script> - Made with love by <a href="https://instagram.com/technoindieofficial" class="link-highlight">Techno Indie</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/ruang-admin.min.js"></script>
    <!-- JavaScript for Login Validation -->
    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            // Define correct email and password values
            const correctEmail = 'admin@gmail.com';
            const correctPassword = 'admin#1234';

            // Get input email and password values
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Check if input values match the correct values
            if (email === correctEmail && password === correctPassword) {
                // Redirect to the admin dashboard page
                window.location.href = "{{ url('dashboard') }}";
            } else {
                // Display error message
                alert('Email or password is incorrect. Please try again.');
            }
        });
    </script>
</body>

</html>
