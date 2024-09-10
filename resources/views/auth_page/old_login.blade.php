<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techno Indie - Login</title>

    <!-- MDBootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Custom button colors */
        .btn-login {
            background-color: #007bb5; /* Green background */
            border-color: #007bb5;    /* Green border */
            color: white;             /* White text */
        }

        .btn-login:hover {
            background-color: #008CBA; /* Darker green on hover */
            border-color: #008CBA;    /* Darker green border on hover */
        }

        .btn-register {
            background-color: #007bb5; /* Blue background */
            border-color: #007bb5;    /* Blue border */
            color: white;             /* White text */
        }

        .btn-register:hover {
            background-color: #008CBA; /* Darker blue on hover */
            border-color: #008CBA;    /* Darker blue border on hover */
        }

        .nav-pills .nav-link {
            background-color: #f8f9fa; /* Inactive tab background */
            color: #495057;            /* Inactive tab text color */
            border: 1px solid #dee2e6; /* Border for tabs */
            margin: 0 5px;             /* Space between tabs */
        }

        .nav-pills .nav-link.active {
            background-color: #008CBA; /* Active tab background */
            color: white;              /* Active tab text color */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-center mb-4">
                    <h1 class="display-4">Welcome</h1>
                    <p class="lead">Please login or register to continue</p>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="login" role="tab"
                                   aria-controls="pills-login" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="register" role="tab"
                                   aria-controls="pills-register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->

                        <!-- Pills content -->
                        <div class="tab-content">
                            <!-- SIGN IN -->
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                <form>
                                    <div class="text-center mb-3">
                                        <p>Sign in :</p>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="loginName" class="form-control"/>
                                        <label class="form-label" for="loginName">Email</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="loginPassword" class="form-control"/>
                                        <label class="form-label" for="loginPassword">Password</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-login btn-block mb-4">Sign in</button>
                                </form>
                            </div>

                            <!-- REGISTER -->
                            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                                <form>
                                    <div class="text-center mb-3">
                                        <p>Sign up :</p>
                                    </div>

                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="registerName" class="form-control"/>
                                        <label class="form-label" for="registerName">Name</label>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="registerEmail" class="form-control"/>
                                        <label class="form-label" for="registerEmail">Email</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="registerPassword" class="form-control"/>
                                        <label class="form-label" for="registerPassword">Password</label>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                               aria-describedby="registerCheckHelpText"/>
                                        <label class="form-check-label" for="registerCheck">
                                            I have read and agree to the terms
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-register btn-block mb-3">Sign up</button>
                                </form>
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MDBootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</body>
</html>
