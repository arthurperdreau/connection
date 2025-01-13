
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<?php
if(!empty($_GET["messageS"])){ ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= $_GET["messageS"] ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>


<div class="container">

    <form action="verificationSignUp.php" method="post" class="form form-control">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="userName" type="text" class="form-control" placeholder="username">
        </div>




        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Create</button>
        </div>


    </form>

</div>
