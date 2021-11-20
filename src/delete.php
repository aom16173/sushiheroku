<?php
include("config.php");
$id = $_GET['EMPNO'];

$sql="DELETE FROM  emp_table_data WHERE EMPNO = $id";
$objQuery = mysqli_query($objCon,$sql);

if($objQuery){
    echo "Successful";
    echo "<BR>";
    echo "<a href='listemp.php'>View Employee</a>";
}
else{
    echo "ERROR";
}
?>

