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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE news SET heading=%s, link=%s, `description`=%s, `order`=%s, `view`=%s WHERE ID=%s",
                       GetSQLValueString($_POST['heading'], "text"),
                       GetSQLValueString($_POST['link'], "text"),
                       GetSQLValueString($_POST['description'], "text"),
                       GetSQLValueString($_POST['order'], "text"),
                       GetSQLValueString($_POST['view'], "text"),
                       GetSQLValueString($_POST['ID'], "int"));

  mysql_select_db($database_connCareer, $connCareer);
  $Result1 = mysql_query($updateSQL, $connCareer) or die(mysql_error());

  $updateGoTo = "/career/news/index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_connCareer, $connCareer);
$query_rsUpdate = "SELECT * FROM news";
$rsUpdate = mysql_query($query_rsUpdate, $connCareer) or die(mysql_error());
$row_rsUpdate = mysql_fetch_assoc($rsUpdate);
$totalRows_rsUpdate = mysql_num_rows($rsUpdate);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/second.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link href="../stylesheets/mainsheet.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--

/* BEGIN Advanced HTML Editor */
.dmx_btn     { width: 22px; height: 22px; border: 1px solid #ECE9D8; margin: 0; padding: 0; background-color: #ECE9D8; }
.dmx_btnOver { width: 22px; height: 22px; border: 1px outset; margin: 0; padding: 0; background-color: #FCF9E8; }
.dmx_btnDown { width: 22px; height: 22px; border: 1px inset; margin: 0; padding: 0; background-color: #FCF9E8; }
.dmx_btnNA   { width: 22px; height: 22px; border: 1px solid #ECE9D8; margin: 0; padding: 0; -moz-opacity:0.25; opacity:0.25; filter: alpha(opacity=25);}
.dmx_menuBar { background-color: #ECE9D8; }
/* END Advanced HTML Editor */
-->
</style>
<script language="javascript">
<!--
/* BEGIN Advanced HTML Editor */
var BaseURL = "../";
/* END Advanced HTML Editor */
//-->
</script>
<script language="JavaScript" src="../ScriptLibrary/AdvHTMLLang.js"></script>
<script language="JavaScript" src="../ScriptLibrary/AdvHTMLEdit.js"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<!-- DO NOT MOVE! The following AllWebMenus code must always be placed right AFTER the BODY tag-->
<!-- ******** BEGIN ALLWEBMENUS CODE FOR maintopnav ******** -->
<span id='xawmMenuPathImg-maintopnav' style='position:absolute;top:-50px'><img name='awmMenuPathImg-maintopnav' id='awmMenuPathImg-maintopnav' src='../menus/awmmenupath.gif' alt='' /></span>
<script type='text/javascript'>var MenuLinkedBy='AllWebMenus [2]', awmBN='DW'; awmAltUrl='';</script>
<script charset='UTF-8' src='../menus/maintopnav.js' language='JavaScript1.2' type='text/javascript'></script>
<script type='text/javascript'>awmBuildMenu();</script>
<!-- ******** END ALLWEBMENUS CODE FOR maintopnav ******** -->
<div class="skipcontent">Skip to <a href="#content">content</a> or <a href="#links">page links</a> or <a href="#site">Site links</a></div>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="maintable">
  <tr>
    <td colspan="2"><img src="../images/header.jpg" alt="" width="760" height="55" border="0" usemap="#Map" /></td>
  </tr>
  <!-- InstanceBeginEditable name="PageHeader" -->
  <tr>
    <td align="left" valign="top" bgcolor="#000000" id="topquicklinks"><?php require_once('../menus/EMPquick.php'); ?></td>
    <td width="581"><img src="/career/images/bannerstudent.jpg" alt="" width="581" height="136" /></td>
  </tr>
  <!-- InstanceEndEditable -->
  <tr>
    <td colspan="2" bgcolor="#999999"></td>
  </tr>
  <tr>
    <td colspan="2"><span id='awmAnchor-maintopnav'>&nbsp;</span></td>
  </tr>
  <tr>
    <td colspan="2"><table width="760" border="0" align="center" cellpadding="0" cellspacing="0" class="contenttable">
      <tr><a name="links" id="links"></a>
        <td width="195" align="left" valign="top" id="leftnav2"><!-- InstanceBeginEditable name="leftnav" -->
          <?php require_once('../menus/STUjobsinterns.php'); ?>
          <img src="/career/images/pageimages/resume.jpg" alt="" width="195" height="165" />
          <p></p>
        <!-- InstanceEndEditable --></td>
        <td align="left" valign="top"><!-- InstanceBeginEditable name="MainContent" -->
          <div id="maincontent">
            <div>
              <h4><a name="content" id="content"></a>Resumes and letters </h4>
            </div>
            <p>&nbsp;</p>
            
            <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right">News Story #</td>
                  <td><?php echo $row_rsUpdate['ID']; ?></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Heading:</td>
                  <td><input type="text" name="heading" value="<?php echo $row_rsUpdate['heading']; ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Link:</td>
                  <td><input type="text" name="link" value="<?php echo $row_rsUpdate['link']; ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right" valign="top">Description:</td>
                  <td>
					<textarea dmxedit="true" id="description" name="description" style="width:80%;height:100px;" toolbar="F:NS;H:H;T:BIU;J:LCRF;O:LUOI;X:HLW"></textarea>
</td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right"><label for="editor1"></label>
                    Order:</td>
                  <td><select name="order">
                      <option value="2" <?php if (!(strcmp(2, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>1</option>
                      <option value="2" <?php if (!(strcmp(2, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>2</option>
                      <option value="3" <?php if (!(strcmp(3, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>3</option>
                      <option value="4" <?php if (!(strcmp(4, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>4</option>
                      <option value="5" <?php if (!(strcmp(5, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>5</option>
                      <option value="6" <?php if (!(strcmp(6, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>6</option>
                      <option value="7" <?php if (!(strcmp(7, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>7</option>
                      <option value="8" <?php if (!(strcmp(8, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>8</option>
                      <option value="9" <?php if (!(strcmp(9, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>9</option>
                      <option value="10" <?php if (!(strcmp(10, $row_rsUpdate['order']))) {echo "SELECTED";} ?>>10</option>
                    </select>                  </td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Viewable:</td>
                  <td><select name="view">
                      <option value="y" <?php if (!(strcmp("y", $row_rsUpdate['view']))) {echo "SELECTED";} ?>>Yes</option>
                      <option value="n" <?php if (!(strcmp("n", $row_rsUpdate['view']))) {echo "SELECTED";} ?>>No</option>
                    </select>                  </td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td><input type="submit" value="Update record"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_update" value="form1">
              <input type="hidden" name="ID" value="<?php echo $row_rsUpdate['ID']; ?>">
            </form>
            <p>&nbsp;</p>
            <ul>
              <br />
            </ul>
            <br />
            <br />
          </div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td width="100%" colspan="3" align="left" valign="top" bgcolor="#990000">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <!--  <tr>
    <td colspan="2">safdafdas</td>
  </tr>-->
  <tr>
    <td width="46%" valign="top"><div class="uccfooterinfo">University Career Center <br />
      2100 Pullen Hall &middot; Box 7303 <br />
      Raleigh, NC 27695<br />
      919.515.2396</div></td>
    <td width="54%" valign="top"><div align="right">
      <div class="uccfooterinfo">hours: M-F 8:00-5:00<br />
        drop in hours: M-F 11:00-2:00<br />
        career_center@ncsu.edu<br />
        919.515.4210 (fax) </div>
    </div></td>
  </tr>
</table>
<map name="topheader" id="topheader">
  <area shape="rect" coords="617,2,757,23" href="http://ncsu.edu/" alt="NCSU Home" />
</map>
<div class="skipcontent">
<a name="site" id="site"></a><a href="/career/students/explore/index.php">Students - Explore</a>
<a href="/career/students/interviewing/index.php">Students - Interviewing</a>
<a href="/career/students/jobsinternships/index.php">Students - Jobs and Internship</a>
<a href="/career/students/quicklinks/staff.php">Students - Meet The Staff</a>
<a href="/career/students/resumesletters/index.php">Students - Resume</a>
<a href="/career/employers/Interviewing/policies.php">Employers - Interviewing</a>
<a href="/career/employers/Marketing/index.php">Employers - Marketing</a>
<a href="/career/employers/Posting/index.php">Employers - Posting</a>
<a href="/career/employers/resumes/index.php">Employers - Resumes</a>
<a href="http://www.alumni.ncsu.edu/">Alumni</a>
<a href="/career/parents/index.php">Parents</a></div>

<map name="Map" id="Map"><area shape="rect" coords="615,2,759,23" href="http://ncsu.edu" alt="NC State Home Page" />
</map>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-6631273-1");
pageTracker._trackPageview();
</script></body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($rsUpdate);
?>
