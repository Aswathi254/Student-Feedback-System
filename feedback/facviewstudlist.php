<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="268" height="127">&nbsp;</td>
    <td width="574" valign="top"><div align="center">
      <p><strong>STUDENT REGISTRATION </strong></p>
        </div>      <form id="form1" name="form1" method="post" action="studreg2.php"><?php
		include("connection.php");
		$s=mysql_query("select * from course");
		if(mysql_num_rows($s)==0)
		    echo "<b>No Course registered";
			else
			{
		
		?>
        <table width="440" height="48" border="1" align="center">
          <tr>
            <td width="182" height="42">SELECT COURSE </td>
            <td width="120"><label></label>
              <select name="c1" id="c1">
                <?php
			  while($row=mysql_fetch_array($s))
			  {
			  echo "<option>$row[0]</option>";
			  }
			  
			  ?>
              </select></td>
            <td width="116"><label>
              <input type="submit" name="Submit" value="View" />
            </label></td>
          </tr>
        </table>
        <?php } ?>
      </form></td>
    <td width="396">&nbsp;</td>
  </tr>
  <tr>
    <td height="231">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
