<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="1127" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="120" height="45">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td width="77">&nbsp;</td>
    <td width="289">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="101">&nbsp;</td>
  </tr>
  <tr>
    <td height="65">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center" class="style1">FEEDBACK ENTRY </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="126">&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan="3" valign="top"><form id="form1" name="form1" method="post" action="fentry3.php">
      <div align="center">
        <p>SUBJECT DETAILS      </p>
        <?php
		include("connection.php");
		$s1=$_POST["t1"];
	
		$s=mysql_query("select*from subject where subcode='$s1'");
		if($row= mysql_fetch_array($s))
		{
		$subname=$row[1];
		$coursename=$row[2];
		$semester=$row[3];
		$fid=$row[4];
		}
		$s=mysql_query("select*from facultyreg where fid='$fid'");
		if($row=mysql_fetch_array($s))
		{
		$fname=$row[1];
		$department=$row[2];
		$email=$row[3];
		$mobileno=$row[4];
		}
		?>
		<table width="228" border="1">
          <tr>
            <td width="99">Subject code</td>
            <td width="113"><?php echo "$s1"; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Subject name </td>
            <td><?php echo $subname; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Course name </td>
            <td><?php echo "$coursename"; ?></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td><?php echo "$semester"; ?></td>
          </tr>
          <tr>
            <td>Faculty id </td>
            <td><?php echo "$fid"; ?></td>
          </tr>
        </table>
        <p>&nbsp;  </p>
      </div>
    </form>    </td>
    <td>&nbsp;</td>
    <td rowspan="3" valign="top"><form id="form2" name="form2" method="post" action="">
      <div align="center">
        <p>FACULTY DETAILS      </p>
        <table width="213" border="1">
          <tr>
            <td width="99">Faculty id </td>
            <td width="98"><?php echo $fid; ?></td>
          </tr>
          <tr>
            <td>Faculty name </td>
            <td><?php echo $fname; ?></td>
          </tr>
          <tr>
            <td>Department</td>
            <td><?php echo $department; ?></td>
          </tr>
          <tr>
            <td>Email id </td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>Mobile no </td>
            <td><?php echo $mobileno; ?></td>
          </tr>
        </table>
        <p>&nbsp;  </p>
      </div>
    </form>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><form id="form3" name="form3" method="post" action="fentry3.php">
      <label>
	  <?php
	   session_start();
	  $studid=$_SESSION["studid"];
	  
	  $s=mysql_query("select * from feedbackmaster where  studid='$studid' and subcode='$s1'");
	  if(mysql_num_rows($s)>0)
	      echo "<b>Feedback already registered...";
		  else
		  {
	  ?>
      <input type="submit" name="Submit" value="Get Question" />
      </label>
	  <?php
	  include("connection.php");
	  $fno=0;
	  $s=mysql_query("select * from feedbackmaster order by fno desc");
	  if($row=mysql_fetch_array($s))
	  {
	  
	  $fno=$row[0];
	  }
	  $fno++;
	 
	  $s="insert into feedbackmaster values($fno,'$studid','$fid','$s1')";
	  mysql_query($s);
	  
	  
	  
	  
	   echo "<input type='hidden' name='t1' value='$s1'>";
	   echo "<input type='hidden' name='t2' value='$fno'>";
	   }
	    ?>
        </form>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="116">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
