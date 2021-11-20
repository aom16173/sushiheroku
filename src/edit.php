<?php $id = $_GET['EMPNO']; ?>
<h1 align="center">Edit Employee</h1>
<form id="form1" name="form1" method="post" action="save.php">
<table align="center">
<tr>
<td>Empno</td>
<td>:</td>
<td><input type="hidden" name="EMPNO" value="<?php echo $id ?>" id="EMPNO"><?php echo $id ?></td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="ENAME" type="text" size="40" id="ENAME"></td>
</tr>
<tr>
<td>JOB</td>
<td>:</td>
<td><input name="JOB" type="text" size="40" id="JOB"></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td><input type="submit" name="Submit" value="Submit"></td>
<td><input type="reset" name="Submit2" value="reset"></td>
</tr>
</table>
</form>