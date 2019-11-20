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
             $tableRow= "We are sorry,there is currently no date to produce a report, please come back later";
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
        $tableRow="We are sorry, data for the summary report is presently unavailable.Please come back later";
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

