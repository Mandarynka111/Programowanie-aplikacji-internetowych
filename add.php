<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
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
                    <form method="post" action="save.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" placeholder="URL" name="url">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="price"
                                   name="price"
                                   placeholder="Price" min="1">
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <button class="btn btn-primary" id="btn-create" type="submit">Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let nameInput = document.getElementById("name")
    let urlInput = document.getElementById("url")
    nameInput.addEventListener("input", isValid)
    urlInput.addEventListener("input", isValid)

    function isValid() {
        let button = document.getElementById("btn-create");
        button.disabled = !(nameInput.value.length > 1 && urlInput.value.length > 8);
    }
</script>
</body>
</html>

