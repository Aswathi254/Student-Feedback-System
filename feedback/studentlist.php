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
<table width="907" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr>
    <td width="102" height="17"></td>
    <td width="805"></td>
  </tr>
  <tr>
    <td height="317"></td>
    <td valign="top"><div align="center" class="style1">
      <p>STUDENT  LIST </p>
      <form id="form1" name="form1" method="post" action="">
	  <?php
	  include("connection.php");
	  $s=mysql_query("select*from studentreg");
	  if(mysql_num_rows($s)==0)
	  echo"no student registered";
	  else
	  {
	  echo"<table border='1' width='100%'><tr><th>student Id</th><th>student name</th></tr>";
	  while($row=mysql_fetch_array($s))
	  {
	  echo"<tr align='center'><td>$row[0]</td><td>$row[1]</td></tr>";
	  }
	  echo"</table>";
	  }
	  
	  ?>
      </form>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
</body>
</html>
