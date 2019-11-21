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
    <title>Tax Excpetion</title>
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

                <h1 align="center" style="color:white"> Taxe(s) below 100</h1>

                <div class="container">
                    <img src="Capture.jpg"  width="80" height="65" align="left">
                    This report shows taxes below $100.
                    It will help you and your driver use fuel money smartly.
                    This has for goal to show you a pattern, and find locations where you pay less taxes.
                    You can then have strategic locations to fuel your truck ,in order to save money.
                </div>
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">Driver Number</th>
                        <th class="column1">Truck Number</th>
                        <th class="column1">Receipt</th>
                        <th class="column1">Tax</th>
                        <th class="column1">Station</th>
                        <th class="column1">Staten</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    echo getTaxBelow100();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





</body>
</html>