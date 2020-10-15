<?php
require_once 'database.php';

function createEvent()
{
    $db = Database::getDb();
    $sql = "select * from create_event";
    $pdostm = $db->prepare($sql);
    $pdostm->setFetchMode(PDO::FETCH_OBJ);
    $pdostm->execute();

    foreach ($pdostm as $events) {
        if($events->published==0)
            $pub='No';
        else
            $pub='Yes';

        echo "<tr>";
        echo "<td>".$events->id."</td><td><input type='checkbox'></td><td>".$events->event_title."</td><td>".$events->event_date."</td><td>".$events->event_time."</td><td>".$pub."<input type='button' value='publish'> </td><td><a href='update.php/?uid=".$events->id."'>Modify</a></td>";
        echo "</tr>";
    }
}
?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

        <style>
            .col-md-2 {
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
            table{
                background-color: lightgrey;
                border: grey 1px solid;
            }
            th,td{
                text-align: center;
                padding-right: 15vh;
                padding-bottom: 5vh;
                border-bottom: grey 1px solid;
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
            <div class="row">
                <div class="col-md-12">
                <h1>Event List</h1><br>
                <table><th>#</th><th><input type="checkbox" id="checkall"></th><th>Title</th><th>Date</th><th>Time</th><th>Published</th><th></th>
                    <?php
                    createEvent();
                    ?>
                </table>
            </div>
            </div>
    </div>
    </body>



