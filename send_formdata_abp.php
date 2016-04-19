<?php
$link = mysqli_connect("localhost","root","Master1")  or die("failed to connect to server !!");
mysqli_select_db($link,"abp_service_form");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$servicetype=$_POST['servicetype'];
$sjn=$_POST['sjn'];
$eng1=$_POST['eng1'];
$date=$_POST['date'];
$eng2=$_POST['eng2'];
$eng3=$_POST['eng3'];
$eng4=$_POST['eng4'];
$eng5=$_POST['eng5'];
$AnnRiskNum=$_POST['AnnRiskNum'];
$haz1yes=$_POST['haz1yes'];
$haz1no=$_POST['haz1no'];
$haz2yes=$_POST['haz2yes'];
$haz2no=$_POST['haz2no'];
$haz2na=$_POST['haz2na'];
$haz3yes=$_POST['haz3yes'];
$haz3no=$_POST['haz3no'];
$haz4yes=$_POST['haz4yes'];
$haz4no=$_POST['haz4no'];
$haz5yes=$_POST['haz5yes'];
$haz5no=$_POST['haz5no'];
$haz6yes=$_POST['haz6yes'];
$haz6no=$_POST['haz6no'];
$haz7yes=$_POST['haz7yes'];
$haz7no=$_POST['haz7no'];
$haz8yes=$_POST['haz8yes'];
$haz8no=$_POST['haz8no'];
$haz9yes=$_POST['haz9yes'];
$haz9no=$_POST['haz9no'];
$haz10yes=$_POST['haz10yes'];
$haz10no=$_POST['haz10no'];
$haz11yes=$_POST['haz11yes'];
$haz11no=$_POST['haz11no'];
$haz12yes=$_POST['haz12yes'];
$haz12no=$_POST['haz12no'];
$haz13yes=$_POST['haz13yes'];
$haz13no=$_POST['haz13no'];
$haz14yes=$_POST['haz14yes'];
$haz14no=$_POST['haz14no'];
$hazRisk1=$_POST['hazRisk1'];
$hazRisk2=$_POST['hazRisk2'];
$hazRisk3=$_POST['hazRisk3'];
$hazRisk4=$_POST['hazRisk4'];
$hazRisk5=$_POST['hazRisk5'];
$hazRisk6=$_POST['hazRisk6'];
$WorksCarriedOut=$_POST['WorksCarriedOut'];
$PartsUsed=$_POST['PartsUsed'];
$Defects=$_POST['Defects'];
$Ordered=$_POST['Ordered'];
$Required=$_POST['Required'];
$time=$_POST['time'];
$datereadings=$_POST['datereadings'];
$EngineHours=$_POST['EngineHours'];
$M1Export=$_POST['M1Export'];
$M2Import=$_POST['M2Import'];
$M3Steam=$_POST['M3Steam'];
$M4UCOtoEng=$_POST['M4UCOtoEng'];
$M5Blended=$_POST['M5Blended'];
$M6HTTotal=$_POST['M6HTTotal'];
$M7HTWater=$_POST['M7HTWater'];
$M8LTTotal=$_POST['M8LTTotal'];
$M9LTWater=$_POST['M9LTWater'];
$M10T1toT2=$_POST['M10T1toT2'];
$M11T2toBlended=$_POST['M11T2toBlended'];
$M12UCOtoBlended=$_POST['M12UCOtoBlended'];
$M13BlendedtoBulk=$_POST['M13BlendedtoBulk'];
$M14UCOtoDAY=$_POST['M14UCOtoDAY'];
$NOxLevel=$_POST['NOxLevel'];
$UreaRate=$_POST['UreaRate'];
$T1Tank=$_POST['T1Tank'];
$T2Tank=$_POST['T2Tank'];
$UCOTank=$_POST['UCOTank'];
$BlendedBulkTank=$_POST['BlendedBulkTank'];
$CleanLubeOil=$_POST['CleanLubeOil'];
$BulkSludgeTank=$_POST['BulkSludgeTank'];
$UreaTank=$_POST['UreaTank'];
$OilSample=$_POST['OilSample'];
$WaterSample=$_POST['WaterSample'];
$FuelSample=$_POST['FuelSample'];
$FuelSampleMarkedAs=$_POST['FuelSampleMarkedAs'];
$FluidComments=$_POST['FluidComments'];
$SpillKitFullEng=$_POST['SpillKitFullEng'];
$SpillKitFullPrep=$_POST['SpillKitFullPrep'];
$EngineFireExtinguishers=$_POST['EngineFireExtinguishers'];
$PrepFireExtinguishers=$_POST['PrepFireExtinguishers'];
$MONTT=$_POST['MONTT'];
$TUESTT=$_POST['TUESTT'];
$WEDSTT=$_POST['WEDSTT'];
$THURTT=$_POST['THURTT'];
$FRITT=$_POST['FRITT'];
$SATTT=$_POST['SATTT'];
$SUNTT=$_POST['SUNTT'];
$MONHrs=$_POST['MONHrs'];
$TUESHrs=$_POST['TUESHrs'];
$WEDSHrs=$_POST['WEDSHrs'];
$THURHrs=$_POST['THURHrs'];
$FRIHrs=$_POST['FRIHrs'];
$SATHrs=$_POST['SATHrs'];
$SUNHrs=$_POST['SUNHrs'];
$MONTotalHrs=$_POST['MONTotalHrs'];
$TUESTotalHrs=$_POST['TUESTotalHrs'];
$WEDSTotalHrs=$_POST['WEDSTotalHrs'];
$THURTotalHrs=$_POST['THURTotalHrs'];
$FRITotalHrs=$_POST['FRITotalHrs'];
$SATTotalHrs=$_POST['SATTotalHrs'];
$SUNTotalHrs=$_POST['SUNTotalHrs'];
$MONMileage=$_POST['MONMileage'];
$TUESMileage=$_POST['TUESMileage'];
$WEDSMileage=$_POST['WEDSMileage'];
$THURMileage=$_POST['THURMileage'];
$FRIMileage=$_POST['FRIMileage'];
$SATMileage=$_POST['SATMileage'];
$SUNMileage=$_POST['SUNMileage'];

// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `abp_service_form`.`abp_service`(`servicetype`, `sjn`, `eng1`, `date`, `eng2`, `eng3`, `eng4`, `eng5`, `AnnRiskNum`, `haz1yes`, `haz1no`, `haz2yes`, `haz2no`, `haz2na`, `haz2num`, `haz3yes`, `haz3no`, `haz4yes`, `haz4no`, `haz5yes`, `haz5no`, `haz6yes`, `haz6no`, `haz7yes`, `haz7no`, `haz8yes`, `haz8no`, `haz9yes`, `haz9no`, `haz10yes`, `haz10no`, `haz11yes`, `haz11no`, `haz12yes`, `haz12no`, `haz13yes`, `haz13no`, `haz14yes`, `haz14no`, `hazRisk1`, `hazRisk2`, `hazRisk3`, `hazRisk4`, `hazRisk5`, `hazRisk6`, `WorksCarriedOut`, `PartsUsed`, `Defects`, `Ordered`, `Required`, `time`, `datereadings`, `EngineHours`, `M1Export`, `M2Import`, `M3Steam`, `M4UCOtoEng`, `M5Blended`, `M6HTTotal`, `M7HTWater`, `M8LTTotal`, `M9LTWater`, `M10T1toT2`, `M11T2toBlended`, `M12UCOtoBlended`, `M13BlendedtoBulk`, `M14UCOtoDAY`, `NOxLevel`, `UreaRate`, `T1Tank`, `T2Tank`, `UCOTank`, `BlendedBulkTank`, `UCODayTank`, `BlendedDayTank`, `CleanLubeOil`, `BulkSludgeTank`, `UreaTank`, `OilSample`, `WaterSample`, `FuelSample`, `FuelSampleMarkedAs`, `FluidComments`, `SpillKitFullEng`, `SpillKitFullPrep`, `EngineFireExtinguishers`, `PrepFireExtinguishers`, `MONTT`, `TUESTT`, `WEDSTT`, `THURTT`, `FRITT`, `SATTT`, `SUNTT`, `MONHrs`, `TUESHrs`, `WEDSHrs`, `THURHrs`, `FRIHrs`, `SATHrs`, `SUNHrs`, `MONTotalHrs`, `TUESTotalHrs`, `WEDSTotalHrs`, `THURTotalHrs`, `FRITotalHrs`, `SATTotalHrs`, `SUNTotalHrs`, `MONMileage`, `TUESMileage`, `WEDSMileage`, `THURMileage`, `FRIMileage`, `SATMileage`, `SUNMileage`) VALUES ('$servicetype', '$sjn', '$eng1', '$date', '$eng2', '$eng3', '$eng4', '$eng5', '$AnnRiskNum', '$haz1yes', '$haz1no', '$haz2yes', '$haz2no', '$haz2na', '$haz2num', '$haz3yes', '$haz3no', '$haz4yes', '$haz4no', '$haz5yes', '$haz5no', '$haz6yes', '$haz6no', '$haz7yes', '$haz7no', '$haz8yes', '$haz8no', '$haz9yes', '$haz9no', '$haz10yes', '$haz10no', '$haz11yes', '$haz11no', '$haz12yes', '$haz12no', '$haz13yes', '$haz13no', '$haz14yes', '$haz14no', '$hazRisk1', '$hazRisk2', '$hazRisk3', '$hazRisk4', '$hazRisk5', '$hazRisk6', '$WorksCarriedOut', '$PartsUsed', '$Defects', '$Ordered', '$Required', '$time', '$datereadings', '$EngineHours', '$M1Export', '$M2Import', '$M3Steam', '$M4UCOtoEng', '$M5Blended', '$M6HTTotal', '$M7HTWater', '$M8LTTotal', '$M9LTWater', '$M10T1toT2', '$M11T2toBlended', '$M12UCOtoBlended', '$M13BlendedtoBulk', '$M14UCOtoDAY', '$NOxLevel', '$UreaRate', '$T1Tank', '$T2Tank', '$UCOTank', '$BlendedBulkTank', '$UCODayTank', '$BlendedDayTank', '$CleanLubeOil', '$BulkSludgeTank', '$UreaTank', '$OilSample', '$WaterSample', '$FuelSample', '$FuelSampleMarkedAs', '$FluidComments', '$SpillKitFullEng', '$SpillKitFullPrep', '$EngineFireExtinguishers', '$PrepFireExtinguishers', '$MONTT', '$TUESTT', '$WEDSTT', '$THURTT', '$FRITT', '$SATTT', '$SUNTT', '$MONHrs', '$TUESHrs', '$WEDSHrs', '$THURHrs', '$FRIHrs', '$SATHrs', '$SUNHrs', '$MONTotalHrs', '$TUESTotalHrs', '$WEDSTotalHrs', '$THURTotalHrs', '$FRITotalHrs', '$SATTotalHrs', '$SUNTotalHrs', '$MONMileage', '$TUESMileage', '$WEDSMileage', '$THURMileage', '$FRIMileage', '$SATMileage', '$SUNMileage')";
mysqli_query($link, $insqDbtb) or die(mysqli_error($link));
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge; IE=9; IE=8; IE=7">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/abp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
<body>

<div class="container" style="margin-top:30px" align="center">
	<br>
		<h4>Your form has submitted successfully, please press the below button to return to the main form</h4>

		<div style="text-align: center;">
	        <a class="btn btn-primary" href="./form.html" role="button">Return</a>
	    </div>
    <br>
</div>
</body>


<footer style="padding: 10px 20px 10px 20px">
<div class="pull-xs-left">
    <ul class="list-inline" style="display: inline-block;">
    <li class="list-inline-item"><a href="https://www.fleetsolve.co.uk"><img src="./img/FLT2.png" alt="fleetsolve" data-pin-nopin="true"></a></li>
    <li class="list-inline-item"><p style="text-align: center;">© <script>document.write(new Date().getFullYear());</script></p></li>
    </ul>  
</div>
<div class="pull-xs-right">
    <ul class="list-inline" style="display: inline-block;">
    <li class="list-inline-item"><p style="color:black">Form Built by Steve Gault <script>document.write(new Date().getFullYear());</script></p></li>
    </ul>
</div>  

</footer>



    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script src="./js/abpjs.js"></script>
    
</html>                    