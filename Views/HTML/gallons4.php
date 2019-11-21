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
    <title>Gallons Exception</title>
    <link rel="stylesheet" type="text/css" href="reportDesign.css">
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <div class="notprint">

                    <table>
                        <thead>
                        <tr class="table100-head">
                            <td><a href="formIndex.php" style="color:white">Go Back To Home page</a></td>
                            <td><a href="summaryReport.php" style="color:white">See Summary Report</a>
                            </td><td><a href="DetailsReport.php" style="color:white">See Details Report</a></td>
                            <td><a href="exceptionReport.php" style="color:white">Go Back To Options</a></td>
                        </tr>

                        </thead>
                    </table>
                </div>


                <h1 align="center" style="color:white"> Purchases with more than 4 gallons</h1>
                <div class="container">
                    <img src="Capture.jpg"  width="80" height="65" align="left">
                    This shows the trips that took more than 4 gallons to fuel.
                    This report will help you see drivers or trucks that have high consumptions.
                    It will allow you to find potential defects in trucks or help you judge if one needs to be replaced.
                    Moreover, the report gives you the possibility to help drivers who are not eco-friendly, and  need additional training.

                </div>
                <table id="printable">
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">Driver Number</th>
                        <th class="column1">Truck Number</th>
                        <th class="column1">Receipt Number</th>
                        <th class="column1">Gallons purchased</th>
                        <th class="column1">Station</th>



                    </tr>
                    </thead>
                    <tbody>
                    <?php echo getGallonsAbove4() ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>





</body>
</html>