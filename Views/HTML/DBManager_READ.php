<?php
/**
 * Created by PhpStorm.
 * User: fatsy
 * Date: 2019-11-19
 * Time: 10:45 PM
 */require("DBco.php");


     function getDetails(){
         $conn=connect();

         $sqlGetAll="SELECT d.TruckNumber,d.DriverNumber,d.CoDriverNumber,
                  e.Tax,e.FuelReceipt,e.Gallons,t.milesDriven,t.Destination,t.IntialLocation
                   FROM   driverinfo d, expenses e, tripinfo t     
                     WHERE d.TripID=t.TripID and t.TripID=e.TripID";
         $tableRow="";

         $results=$conn->query($sqlGetAll)or die($conn->error);
         if($results->num_rows<1){
             $tableRow="<tr><td><h1>No Data has been entered yet, please come back later.</h1><td></td></tr>";
         }else{

             while($rec=$results->fetch_array()){
                 $tableRow.="<tr>";
                 $tableRow.=" <td class=\"column1\">".$rec['TruckNumber']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['DriverNumber']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['CoDriverNumber']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['IntialLocation']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['Destination']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['milesDriven']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['Gallons']."</td>";
                 $tableRow.=" <td class=\"column1\">$".$rec['Tax']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['FuelReceipt']."</td>";
                 $tableRow."</tr>";
             }


         }

            return $tableRow;

     }
     function getSummary(){
        $conn=connect();
        $sqlgetAvg="Select AVG(e.Tax) as TaxAVG ,AVG(e.Gallons) as GallonAVG,AVG(t.milesDriven) as MilesAVG
                    from expenses e,tripinfo t";
        $result=$conn->query($sqlgetAvg) or die($conn->error);
        $tableRow="";
        if($result->num_rows<1){
        $tableRow="<tr><td><h1>We are sorry, no date can be found.</h1><td></td></tr>";
        }else{
            while($rec=$result->fetch_array()){
                $tableRow.="<tr>";
                $tableRow.=" <td class='column1'>".number_format($rec['TaxAVG'],2)."</td>";
                $tableRow.=" <td class='column1'>".number_format($rec['GallonAVG'],2)."</td>";
                $tableRow.=" <td class='column1'>".number_format($rec['MilesAVG'],2)."</td>";
                $tableRow.="</tr>";

            }

        }


        return $tableRow;
     }
     function getTripsAbove500(){
         $conn=connect();

         $sqlGetTrip= "SELECT d.TruckNumber,d.DriverNumber,t.milesDriven,t.Destination,t.IntialLocation
                        FROM   driverinfo d, tripinfo t     
                        WHERE d.TripID=t.TripID AND (t.milesDriven > 500)";

         $result=$conn->query($sqlGetTrip)or die($conn->error);
         $tableRow="";
         if($result->num_rows<1){
          $tableRow="<tr><td><h1>No Trips above 500 miles found.</h1><td></td></tr>";
         }else{
             while($rec=$result->fetch_array()){
                 $tableRow.="<tr>";
                 $tableRow.=" <td class=\"column1\">".$rec['DriverNumber']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['TruckNumber']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['IntialLocation']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['Destination']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['milesDriven']."</td>";
                 $tableRow.="</tr>";
             }
         }
         return $tableRow;

     }
     function getGallonsAbove4(){
         $conn=connect();
         $sqlGallons4="SELECT d.TruckNumber,d.DriverNumber,
                      e.FuelReceipt,e.Gallons,t.Station
                   FROM   driverinfo d, expenses e, tripinfo t     
                     WHERE d.TripID=t.TripID and t.TripID=e.TripID and (e.Gallons > 4)";
         $result=$conn->query($sqlGallons4) or die ($conn->error);
         $tableRow="";
         if($result->num_rows<1){
             $tableRow= $tableRow="<tr><td><h1>No purchase of Gallons above 4 found.</h1><td></td></tr>";;

         }else{
             while($rec=$result->fetch_array()){
                 $tableRow.="<tr>";
                 $tableRow.=" <td class=\"column1\">".$rec['DriverNumber']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['TruckNumber']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['FuelReceipt']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['Gallons']."</td>";
                 $tableRow.=" <td class=\"column1\">".$rec['Station']."</td>";
                 $tableRow."</tr>";
             }
         }
            return $tableRow;
     }
     function getTaxBelow100(){
        $conn=connect();
        $sqlGetTax="SELECT d.TruckNumber,d.DriverNumber,
                             e.FuelReceipt,e.Tax,t.Station,t.State
                    FROM   driverinfo d, expenses e, tripinfo t 
                     WHERE d.TripID=t.TripID and t.TripID=e.TripID and (e.Tax <100)";
        $result=$conn->query($sqlGetTax) or die($conn->error);
        $tableRow="";
        if($result->num_rows<1){
            $tableRow="<tr><td><h1>No purchase with Tax under $100 USD found.</h1><td></td></tr>";
        }else{
            while($rec=$result->fetch_array()){
                $tableRow.="<tr>";
                $tableRow.=" <td class=\"column1\">".$rec['DriverNumber']."</td>";
                $tableRow.=" <td class=\"column1\">".$rec['TruckNumber']."</td>";
                $tableRow.=" <td class=\"column1\">".$rec['FuelReceipt']."</td>";
                $tableRow.=" <td class=\"column1\">".$rec['Tax']."</td>";
                $tableRow.=" <td class=\"column1\">".$rec['State']."</td>";
                $tableRow.="</tr>";

            }
        }
       return $tableRow;

     }

