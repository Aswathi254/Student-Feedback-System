<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-style: italic;
}
.style2 {
	font-size: 16px;
	font-style: italic;
}
.style3 {
	font-size: 24px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>

<body>
<table width="1234" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="10" height="18"></td>
    <td width="133"></td>
    <td width="121"></td>
    <td width="17"></td>
    <td width="223"></td>
    <td width="15"></td>
    <td width="245"></td>
    <td width="17"></td>
    <td width="117"></td>
    <td width="336"></td>
  </tr>
  <tr>
    <td height="47"></td>
    <td></td>
    <td colspan="7" valign="top"><form id="form1" name="form1" method="post" action="">
      <div align="center" class="style1">View Student  Feedback      </div>
    </form>
    </td>
    <td></td>
  </tr>
  <tr>
    <td height="31">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="309"></td>
    <td colspan="2" rowspan="2" valign="top"><form id="form2" name="form2" method="post" action="">
      <div align="center" class="style2">
        <p>Student Details</p>
        <?php
		$s1=$_POST['t1'];
		include("connection.php");
	
		$s=mysql_query("select studentreg.STUDID,studentreg.NAME,studentreg.COURSENAME,studentreg.SEMESTER,studentreg.MOBILENO,studentreg.GENDER,studentreg.EMAIL from studentreg join feedbackmaster on studentreg.STUDID=feedbackmaster.STUDID where feedbackmaster.fno='$s1'");
		if($row= mysql_fetch_array($s))
		{
		$studid=$row[0];
		$name=$row[1];
		$coursename=$row[2];
		$semester=$row[3];
		$mobileno=$row[4];
		$gender=$row[5];
		$email=$row[6];
		}
		
		?>
		<table width="213" border="1">
          <tr>
            <td width="92">Student Id </td>
            <td width="105"><?php echo "$studid"; ?></td>
          </tr>
          <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
          </tr>
          <tr>
            <td>Course Name </td>
            <td><?php echo "$coursename"; ?></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td><?php echo "$semester"; ?></td>
          </tr>
          <tr>
            <td>Mobile No </td>
            <td><?php echo "$mobileno"; ?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php echo "$gender"; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo "$email"; ?></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </form>
    </td>
    <td></td>
    <td rowspan="2" valign="top"><form id="form3" name="form3" method="post" action="">
      <div align="center" class="style2">
        <p>Subject Details      </p>
        <?php
		include("connection.php");
		$s1=$_POST["t1"]; 
		$s=mysql_query("select subject.subcode,subject.subname,subject.COURSENAME,subject.SEMESTER,subject.fid from subject join feedbackmaster on        subject.fid=feedbackmaster.fid where feedbackmaster.fno='$s1'");
		while($row=mysql_fetch_array($s))
		{
		$subcode=$row[0];
		$subname=$row[1];
		$coursename=$row[2];
		$semester=$row[3];
		$fid=$row[4];
		}
		$s=mysql_query("select*from facultyreg where fid='$fid'");
		while($row=mysql_fetch_array($s))
		{
		$fname=$row[1];
		$department=$row[2];
		$email=$row[3];
		$mobileno=$row[4];
		}
		?>
<table width="200" border="1">
          <tr>
            <td>Subject code</td>
            <td><?php echo "$subcode"; ?></td>
          </tr>
          <tr>
            <td>Subject name</td>
            <td><?php echo "$subname"; ?></td>
          </tr>
          <tr>
            <td>Course name</td>
            <td><?php echo "$coursename"; ?></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td><?php echo "$semester"; ?></td>
          </tr>
          <tr>
            <td>Faculty id</td>
            <td><?php echo "$fid"; ?></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div>
    </form>
    </td>
    <td></td>
    <td valign="top"><form id="form4" name="form4" method="post" action="">
      <div align="center" class="style2">
        <p>Faculty Details      </p>
        <table width="211" border="1">
          <tr>
            <td width="99">Faculty id</td>
            <td width="96"><?php echo $fid; ?></td>
          </tr>
          <tr>
            <td>Faculty name</td>
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
            <td>Mobile no</td>
            <td><?php echo $mobileno; ?></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div>
    </form>
    
    </td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><form id="form5" name="form5" method="post" action="">
      <p align="center" class="style3">Feedback</p>
	        <table width="427" border="1">
        <tr>
          <td width="67">Q.No</td>
          <td width="219">Question</td>
          <td width="119">Answer</td>
        </tr>
	  <?php
	  include("connection.php");
	  $s=mysql_query("select question.qno,question.question,feedbackchild.answer from question join feedbackchild on question.qno=feedbackchild.qno where feedbackchild.fno='$s1'");
		while($row=mysql_fetch_array($s))
		{
		$qno=$row[0];
		$question=$row[1];
		$answer=$row[2];
	  ?>
        <tr>
          <td><?php echo $qno; ?>&nbsp;</td>
          <td><?php echo $question; ?>&nbsp;</td>
          <td><?php echo $answer; ?> &nbsp;</td>
        </tr>
		<?php
		}
		?>
      </table>
      <p align="center" class="style3">&nbsp;</p>
    </form>
    </td>
  </tr>
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
