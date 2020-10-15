<?php
if(isset($_POST["signup"]))
{
    header('Location: SignUp.php');
}
?>
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

    <form class="form-signin" method="post" action="">
        <img src="images/Logo.png" alt="Logo of Event board" class="img-fluid img-simple">
        <h1 class="h3 mb-3 font-weight-normal">Please Sign-in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" autofocus="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <h1 class="h5 mb-3 font-weight-normal"><a href="Forgot.php">Forgot Password?</a> </h1>
        <h1 class="h3 mb-3 font-weight-normal">Don't have an account?</h1>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Sign Up</button>
    </form>

</main>
<footer>
    <?php
    require_once "Footer.php";
    ?>
</footer>
</body>
</html>
