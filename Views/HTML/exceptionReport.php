<?php
/**
 * Created by PhpStorm.
 * User: fatsy
 * Date: 2019-11-20
 * Time: 6:41 PM
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
    <title>Exception Report</title>
<style>


    /*//////////////////////////////////////////////////////////////////
    [ FONT ]*/


    @font-face {
        font-family: OpenSans-Regular;

    }



    /*//////////////////////////////////////////////////////////////////
    [ RESTYLE TAG ]*/
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body, html {
        height: 100%;
        font-family: sans-serif;
    }

    /* ------------------------------------ */
    a {
        margin: 0px;
        transition: all 0.4s;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
    }

    a:focus {
        outline: none !important;
    }

    a:hover {
        text-decoration: none;
    }

    /* ------------------------------------ */
    h1,h2,h3,h4,h5,h6 {margin: 0px;}

    p {margin: 0px;}

    ul, li {
        margin: 0px;
        list-style-type: none;
    }


    /* ------------------------------------ */
    input {
        display: block;
        outline: none;
        border: none !important;
    }

    textarea {
        display: block;
        outline: none;
    }

    textarea:focus, input:focus {
        border-color: transparent !important;
    }

    /* ------------------------------------ */
    button {
        outline: none !important;
        border: none;
        background: transparent;
    }

    button:hover {
        cursor: pointer;
    }

    iframe {
        border: none !important;
    }

    .limiter {
        width: 100%;
        margin: 0 auto;
    }

    .container-table100 {
        width: 100%;
        min-height: 100vh;
        background: #4CAF50;
        /*background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);*/
        /*background: -o-linear-gradient(45deg, #4158d0, #c850c0);*/
        /*background: -moz-linear-gradient(45deg, #4158d0, #c850c0);*/
        /*background: linear-gradient(45deg, #4158d0, #c850c0);*/

        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        padding: 33px 30px;
    }

    .wrap-table100 {
        width: 1170px;
    }

    table {
        border-spacing: 1px;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }
    table * {
        position: relative;
    }
    table td, table th {
        padding-left: 8px;
    }
    table thead tr {
        height: 60px;
        background: #36304a;
    }
    table tbody tr {
        height: 50px;
    }
    table tbody tr:last-child {
        border: 0;
    }
    table td, table th {
        text-align: left;
    }
    table td.l, table th.l {
        text-align: right;
    }
    table td.c, table th.c {
        text-align: center;
    }
    table td.r, table th.r {
        text-align: center;
    }


    .table100-head th{
        font-family: OpenSans-Regular;
        font-size: 18px;
        color: #fff;
        line-height: 1.2;
        font-weight: unset;
    }

    tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    tbody tr {
        font-family: OpenSans-Regular;
        font-size: 15px;
        color: #808080;
        line-height: 1.2;
        font-weight: unset;
    }

    tbody tr:hover {
        color: #555555;
        background-color: #f5f5f5;
        cursor: pointer;
    }

    .column1 {
        width: 260px;
        padding-left: 40px;
    }

    .column2 {
        width: 160px;
    }

    .column3 {
        width: 245px;
    }

    .column4 {
        width: 110px;
        text-align: right;
    }

    .column5 {
        width: 170px;
        text-align: right;
    }

    .column6 {
        width: 222px;
        text-align: right;
        padding-right: 62px;
    }


    @media screen and (max-width: 992px) {
        table {
            display: block;
        }
        table > *, table tr, table td, table th {
            display: block;
        }
        table thead {
            display: none;
        }
        table tbody tr {
            height: auto;
            padding: 37px 0;
        }
        table tbody tr td {
            padding-left: 40% !important;
            margin-bottom: 24px;
        }
        table tbody tr td:last-child {
            margin-bottom: 0;
        }
        table tbody tr td:before {
            font-family: OpenSans-Regular;
            font-size: 14px;
            color: #999999;
            line-height: 1.2;
            font-weight: unset;
            position: absolute;
            width: 40%;
            left: 30px;
            top: 0;
        }
        table tbody tr td:nth-child(1):before {
            content: "Date";
        }
        table tbody tr td:nth-child(2):before {
            content: "Order ID";
        }
        table tbody tr td:nth-child(3):before {
            content: "Name";
        }
        table tbody tr td:nth-child(4):before {
            content: "Price";
        }
        table tbody tr td:nth-child(5):before {
            content: "Quantity";
        }
        table tbody tr td:nth-child(6):before {
            content: "Total";
        }

        .column4,
        .column5,
        .column6 {
            text-align: left;
        }

        .column4,
        .column5,
        .column6,
        .column1,
        .column2,
        .column3 {
            width: 100%;
        }

        tbody tr {
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .container-table100 {
            padding-left: 15px;
            padding-right: 15px;
        }
    }


    .dropbtn {
        background-color: #cccccc;
        color: white;
        padding: 16px;
        font-size: 26px;
        border: solid;
        cursor: pointer;
        border-radius: 12px;

    }

    .dropdown {

        display: inline-block;
        position: center;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #36304a;
    }
</style>
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <thead>
                    <tr class="table100-head">
                        <td><a href="formIndex.php" style="color:white">Go Back To Home page</a></td>
                        <td><a href="summaryReport.php" style="color:white">See Summary Report</a>
                        </td><td><a href="DetailsReport.php" style="color:white">See Details Report</a></td>
                        <td><a href="exceptionReport.php" style="color:white">See Exception Report</a></td>
                    </tr>

                    </thead>
                </table>
                <h1 align="center" style="color:white"> Exception Report</h1>

                <div class="dropdown">
                    <button class="dropbtn">Select an Option</button>
                    <div class="dropdown-content">
                        <a href="trips500.php">Trips(s) with milage above 500</a>
                        <a href="gallons4.php">Purchases of Gallons above 4</a>
                        <a href="tax100.php">Taxes below $100</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>