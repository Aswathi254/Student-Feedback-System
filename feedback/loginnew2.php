<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	color: #FFFF00;
}
.style2 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="1268" border="0" cellpadding="0" cellspacing="0"bgcolor="#660066">
  <!--DWLayoutTable-->
  <tr>
    <td width="34" height="24">&nbsp;</td>
    <td width="1205">&nbsp;</td>
    <td width="29">&nbsp;</td>
  </tr>
  <tr>
    <td height="416">&nbsp;</td>
    <td valign="top"><form id="form1" name="form1" method="post" action="loginnew2.php">
      <div align="center">
        <p>&nbsp;</p>
        <p class="style1">USER LOGIN      </p>
        <p>&nbsp;</p>
        <table width="270" height="110" border="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="97" height="47" valign="top"><div align="center" class="style2">USERID</div></td>
            <td width="163" valign="top"><label>
              <input name="t1" type="text" id="t1" />
            </label></td>
            </tr>
          
          <!--DWLayoutTable-->
          
          
          
          
          <tr>
            <td height="43" valign="top"><div align="center"><span class="style2">PASSWORD</span></div></td>
            <td valign="top"><label>
              <input name="t2" type="password" id="t2" />
              <br />
            </label></td>
            </tr>
          <tr>
            <td height="47" colspan="2" valign="top"><label>
              <div align="center">
                <p><input type="submit" name="Submit" value="SIGNIN" />
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
				?>
                  &nbsp;</p>
              </div>              </label></td>
            </tr>
        </table>
        <label></label>
        <p>&nbsp;  </p>
      </div>
    </form> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
