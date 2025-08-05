<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="980" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="269" height="23">&nbsp;</td>
    <td width="441">&nbsp;</td>
    <td width="270">&nbsp;</td>
  </tr>
  <tr>
    <td height="294"></td>
    <td valign="top"><form id="form1" name="form1" method="post" action="freg2.php">
      <div align="center">
        <p><strong>FACULTY REGISTRATION</strong></p>
        <?php
		$s1=$_POST["t1"];
		$s2=$_POST["t2"];
		$s3=$_POST["t3"];
		$s4=$_POST["t4"];
		
		
		include("connection.php");
		
		
		?>
		<table width="262" border="1">
          <tr>
            <td width="71">Name</td>
            <td width="175"><label><?php echo $s1; ?></label></td>
          </tr>
          <tr>
            <td>Department</td>
            <td><label><?php echo $s2; ?></label></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><label><?php echo $s3; ?></label></td>
          </tr>
          <tr>
            <td>Mobile</td>
            <td><label><?php echo $s4; ?></label></td>
          </tr>
          <tr>
            <td colspan="2"><label>
               <div align="center">
			 <?php
			  $fid="f1000";
			  $s=mysql_query("select * from facultyreg order by fid desc");
			  if($row=mysql_fetch_array($s))
			  {
			  $fid=$row[0];
			  }
			  $fid++;
			  $s="insert into facultyreg values('$fid','$s1','$s2','$s3','$s4')";
			  mysql_query($s);
			  
			  $s="insert into login values('$fid','$fid')";
			  mysql_query($s);
			  echo "<b>Registration completed..The 	Faculty ID is $fid and password is the same";
			  
			  
			  ?>  
			   </div>
            </label></td>
            </tr>
        </table>
        <label></label>
        <p>&nbsp;</p>
      </div>
    </form></td>
    <td></td>
  </tr>
  <tr>
    <td height="17"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
