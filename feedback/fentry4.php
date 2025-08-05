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
    <td width="150">&nbsp;</td>
    <td width="289">&nbsp;</td>
    <td width="53">&nbsp;</td>
    <td width="193">&nbsp;</td>
    <td width="219">&nbsp;</td>
    <td width="103">&nbsp;</td>
  </tr>
  <tr>
    <td height="65">&nbsp;</td>
    <td colspan="4" valign="top"><div align="center" class="style1">FEEDBACK ENTRY </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="280" colspan="2" valign="top"><form id="form1" name="form1" method="post" action="fentry3.php">
      <div align="center">
        <p>SUBJECT DETAILS      </p>
          <?php
		include("connection.php");
		$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	$s3=$_POST["t3"];
	
	$s4=$_POST["t4"];
	
	
	
	
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
    </form></td>
    <td valign="top"><form id="form2" name="form2" method="post" action="">
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
    </form></td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top">Question 
      <form id="form3" name="form3" method="post" action="fentry3.php">
        <?php
		$qno=0;
			$s=mysql_query("select * from feedbackchild where fno=$s2 order by qno desc");
			if($row=mysql_fetch_array($s))
			{
			$qno=$row[1];
			}
			$qno++;
			$s=mysql_query("select * from question where qno=$qno");
			if(mysql_num_rows($s)==0)
			   echo "Sorry... No Questions...";
			   <tr><td>
			    <p><a href="studentprocess.php">LOGOUT</a></p>
				</td></tr>
			   else
			   {
			   $row=mysql_fetch_array($s);
			   $question=$row[1];
			   
			
			
			?>
        <table width="283" border="1">
          <tr>
            <td width="162" height="23">Question No </td>
            <td width="105"><?php  echo $qno; ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">Question</td>
          </tr>
          <tr>
            <td colspan="2"><label>
              <textarea name="t3" cols="60" rows="6" id="t3"><?php echo $question; ?></textarea>
            </label></td>
          </tr>
          <tr>
            <td height="27" colspan="2"><label><?php echo  $s4; ?></label><label></label></td>
          </tr>
          <tr>
            <td height="27" colspan="2"><?php
			
			$s="insert into feedbackchild values($s2,$qno,'$s4')";
			mysql_query($s);
			echo "Entry Success...";

			
			?>&nbsp;</td>
          </tr>
          <tr>
            <td height="27" colspan="2"><label>
              <input type="submit" name="Submit" value="Next" />
            <?php
			   echo "<input type='hidden' name='t1' value='$s1'>";
	   echo "<input type='hidden' name='t2' value='$s2'>";
			
			?></label></td>
          </tr>
        </table>
        <?php
		}
		?>
      </form>
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
