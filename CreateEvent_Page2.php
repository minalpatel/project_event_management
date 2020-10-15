
<html>
<head>
    <title>
        Event
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

    <p class="h1 mb-3 text-center page-header"><strong>Create Event</strong></p>
    <form class="form-signin page-content">
        <!--            <img src="images/Logo.png" alt="Logo of Event board" class="img-fluid img-simple">-->
        <fieldset>
            <legend>
                <h1 class="h1 mb-3 font-weight-normal"><i class="fa fa-location-arrow" style="font-size:36px;color:black;"></i>Location</h1>
            </legend>
        </fieldset>

        <div class="form-row" name="row-1">
            <div class="form-group col-md-15">
                <label for="inputAddress1" class="h4 form-control-label">Adress Line 1<span style="color:red;"> *</span> </label>
                <input type="text" id="inputAddress1" class="form-control" placeholder="Adress Line 1"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-2">
            <div class="form-group col-md-15">
                <label for="inputAddress2" class="h4 form-control-label">Adress Line 2</label>
                <input type="text" id="inputAddress2" class="form-control" placeholder="Adress Line 2"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-3">
            <div class="form-group col-md-15">
                <label for="inputCity" class="h4 form-control-label">City</label>
                <input type="text" id="inputCity" class="form-control" placeholder="City"  autofocus="">

            </div>
        </div>
        <div class="form-row" name="row-4">
            <div class="form-group col-md-15">
                <label for="inputProvince" class="h4 form-control-label">Province</label>
                <input type="text" id="inputProvince" class="form-control" placeholder="Province"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-5">
            <div class="form-group col-md-15">
                <label for="inputPostal" class="h4 form-control-label">Postal Code</label>
                <input type="text" id="inputPostal" class="form-control" placeholder="m9v2a1"  autofocus="">
            </div>
        </div>
        <div class="form-row" name="row-6">
            <div class="form-group col-md-15">
                <label for="inputCountry" class="h4 form-control-label">Country</label>
                <input type="text" id="inputCountry" class="form-control" placeholder="Country"  autofocus="">
            </div>
        </div>

        <fieldset>
            <legend>
                <h1 class="h1 mb-3 font-weight-normal"><i class='fa fa-calendar' style='font-size:30px;color: black;'></i>Date and Time</h1>
            </legend>
        </fieldset>
        <div class="form-row" name="row-7">
            <div class="form-group col-md-15">
                <label for="inputStartDate" class="h4 form-control-label">Date</label>
                <input type="date" id="inputDate" class="form-control"  autofocus="">
            </div>
<!--            <div class="form-group col-md-6">-->
<!--                <label for="inputDate" class="h4 form-control-label">Date</label>-->
<!--                <input type="date" id="inputDate" class="form-control"  autofocus="">-->
<!--            </div>-->
        </div>
        <div class="form-row" name="row-8">
            <div class="form-group col-md-6">
                <label for="inputStartTime" class="h4 form-control-label">Start Time</label>
                <input type="time" id="inputStartTime" class="form-control" placeholder="7:00"  autofocus="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEndTime" class="h4 form-control-label">End Time</label>
                <input type="time" id="inputEndTime" class="form-control" placeholder="11:00"  autofocus="">
            </div>
        </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Register</button>


    </form>
    <nav id="use">
        <ul class="pagination">
<!--            <li class="page-item"><a class ="page-link" href="CreateEvent_Page1.php"><</a></li>-->
            <li class="page-item "><a class ="page-link" href="CreateEvent_Page1.php">1</a></li>
            <li class="page-item active"><a class ="page-link" href="#">2</a></li>

        </ul>
    </nav>
</main>

</main>
<footer>
    <?php
    require_once "Footer.php";
    ?>
</footer>
</body>
</html>
