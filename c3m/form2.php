<?php require_once('../Connections/connCareer.php'); ?>
<?php
//MX Widgets3 include
require_once('../includes/wdg/WDG.php');
?>
<?php require_once('includefiles/myfiles.php'); ?>
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO c3mregistration (title, eventdate, starttime, endtime, location, eventdescription, orgname, contactfirst, contactlast, email, officeaddress, contactphone, expectattendance, carolcontact) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['eventdate'], "text"),
                       GetSQLValueString($_POST['starttime'], "text"),
                       GetSQLValueString($_POST['endtime'], "text"),
                       GetSQLValueString($_POST['location'], "text"),
                       GetSQLValueString($_POST['eventdescription'], "text"),
                       GetSQLValueString($_POST['orgname'], "text"),
                       GetSQLValueString($_POST['contactfirst'], "text"),
                       GetSQLValueString($_POST['contactlast'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['officeaddress'], "text"),
                       GetSQLValueString($_POST['contactphone'], "text"),
                       GetSQLValueString($_POST['expectattendance'], "text"),
                       GetSQLValueString($_POST['carolcontact'], "text"));
					   
					   
techconfirm('C3M Confirmation Email');					   
myConfirmationEmail('C3M Confirmation Email');

  mysql_select_db($database_connCareer, $connCareer);
  $Result1 = mysql_query($insertSQL, $connCareer) or die(mysql_error());

  $insertGoTo = "confirmation.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_connCareer, $connCareer);
$query_rsEventNames = "SELECT * FROM c3mregistration ORDER BY title ASC";
$rsEventNames = mysql_query($query_rsEventNames, $connCareer) or die(mysql_error());
$row_rsEventNames = mysql_fetch_assoc($rsEventNames);
$totalRows_rsEventNames = mysql_num_rows($rsEventNames);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/second.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Career Fair Software Form </title>
<!-- InstanceEndEditable -->
<link href="../stylesheets/mainsheet.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.smallformbox {
	font-size: 85%;
}
-->
</style>
<script type="text/javascript" src="../includes/common/js/sigslot_core.js"></script>
<script src="../includes/common/js/base.js" type="text/javascript"></script>
<script src="../includes/common/js/utility.js" type="text/javascript"></script>
<script type="text/javascript" src="../includes/wdg/classes/MXWidgets.js"></script>
<script type="text/javascript" src="../includes/wdg/classes/MXWidgets.js.php"></script>
<script type="text/javascript" src="../includes/wdg/classes/Calendar.js"></script>
<script type="text/javascript" src="../includes/wdg/classes/SmartDate.js"></script>
<script type="text/javascript" src="../includes/wdg/calendar/calendar_stripped.js"></script>
<script type="text/javascript" src="../includes/wdg/calendar/calendar-setup_stripped.js"></script>
<script src="../includes/resources/calendar.js"></script>
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../includes/wdg/classes/JSRecordset.js"></script>
<script type="text/javascript" src="../includes/wdg/classes/CommaCheckboxes.js"></script>
<?php
//begin JSRecordset
$jsObject_rsEventNames = new WDG_JsRecordset("rsEventNames");
echo $jsObject_rsEventNames->getOutput();
//end JSRecordset
?><!-- InstanceEndEditable -->
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
    <td width="581"><img src="../images/bannerstudent.jpg" alt="" width="581" height="136" /></td>
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
          <img src="../images/pageimages/resume.jpg" alt="" width="195" height="165" />
          <p></p>
        <!-- InstanceEndEditable --></td>
        <td align="left" valign="top"><!-- InstanceBeginEditable name="MainContent" -->
          <div id="maincontent">
            <div>
              <h4><a name="content" id="content"></a>Career Fair Software Form </h4>
            </div>
            <p>Please fill out the form below so that we may create your C3M account for the fair. If you have specific questions about the software or setup please contact <a href="mailto:eddie_lovett@ncsu.edu">Eddie Lovett</a>. If you have specific question about pricing and availablity please contact <a href="mailto:carol_schroeder@ncsu.edu">Carol Schroeder</a>. </p>
            
            <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table width="100%" align="center" cellpadding="3">
                <tr valign="baseline">
                  <td colspan="2" align="left" valign="middle" nowrap class="todaysnews">Event Information </td>
                  </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Title:</td>
                  <td><input name="title" class="smallformbox" id="title" value="" size="32" wdg:recordset="rsEventNames" wdg:subtype="CommaCheckboxes" wdg:type="widget" wdg:displayfield="title" wdg:valuefield="title"></td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Event date:</td>
                  <td><input name="eventdate" class="smallformbox" id="eventdate" value="" size="32" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format.' '.$KT_screen_time_format; ?>" wdg:type="widget" wdg:mondayfirst="false" wdg:singleclick="true" wdg:restricttomask="yes" wdg:readonly="true"> 
                  ex. October 26, 2006 </td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Start time:</td>
                  <td><input name="starttime" type="text" class="smallformbox" value="" size="32">
                  ex. 11:00 AM </td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>End time:</td>
                  <td><input name="endtime" type="text" class="smallformbox" value="" size="32"> 
                  ex. 3:00 PM </td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Location:</td>
                  <td><input name="location" type="text" class="smallformbox" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Event description:</td>
                  <td><textarea name="eventdescription" cols="32" rows="5"></textarea></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right" valign="middle">Organization name:</td>
                  <td><input name="orgname" type="text" class="smallformbox" value="" size="32" />                  </td>
                </tr>
                <tr valign="baseline">
                  <td colspan="2" align="left" valign="middle" class="todaysnews">Contact Information</td>
                  </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>First name:</td>
                  <td><input name="contactfirst" type="text" class="smallformbox" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Last name:</td>
                  <td><input name="contactlast" type="text" class="smallformbox" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right" valign="middle">Email:</td>
                  <td><input name="email" type="text" class="smallformbox" id="email" size="32" /></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right" valign="middle">Office address:</td>
                  <td><textarea name="officeaddress" cols="32" rows="5"></textarea>                  </td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Phone:</td>
                  <td><input name="contactphone" type="text" class="smallformbox" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Expected attendance:</td>
                  <td><input name="expectattendance" type="text" class="smallformbox" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>Has Carol given you a price quote?</td>
                  <td valign="baseline"><table>
                      <tr>
                        <td><input type="radio" name="carolcontact" value="y" >
                          Yes</td>
                      </tr>
                      <tr>
                        <td><input name="carolcontact" type="radio" value="n" checked="checked" >
                          No</td>
                      </tr>
                  </table></td>
                </tr>
                <tr valign="baseline">
                  <td align="right" valign="middle" nowrap>&nbsp;</td>
                  <td><input type="submit" class="smallformbox" value="Submit Registration"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="form1">
            </form>
            <p>&nbsp;</p>
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
mysql_free_result($rsEventNames);
?>
