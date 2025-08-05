<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="995" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="42" height="331">&nbsp;</td>
    <td width="846" valign="top"><form id="form1" name="form1" method="post" action="fentry2.php">
      <div align="center">
        <p><strong>FEEDBACK ENTRY      </strong></p>
        
		<?php
		include("connection.php");
		session_start();
		$studid=$_SESSION["studid"];
		$s=mysql_query("select*from studentreg where STUDID='$studid'");
		if($row=mysql_fetch_array($s))
		{
		$coursename=$row[2];
		$sem=$row[3];
		}
		
		$s=mysql_query("select*from subject where COURSENAME='$coursename'and SEMESTER='$sem'");
		if(mysql_num_rows($s)==0)
		echo"no subject registered";
		else
		{
		?>
		<table width="278" border="1">
          <tr>
            <td width="122">Select subject </td>
            <td width="58"><label>
              <select name="t1" id="t1">
			   <?php
			  while($row=mysql_fetch_array($s))
			  {
			  echo"<option>$row[1]</option>";
			  }
			 
			  ?>
			  
			  
                            </select>
             
            </label></td>
            <td width="76"><label>
              <input type="submit" name="Submit" value="Next" />
            </label></td>
          </tr>
        </table>
		<?php
		}
	     ?>
        <label></label>
        <p>&nbsp;</p>
      </div>
    </form>
    </td>
    <td width="107">&nbsp;</td>
  </tr>
  <tr>
    <td height="27">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
