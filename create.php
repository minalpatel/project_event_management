<?php

if(isset($_POST['addeve'])){
$title = $_POST['title'];
$type = $_POST['type'];
$name = $_POST['oname'];
$location = $_POST['location'];
$date = $_POST['edate'];
$time = $_POST['etime'];
$etype=$_POST['etype'];

$db = Database::getDb();
$sql = "INSERT INTO create_event (user_id,event_title,type,events,organiser_name,location,event_date,evemt_time,creation_date,event_type,published) VALUES ";
$pst = $db->prepare($sql);

$count = $pst->execute();

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .col-md-2{
            background-color: lightblue;
            height: 100vh;
            text-align: center;
            font-size: 3.5vh;
            border-right: grey 1px solid;
        }
        .links{
            color: white;
            text-decoration: none;
            display: block;
            padding: 2vh;
        }
        label{
            display: inline-block;
            float: left;
            clear: left;
            width: 100px;
            text-align: left;
            padding: 1vh;
        }
        input,select {
            display: inline-block;
            float: left;
        }
        h1{
            padding-bottom: 2vh;
        }
    </style>
</head>
<body>
      <div class="row">
          <div class="col-md-12" style='border-bottom: lightgrey 1px solid;'>
              <a class='navbar-brand' href='#'><img style='max-width:125px; margin-top: -2vh;' src='images/EventBoard.png' alt=''></a>
          </div>
      </div>
      <div class="row">
          <div class="col-md-2">
              <a href="create.php" class="links">CREATE EVENT</a>
              <a href="admininterface.php" class="links">ADMIN PANEL</a>
          </div>
          <div class="col-md-8">
              <h1>Create An Event</h1>
              <form method="post">
                  <label> User Id:</label> <input type="text" name="uid"><br>
                  <label> Title: </label> <input type="text" name="title"><br>
                  <label> Type: </label>
                  <select name="type">
                      <option value="seminar">Seminar</option>
                      <option value="conference">Conference</option>
                      <option value="concert">Concert</option>
                      <option value="workshop">Workshop</option>
                  </select><br>
                  <label> Oraganizer Name: </label> <input type="text" name="oname"><br>
                  <label> Location: </label> <input type="text" name="location"><br>
                  <label> Date: </label> <input type="date" name="edate"><br>
                  <label> Time: </label> <input type="time" name="etime"><br>
                  <label> Event Type: </label> <select name="etype">
                      <option value="free">Free</option>
                      <option value="paid">Paid</option>
                  </select>
                  <label> </label>
                  <input type="submit" name="addeve" value="Add Event">
              </form>
          </div>
      </div>
</body>