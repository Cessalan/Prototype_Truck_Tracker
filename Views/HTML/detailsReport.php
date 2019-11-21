<?php
require("DBManager_READ.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Details Report</title>
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
                        <td><a href="exceptionReport.php" style="color:white">See Exception Report</a></td>
                    </tr>

                    </thead>
                </table>
                <h1 align="center" style="color:white"> Details</h1>
                <div class="container">
                    <img src="Capture.jpg"  width="80" height="65" align="left">
                    This report shows all the details of each trip.
                    It has for goal to help you have a visual representation of all the trips and transactions done by the drivers.
                    Due to the amount of information provided, it is recommanded to print this report in landscape mode.

                </div>
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">Truck Number</th>
                        <th class="column1">Driver</th>
                        <th class="column1">Co Driver</th>
                        <th class="column1">Initial Location</th>
                        <th class="column1">Destination</th>
                        <th class="column1">Distance Driven(miles)</th>
                        <th class="column1">Gallons</th>
                        <th class="column1">Taxes</th>
                        <th class="column1">Receipt Number</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php echo getDetails(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





</body>
</html>