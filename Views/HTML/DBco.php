<?php
/**
 * Created by PhpStorm.
 * User: fatsy
 * Date: 2019-11-19
 * Time: 8:43 PM
 */
function connect(){
    $conn = new mysqli("127.0.0.1","root","","trucktracker");
    if($conn->error){
        echo $conn->error;
    }
    return $conn;
}
function getSelectBlock(){
    $conn=connect();
    //get truck numbers
    $sqlTruckList="Select * from trucktable";
    $truckListRes=$conn->query($sqlTruckList)or die("$conn->error");
    $select_block="<select tabindex='1' name='truck_number' required autofocus>";
    if($truckListRes->num_rows<1){
        echo "no result found";
    }else{
        while($rec=$truckListRes->fetch_array()){
            $select_block.="<option value='$rec[truckNumber]'>$rec[truckNumber]</option>";
        }
    }
    $select_block.="</select>";
    echo $select_block;

}
function getMostRecentTripId(){
    $conn=connect();
    $sqlMostRecentRow="Select * from tripinfo order by TripID DESC LIMIT 1";
    $recentRecord=$conn->query($sqlMostRecentRow)or die($conn->error);
    $latestTripId=0;
    if($recentRecord->num_rows<1){
        echo "none";
    }else{
        while($rec=$recentRecord->fetch_array()){
            $latestTripId=$rec['TripID'];
        }
    }
    return $latestTripId;
}
