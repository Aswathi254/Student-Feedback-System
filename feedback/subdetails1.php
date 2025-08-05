<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="268" height="127">&nbsp;</td>
    <td width="574" valign="top"><div align="center">
      <p><strong>SUBJECT DETAILS </strong></p>
        </div>      <form id="form1" name="form1" method="post" action="subdetails2.php">
		<?php
		$s1=$_POST["c1"];
		include("connection.php");
		$s=mysql_query("select * from course where COURSENAME='$s1'");
		$nsem=0;
		if($row=mysql_fetch_array($s))
		{
		$nsem=$row[1];
		}
		?>
        <table width="440" height="229" border="1" align="center">
          
          <tr>
            <td width="198" height="42">Course Name </td>
            <td width="226"><label><?php echo $s1; echo "<input type='hidden' name='c1' value='$s1'>";?></label></td>
          </tr>
          
          <tr>
            <td height="42">Subject Name </td>
			
            <td><label>
              <input name="t2" type="text" id="t2" />
            </label></td>
          </tr>
          <tr>
            <td height="42">Sem</td>
            <td><label>
              <select name="t3" id="t3">
			  <?php
			  for($i=1;$i<=$nsem;$i++)
			    echo "<option>$i</option>";
			  ?>
              </select>
            </label></td>
          </tr>
          
          <tr>
            <td height="42">Faculty ID </td>
            <td><label>
              <select name="t4" id="t4">  <?php
			include("connection.php");
			$s=mysql_query("select*from facultyreg");
			while($row=mysql_fetch_array($s))
			{
			echo"<option>$row[0]</option>";
			}
			?>
              </select></label></td>
			 
          </tr>
          <tr>
            <td height="47" colspan="2"><label>
              <div align="center">
                <input type="submit" name="Submit" value="Submit" />
                <input type="reset" name="Submit2" value="Reset" />
                </div>
            </label></td>
          </tr>
        </table>
        </form></td>
    <td width="396">&nbsp;</td>
  </tr>
  <tr>
    <td height="231">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
