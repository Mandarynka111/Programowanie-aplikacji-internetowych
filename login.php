<?php

require_once('config.php');

if ($auth->isLogged()) {
    header("Location:index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($auth->login($_POST['email'], $_POST['password'])) {
        header("Location:index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #1c1e21;
        }

        main {
            height: 90vh;
            width: 100vw;
            position: relative;
            margin: 0 auto;
        }

        .row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            max-width: 1000px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .colm-form {
            flex: 0 0 40%;
            text-align: center;
        }

        .colm-form .form-container {
            background-color: #ffffff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            padding: 20px;
            max-width: 400px;
        }

        .colm-form .form-container input, .colm-form .form-container .btn-login {
            width: 100%;
            margin: 5px 0;
            height: 45px;
            vertical-align: middle;
            font-size: 16px;
        }

        .colm-form .form-container input {
            border: 1px solid #dddfe2;
            color: #1d2129;
            padding: 0 8px;
            outline: none;
        }

        .colm-form .form-container input:focus {
            border-color: #1877f2;
            box-shadow: 0 0 0 2px #e7f3ff;
        }

        .colm-form .form-container .btn-login {
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            padding: 0 16px;
            color: #ffffff;
            font-weight: 700;
        }

        .colm-form .form-container .btn-new {
            background-color: #42b72a;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            line-height: 48px;
            padding: 0 16px;
            color: #ffffff;
            font-weight: 700;
            margin-top: 20px;
        }

        button:disabled {
            background-color: gray !important;
        }
    </style>
</head>
<body>
<?php require_once("menu-bar.php"); ?>
<main>
    <div class="row">
        <div class="colm-form">
            <div class="form-container">
                <form action="login.php" method="post">
                    <input type="email" placeholder="Email address" name="email" id="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn-login" disabled>Login</button>
                </form>
                <a href="registration.php"><button class="btn-new">Create new Account</button></a>
            </div>
        </div>
    </div>
</main>
<script>
    let emailInput = document.getElementsByName("email")[0]
    let passwordInput = document.getElementsByName("password")[0]
    emailInput.addEventListener("input", isValid)
    passwordInput.addEventListener("input", isValid)

    function isValid() {
        let button = document.getElementsByClassName("btn-login")[0];
        button.disabled = !(passwordInput.value.length > 1 && emailInput.value.length > 8);
    }
</script>
</body>
</html>

