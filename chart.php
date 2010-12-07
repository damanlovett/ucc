<?php virtual('/career/Connections/connCareer.php'); ?>
<?php include_once('/career/includes/MXCharts/mx_charts.inc.php'); ?>
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
$query_rsLibrary = "SELECT ID, Title, Author, `Library section`, `Color code`, Field8 FROM librarybooks";
$rsLibrary = mysql_query($query_rsLibrary, $connCareer) or die(mysql_error());
$row_rsLibrary = mysql_fetch_assoc($rsLibrary);
$totalRows_rsLibrary = mysql_num_rows($rsLibrary);

$Chart_1 = new MX_Chart();
 	$Chart_1->setRelativePath("/career/");
 	$Chart_1->setChartType("Pie", 500, 300);
 	$Chart_1->setDataRange($rsLibrary, "Library section", "ID", "Normal", "");
 	$Chart_1->setSort("None", "ASC");
 	$Chart_1->setChartTitle("Library");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo $Chart_1->getImage();
?>
</body>
</html>
<?php
mysql_free_result($rsLibrary);
?>
