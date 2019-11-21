<?php
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
    <title>Summary Report</title>
    <link rel="stylesheet" type="text/css" href="reportDesign.css">
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <thead class="notprint">
                    <tr class="table100-head">
                        <td><a href="formIndex.php" style="color:white">Go Back To Home page</a></td>
                        <td><a href="summaryReport.php" style="color:white">See Summary Report</a>
                        </td><td><a href="DetailsReport.php" style="color:white">See Details Report</a></td>
                        <td><a href="exceptionReport.php" style="color:white">See Exception Report</a></td>
                    </tr>

                    </thead>
                </table>
                <h1 align="center" style="color:white"> Summary Report</h1>
                <div class="container">
                    <img src="Capture.jpg"  width="80" height="45" align="left">
                    This report contains averages.
                    It is used to have accurate estimations, and can help you make sound business decisions.
                     </div>
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">Tax Average($ USD)</th>
                        <th class="column1">Average of Gallon Purchased</th>
                        <th class="column1">Average Distance Driven</th>



                    </tr>
                    </thead>
                    <tbody>
                        <?php echo getSummary(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





</body>
</html>