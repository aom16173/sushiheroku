<?php
include("config.php");

$sql="INSERT INTO emp_table_data(EMPNO,ENAME,JOB,MGR,HIREDATE,SAL,COMM,DEPTNO)VALUE('".$_POST["EMPNO"]."','".$_POST["ENAME"]."','".$_POST["JOB"]."','".$_POST["MGR"]."','".$_POST["HIREDATE"]."','".$_POST["SAL"]."','".$_POST["COMM"]."','".$_POST["DEPTNO"]."')";
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

