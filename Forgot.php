<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<html>

<head>
    <title>
        Login
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<header>
    <?php
    require_once "Header.php";
    ?>
</header>
<main class="container-fluid text-center">
<br><br><br>
    <form class="form-signin" method="post" action="">
        <img src="images/Logo.png" alt="Logo of Event board" class="img-fluid img-simple">
        <h1 class="h3 mb-3 font-weight-normal">Reset Password</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus="">
        <br>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Reset Request</button>
    </form>
<br><br><br>
</main>
<footer>
    <?php
    require_once "Footer.php";
    ?>
</footer>
</body>
</html>
