<?php
?>
<html>

<head>
    <title>
        SignUp
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <!-- I have used bootstrap !-->
</head>
<body>
<header>
    <!--    used php call to insert header -->
    <?php
    require_once "Header.php";
    ?>
</header>
<main class="container-fluid text-center">
    <!--    Container class is used for Responsive and text-center is used for center alignment in center -->
    <!--this is the main body page of sign up -->
    <form class="signup">

        <img src="images/Logo.png" alt="Logo of Event board" class="img-fluid img-simple">
        <!--        Logo Print to the page-->
        <h1 class="h3 mb-3 font-weight-normal">Please Sign-Up</h1>
        <!--        Building Forms in the format of Table Using Bootstrap Classes-->
        <div class="form-row" name="row-1">
            <div class="form-group col-md-6">
                <label for="inputFirstName" class="sr-only">First Name</label>
                <input type="text" id="inputFirstName" class="form-control" placeholder="First Name"  autofocus="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName" class="sr-only">Last Name</label>
                <input type="text" id="inputLastName" class="form-control" placeholder="Last Name"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-2">
            <div class="form-group col-md-12">
                <label for="inputEmail" class="sr-only">E-mail</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-3">
            <div class="form-group col-md-6">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password"  autofocus="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCnfPassword" class="sr-only">Confirm Password</label>
                <input type="password" id="inputCnfPassword" class="form-control" placeholder="Confirm Password"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-4">
            <div class="form-group col-md-12">
                <label for="inputAdress" class="sr-only">Address</label>
                <input type="text" id="inputAddress" class="form-control" placeholder="Address"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-5">
            <div class="form-group col-md-6">
                <label for="inputCity" class="sr-only">City</label>
                <input type="text" id="inputCity" class="form-control" placeholder="City"  autofocus="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputProvince" class="sr-only">Province</label>
                <input type="password" id="inputProvince" class="form-control" placeholder="Province"  autofocus="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPostal" class="sr-only">Postal</label>
                <input type="text" id="inputPostal" class="form-control" placeholder="Postal"  autofocus="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCountry" class="sr-only">Country</label>
                <input type="text" id="inputCountry" class="form-control" placeholder="Country"  autofocus="">
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Register</button>
    </form>
</main>
<footer>
    <?php
    require_once "Footer.php";
    ?>
</footer>
</body>
</html>
