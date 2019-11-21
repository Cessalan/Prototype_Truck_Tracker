<?php
/**
 * Created by PhpStorm.
 * User: fatsy
 * Date: 2019-11-20
 * Time: 7:41 PM
 */

/**
 * Created by PhpStorm.
 * User: fatsy
 * Date: 2019-11-19
 * Time: 11:33 PM
 */

require("DBManager_READ.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trip Exception</title>
    <link rel="stylesheet" type="text/css" href="reportDesign.css">
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table class="notprint">
                    <thead>
                    <tr class="table100-head">
                        <td><a href="formIndex.php" style="color:white">Go Back To Home page</a></td>
                        <td><a href="summaryReport.php" style="color:white">See Summary Report</a>
                        </td><td><a href="DetailsReport.php" style="color:white">See Details Report</a></td>
                        <td><a href="exceptionReport.php" style="color:white">Go Back To Options</a></td>
                    </tr>

                    </thead>
                </table>
                <h1 align="center" style="color:white"> Trips less than 500 miles</h1>
                <div class="container">
                    <img src="Capture.jpg"  width="80" height="45" align="left">
                    This shows the trips where the driver drove less than 500 miles.
                    This can show who is the most effective driver or help you find potential routes in the future, and save money.
                </div>
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">Driver Number</th>
                        <th class="column1">Truck Number</th>
                        <th class="column1">Initial Location</th>
                        <th class="column1">Destination</th>
                        <th class="column1">Distance Driven (miles)</th>



                    </tr>
                    </thead>
                    <tbody>
                        <?php echo getTripsLess500(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





</body>
</html>