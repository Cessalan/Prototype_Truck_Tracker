<html>
<head>
    <link rel="stylesheet" type="text/css" href="reportDesign.css">
</head>
<?php
require("DBco.php");

$conn=connect();



//get Trip Info
$location=$_GET["location"];
$destination=$_GET["destination"];
$distance=$_GET["distance"];
$rawDDate=$_GET['departDate'];
$departDate=date('Y-m-d', strtotime($rawDDate));
$returnDate=date('Y-m-d', strtotime($_GET['returnDate']));
$stationName=$_GET["stationName"];
$drivenMiles=$_GET["drivenMiles"];
$state=$_GET["state"];


$sqlInsertTrip="INSERT INTO tripinfo
(IntialLocation,Destination,DistanceKM,departDate,ArrivalDate,Station,State,milesDriven)
values('$location','$destination',$distance,'$departDate','$returnDate','$stationName','$state',$drivenMiles)";
if($conn->query($sqlInsertTrip)===true){
    echo "<div class='container'> <h2>New Entry has Been Successful</h2>Trip information have been addeed<br>";
}else{
    echo $conn->error;
}


$latestTripId=getMostRecentTripId();
//echo $latestTripId;

//get Driver info
$truck_number=$_GET["truck_number"];
$driverNum=$_GET["driverNum"];
$coDriverNum=$_GET["coDriverNum"];
$tripNum=$_GET["tripNum"];

//echo $truck_number;

$sqlInsertDriver="INSERT INTO driverinfo(TripID,TruckNumber,DriverNumber,CoDriverNumber,TripNumber)
                values($latestTripId,'$truck_number',$driverNum,$coDriverNum,$tripNum)";
if($conn->query($sqlInsertDriver)===true){
    echo "Driver information have been added<br>";
}else{
    echo $conn->error;
}


//get Expenses Info
$receiptNum=$_GET["facture"];
$gallon=$_GET["gallon"];
$weight=$_GET["weight"];
$tax=$_GET["tax"];

$sqlInsertExpenses="INSERT INTO expenses (FuelReceipt,Gallons,Tax,TripId)
values($receiptNum,$gallon,$tax,$latestTripId)";
if($conn->query($sqlInsertExpenses)===true){
    echo "Expenses information have been added<br><p ><b>Thank you.<b></b><p></p><br><a href='formIndex.php'>Go Back To Home Page</a></div></div>";
}else{
    echo $conn->error;
}

?>

</html>







