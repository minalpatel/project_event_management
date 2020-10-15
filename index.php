
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
require_once "Header.php";
?>

<div id="data" >
    <div>
        <img src="images/celebrate-clipart-social-event-14.jpg" class="mainimage">
    </div>
</div>

<div class="find text-center">
    <form>
        <label> I Want to go out </label>
        <select>
            <option value="any">Any Date</option>
            <option value="today">Today</option>
            <option value="tomorrow">Tomorrow</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>

        <label>In</label>
        <select name="provinces" id="provinces">
            <option value="AL">Alberta</option>
            <option value="BC">British Columbia</option>
            <option value="MT">Manitoba</option>
            <option value="NL">Newfoundland and Labrador</option>
            <option value="NB">New Brunswick</option>
            <option value="NS">Nova Scotia</option>
            <option value="ON">Ontario</option>
            <option value="PE">Prince Edward Island</option>
            <option value="OB">Quebec</option>
            <option value="SC">Saskatchewan</option>
        </select>

        <label>Content Type</label>
        <select name="content" id="contentType">
            <option value="Any">Anything</option>
            <option value="Business">Business</option>
            <option value="Science">Science</option>
            <option value="Music">Music</option>
            <option value="Health">Health</option>
            <option value="Community">Community</option>
            <option value="Holiday">Holiday</option>BC
            <option value="Other">Other</option>
        </select>

        <input type="submit" value="Search">
    </form>
</div>
<br>

<div class="padding" >
    <div class="data">
        <div class="row flex-row flex-nowrap ">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center ">
                <a href="">
                    <img src="images/BandaMS_EventImage.png" class="img-rounded" width="304" height="236"><br>
                    <span>Wed, Nov 27</span>
                    <b>In Flames</b>
                    <i>Phoenix Concert Theatre</i>
                </a>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/CannibalCorpse.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Fri, Nov 15</span>
                    <b>Cannibal Corpse</b>
                    <i>The Opera House</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/Food.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Wed, Nov 2</span>
                    <b>Toronto Vegan Christmas Market</b>
                    <i>8 Adelaide St E, Toronto, ON</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/zombie-party-dark-halloween-sign-abstract.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Thur, Oct 31</span>
                    <b>TORONTO HALLOWEEN FEST 2019</b>
                    <i>1653 Eglinton Ave W, York, ON</i>
                </a>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/musical%20events.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Sat, Dec 21</span>
                    <b>The Nutcracker 2019</b>
                    <i>Centennial Hall,London</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/Home%20Display.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Wed, Oct 30</span>
                    <b>Intel Experience Day</b>
                    <i>The Westin Harbour Castle</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/Networking%20Event%20(md-duran-unsplash).jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Fri, Nov 8</span>
                    <b>4th Annual CGLCC Black & White Goa</b>
                    <i>The Carlu, Toronto</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/seminar%20event%20(MD%20Duran%20Unspalsh.com).jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Tue, Nov 5</span>
                    <b>Tech Talent Toronto</b>
                    <i>Steam Whistle Brewing,London</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/Trade%20show%20Event%20(product-school-unsplash).jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Sat, Jan 25</span>
                    <b>Trade Show Event</b>
                    <i>Hilton Toronto</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/Conference%20event.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Fri, Nov 8</span>
                    <b>Women In Innovation Conference</b>
                    <i>George Vari Computer Center, Toronto</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/merry_christmas.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Wed, Dec 25</span>
                    <b>Christmas Gleaming Stamp a Stack</b>
                    <i>110 Church St, Markham, ON</i>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="">
                    <img src="images/NYE-2019-20-Web.jpg" class="img-rounded" width="304" height="236"><br>
                    <span>Tue, Dec 31</span>
                    <b>Stars - New Years Eve All Inclusive Toronto </b>
                    <i>Mirage Banquet & Convention Centre Toronto</i>
                </a>
            </div>

    </div>
</div>

<footer>
    <?php
        require_once "Footer.php";
    ?>

</footer>
</body>
</html>
