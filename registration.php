<?php
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $auth = new Auth();
    $auth->register($_POST['email'], $_POST['password']);
    header("Location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="https://fonts.googleapis.com/css?family=PT+Sans">
    <style>
        body {
            background: #fff;
            font-family: 'PT Sans', sans-serif;
        }

        h2 {
            padding-top: 1.5rem;
        }

        a {
            color: #333;
        }

        a:hover {
            color: #da5767;
            text-decoration: none;
        }

        .card {
            border: 0.40rem solid #f8f9fa;
            top: 10%;
        }

        .form-control {
            background-color: #f8f9fa;
            padding: 25px 15px;
            margin-bottom: 1.3rem;
        }

        .form-control:focus {

            color: #000000;
            background-color: #ffffff;
            border: 3px solid #da5767;
            outline: 0;
            box-shadow: none;

        }

        button:disabled {
            background-color: gray !important;
        }
    </style>
</head>
<body>
<?php require_once('menu-bar.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body py-md-4">
                    <form method="post" action="registration.php">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                   name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="confirm-password"
                                   placeholder="confirm-password">
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="login.php">Login</a>
                            <button class="btn btn-primary" id="btn-register" type="submit" disabled>Create Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let emailInput = document.getElementById("email")
    let passwordInput = document.getElementById("password")
    let confirmPasswordInput = document.getElementById("confirm-password")
    emailInput.addEventListener("input", isValid)
    passwordInput.addEventListener("input", isValid)
    confirmPasswordInput.addEventListener("input", isValid)

    function isValid() {
        let button = document.getElementById("btn-register");

        if (passwordInput.value.length > 1 && confirmPasswordInput.value.length > 0 && emailInput.value.length > 8) {
            button.disabled = passwordInput.value !== confirmPasswordInput.value;
        }
    }
</script>
</body>
</html>


