<?php
$conn = new mysqli("localhost","root","","trucktracker");
if($conn->error){
    echo $conn->error;
}



//get Trip Info
$location=$_GET["location"];
$destination=$_GET["destination"];
$distance=$_GET["distance"];
$departDate=$_GET["departDate"];
$returnDate=$_GET["returnDate"];
$stationName=$_GET["stationName"];
$drivenMiles=$_GET["drivenMiles"];

$sqlInsertTrip="INSERT INTO tripinfo(IntialLocation,Destination,DistinceKM)
                values($location,$destination,$distance)";
if($conn->query($sqlInsertTrip)===true){
    echo "new record inserted in tripinfo";
}else{
    echo $conn->error;
}

//get Driver info
$truck_number=$_GET["truck_number"];
$driverNum=$_GET["driverNum"];
$coDriverNum=$_GET["coDriverNum"];
$tripNum=$_GET["tripNum"];

$sqlInsertDriver="INSERT INTO driverinfo(TruckNumber,DriverNumber,CoDriverNumber,TripNumber)
                values($truck_number,$driverNum,$coDriverNum,$tripNum)";
if($conn->query($sqlInsertDriver)===true){
    echo "new record inserted in driverInfo";
}else{
    echo $conn->error;
}


//get Expenses Info
$receiptNum=$_GET["facture"];
$gallon=$_GET["gallon"];
$weight=$_GET["weight"];
$tax=$_GET["tax"];

$sqlInsertExpenses="INSERT INTO expenses (FuelReceipt,Gallons,Tax,TripId)
values($receiptNum,$gallon,$weight,$tax)";
if($conn->query($sqlInsertExpenses)===true){
    echo "new record inserted in expenses";
}else{
    echo $conn->error;
}

?>






