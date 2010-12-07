<?php virtual('/career/Connections/connCareer.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_connCareer, $connCareer);
$query_rsRSSFEED = "SELECT * FROM c3mregistration";
$rsRSSFEED = mysql_query($query_rsRSSFEED, $connCareer) or die(mysql_error());
$row_rsRSSFEED = mysql_fetch_assoc($rsRSSFEED);
$totalRows_rsRSSFEED = mysql_num_rows($rsRSSFEED);
 header ("Content-type: text/xml");?>
<rss version="2.0">
<channel>
<title>This is a test</title>
<link>http://ncsu.edu</link>
<description>Test description</description>
<item>
	<title><?php echo $row_rsRSSFEED['title']; ?></title>
	<eventdate><?php echo $row_rsRSSFEED['eventdate']; ?></eventdate>
	<officeaddress><?php echo $row_rsRSSFEED['officeaddress']; ?></officeaddress>
	<eventdescription><?php echo $row_rsRSSFEED['eventdescription']; ?></eventdescription>
</item>
</channel>
</rss>
<?php
mysql_free_result($rsRSSFEED);
?>
