<?php
$link = mysqli_connect("localhost","root","Master1")  or die("failed to connect to server !!");
mysqli_select_db($link,"abpserviceform");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$servicetype=$_POST['servicetype'];
$eng1=$_POST['eng1'];
$date=$_POST['date'];
$eng2=$_POST['eng2'];
$eng3=$_POST['eng3'];
$eng4=$_POST['eng4'];
$eng5=$_POST['eng5'];
$AnnRiskNum=$_POST['AnnRiskNum'];
$haz1yes=$_POST['haz1yes'];
$haz1no=$_POST['haz1no'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `Service Type`.`Engineer 1`
(`firstname`, `lastname`, `gender`, `dob`, `address`,
`city`, `zipcode`, `region`, `phone`, `email`) VALUES ('$firstname', '$lastname', 
'$gender', '$dob', '$address', '$city', '$zipcode', '$region', '$phone', '$email')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
?>