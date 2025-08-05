 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="989" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="182" height="30">&nbsp;</td>
    <td width="499">&nbsp;</td>
	 <?php
	  $s1=$_POST["t1"];
	  $s2=$_POST["t2"];
	  ?>
    <td width="308">&nbsp;</td>
  </tr>
  <tr>
    <td height="329">&nbsp;</td>
    <td valign="top"><div align="center">COURSE REGISTRATION
      <form id="form1" name="form1" method="post" action="coursereg2.php">
	  
        <table width="321" border="1">
          <tr>
            <td width="142" height="33">COURSE NAME </td>
            <td width="163"><label>
              <?php
			  echo"$s1";
			  ?>
            </label></td>
          </tr>
          <tr>
            <td height="32">SEMESTER</td>
            <td><label>
               <?php
			  echo"$s2";
			  ?>
            </label></td>
          </tr>
          <tr>
            <td height="48" colspan="2"><label>
              <div align="center">
			  <?php
			  include("connection.php");
              $s=mysql_query("select*from course where COURSENAME='$s1'");
	          if(mysql_num_rows($s)>0)
	          echo"This course name already exist";
	          else 
	          {
	          $s="insert into course values('$s1',$s2)";
	          mysql_query($s);
	           echo"<b>REGISTRATION SUCCESS";
	          }
            ?>
			  </div>
              </label></td>
            </tr>
        </table>
        </form>
</div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
