<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script>
function abc()
{
if(document.form1.t1.value==""||document.form1.t2.value==""||document.form1.t3.value=="")
{
alert("fill all passwords");
return(false);
}
if(document.form1.t2.value !=  document.form1.t3.value)
{
alert("new password and retype password should be same");
return(false);
}
}
</script>
<body>
<table width="995" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="133" height="35">&nbsp;</td>
    <td width="611">&nbsp;</td>
    <td width="251">&nbsp;</td>
  </tr>
  <tr>
    <td height="336">&nbsp;</td>
    <td valign="top"><div align="center">
      <p>CHANGE PASSWORD</p>
      <form id="form1" name="form1" onsubmit="return abc()" method="post" action="adpasschange2.php">
        <table width="388" height="137" border="1">
          <tr>
            <td width="191">EXISTING PASSWORD </td>
            <td width="181"><label>
              <input name="t1" type="password" id="t1" />
            </label></td>
          </tr>
          <tr>
            <td>NEW PASSWORD </td>
            <td><label>
              <input name="t2" type="password" id="t2" />
            </label></td>
          </tr>
          <tr>
            <td>RETYPE PASSWORD </td>
            <td><label>
              <input name="t3" type="password" id="t3" />
            </label></td>
          </tr>
          <tr>
            <td height="47" colspan="2"><label>
              <div align="center">
                <p>
                  <input type="submit" name="Submit" value="Submit" />
                  <input type="reset" name="Submit2" value="Reset" />
                </p>
                <p>
				<?php 
				include("connection.php");
				$s1=$_POST["t1"];
				$s2=$_POST["t2"];
				session_start();
				$fid=$_SESSION["fid"];
				$s=mysql_query("select*from login where USERID='$fid' and PASSWORD='$s1'");
				if(mysql_num_rows($s)==0)
				echo "<b>invalid existing password";
				else 
				{
				$s="update login set PASSWORD='$s2' where USERID='$fid'";
				mysql_query($s);
				echo"<b>password changed";
				}
				?>&nbsp;  </p>
              </div>
            </label></td>
            </tr>
        </table>
        </form>
      <p>&nbsp; </p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
