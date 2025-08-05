<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="977" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="194" height="27">&nbsp;</td>
    <td width="473">&nbsp;</td>
    <td width="310">&nbsp;</td>
  </tr>
  <tr>
    <td height="326">&nbsp;</td>
    <td valign="top"><form id="form1" name="form1" method="post" action="login2.php">
      <div align="center">
        <p>USER LOGIN      </p>
        <table width="270" height="110" border="1">
          <tr>
            <td width="92">USERID</td>
            <td width="146"><label>
              <input name="t1" type="text" id="t1" />
            </label></td>
          </tr>
          <tr>
            <td>PASSWORD</td>
            <td><label>
              <input type="text" name="t2" />
            </label></td>
          </tr>
          <tr>
            <td colspan="2"><label>
              <div align="center">
                <p>
                  <input type="submit" name="Submit" value="SIGNIN" />
                </p>
                <p>
				<?php
				$s1=$_POST["t1"];
				$s2=$_POST["t2"];				
				include("connection.php");
				$s=mysql_query("select*from login where USERID='$s1' and PASSWORD='$s2'");
				if(mysql_num_rows($s)==0)
				echo"<b>invalid userid or password";
				else
				{
				if($s1=="Admin")
				header('location:adminprocess.php');
				
				else
				{
				$x=$s1[0];
				if($x=="s")
				{
				session_start();
				$_SESSION["studid"]=$s1;
				header('location:studentprocess.php');
				}
				if($x=="f")
				{
				session_start();
				$_SESSION["fid"]=$s1;
				header('location:facultyprocess.php');
				}
				}
				}
				?>&nbsp;</p>
              </div>
            </label></td>
            </tr>
        </table>
        <label></label>
        <p>&nbsp;  </p>
      </div>
    </form>
    
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="39">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
