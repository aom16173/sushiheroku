<?php
// Connect to server and select database.
include("config.php");
$datetime=date("y-m-d h:i:s"); //date time

$sql="DELETE FROM guestbook";
$objQuery = mysqli_query($objCon,$sql);
//check if query successful
if($objQuery){
echo "Successful";
echo "<BR>";
// link to view guestbook page
echo "<a href='viewguestbook.php'>View guestbook</a>";
}
else {
echo "ERROR";
}
?>

