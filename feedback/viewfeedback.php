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
.style6 {font-size: 16px}
-->
</style>
</head>

<body>
<table width="1051" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="118" height="44">&nbsp;</td>
    <td width="741">&nbsp;</td>
    <td width="192">&nbsp;</td>
  </tr>
  <tr>
    <td height="274">&nbsp;</td>
    <td valign="top"><form id="form1" name="form1" method="post" action="viewfeedback2.php">
      <div align="center" class="style1">
        <p>VIEW STUDENT FEEDBACK      </p>
		
        <?php
		include("connection.php");
		$s=mysql_query("select*from feedbackmaster order by fno");
		if(mysql_num_rows($s)==0)
		echo"<b>No feedback";
		else
		{
		?>
		
		<table width="386" border="1">
          <tr>
            <td width="190" height="37"><span class="style6">Select Feedback No </span></td>
            <td width="84"><label>
              <select name="t1" id="t1"><?php
			  while($row=mysql_fetch_array($s))
			  {
			  echo"<option>$row[0]</option>";
			  }
			  ?>
			  
              </select>
            </label></td>
            <td width="90"><label>
              <input type="submit" name="Submit" value="view" />
            </label></td>
          </tr>
        </table>
		
		<?php
		}
		?>
        <p align="left">&nbsp;</p>
      </div>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
