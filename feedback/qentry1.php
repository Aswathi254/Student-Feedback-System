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
    <td width="170" height="323">&nbsp;</td>
    <td width="667" valign="top"><form id="form1" name="form1" method="post" action="qentry2.php">
      <div align="center">
        <p>FEEDBACK QUESTION ENTRY</p>
        <table width="351" height="187" border="1">
          <tr>
            <td width="100" height="41">Question no </td>
            <td width="235">
			<?php
			include("connection.php");
			$qno=0;
			$s=mysql_query("select*from question order by qno desc");
			if($row=mysql_fetch_array($s))
			{
			$qno=$row[0];
			}
			$qno++;
			echo $qno;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td height="29" colspan="2"><div align="center"><strong>QUESTION</strong></div></td>
            </tr>
          <tr>
            <td height="65" colspan="2"><label>
              <div align="center">
                <textarea name="t1" id="t1"></textarea>
                </div>
            </label></td>
            </tr>
          <tr>
            <td height="40" colspan="2"><label>
              <div align="center">
                <input type="submit" name="Submit" value="Submit" />
                </div>
            </label></td>
            </tr>
        </table>
        <p>&nbsp;        </p>
      </div>
    </form>
    
    </td>
    <td width="158">&nbsp;</td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
