<?php require_once('../Connections/connCareer.php'); ?>
<?php
// Load the common classes
require_once('../includes/common/KT_common.php');

// Load the required classes
require_once('../includes/tfi/TFI.php');
require_once('../includes/tso/TSO.php');
require_once('../includes/nav/NAV.php');

// Make unified connection variable
$conn_connCareer = new KT_connection($connCareer, $database_connCareer);

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

// Filter
$tfi_listrsFairs2 = new TFI_TableFilter($conn_connCareer, "tfi_listrsFairs2");
$tfi_listrsFairs2->addColumn("title", "STRING_TYPE", "title", "%");
$tfi_listrsFairs2->addColumn("eventdate", "STRING_TYPE", "eventdate", "%");
$tfi_listrsFairs2->addColumn("starttime", "STRING_TYPE", "starttime", "%");
$tfi_listrsFairs2->addColumn("endtime", "STRING_TYPE", "endtime", "%");
$tfi_listrsFairs2->Execute();

// Sorter
$tso_listrsFairs2 = new TSO_TableSorter("rsFairs", "tso_listrsFairs2");
$tso_listrsFairs2->addColumn("title");
$tso_listrsFairs2->addColumn("eventdate");
$tso_listrsFairs2->addColumn("starttime");
$tso_listrsFairs2->addColumn("endtime");
$tso_listrsFairs2->setDefault("title");
$tso_listrsFairs2->Execute();

// Navigation
$nav_listrsFairs2 = new NAV_Regular("nav_listrsFairs2", "rsFairs", "../", $_SERVER['PHP_SELF'], 20);

//NeXTenesio3 Special List Recordset
$maxRows_rsFairs = $_SESSION['max_rows_nav_listrsFairs2'];
$pageNum_rsFairs = 0;
if (isset($_GET['pageNum_rsFairs'])) {
  $pageNum_rsFairs = $_GET['pageNum_rsFairs'];
}
$startRow_rsFairs = $pageNum_rsFairs * $maxRows_rsFairs;

// Defining List Recordset variable
$NXTFilter_rsFairs = "1=1";
if (isset($_SESSION['filter_tfi_listrsFairs2'])) {
  $NXTFilter_rsFairs = $_SESSION['filter_tfi_listrsFairs2'];
}
// Defining List Recordset variable
$NXTSort_rsFairs = "title";
if (isset($_SESSION['sorter_tso_listrsFairs2'])) {
  $NXTSort_rsFairs = $_SESSION['sorter_tso_listrsFairs2'];
}
mysql_select_db($database_connCareer, $connCareer);

$query_rsFairs = "SELECT c3mregistration.title, c3mregistration.eventdate, c3mregistration.starttime, c3mregistration.endtime, c3mregistration.id, c3mregistration.id FROM c3mregistration WHERE {$NXTFilter_rsFairs} AND  {$NXTFilter_rsFairs}  ORDER BY  {$NXTSort_rsFairs} ";
$query_limit_rsFairs = sprintf("%s LIMIT %d, %d", $query_rsFairs, $startRow_rsFairs, $maxRows_rsFairs);
$rsFairs = mysql_query($query_limit_rsFairs, $connCareer) or die(mysql_error());
$row_rsFairs = mysql_fetch_assoc($rsFairs);

if (isset($_GET['totalRows_rsFairs'])) {
  $totalRows_rsFairs = $_GET['totalRows_rsFairs'];
} else {
  $all_rsFairs = mysql_query($query_rsFairs);
  $totalRows_rsFairs = mysql_num_rows($all_rsFairs);
}
$totalPages_rsFairs = ceil($totalRows_rsFairs/$maxRows_rsFairs)-1;
//End NeXTenesio3 Special List Recordset

$nav_listrsFairs2->checkBoundries();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/second.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Career Fair Software Confirmation </title>
<!-- InstanceEndEditable -->
<link href="../stylesheets/mainsheet.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEditableHeadTag -->
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script src="../includes/common/js/base.js" type="text/javascript"></script>
<script src="../includes/common/js/utility.js" type="text/javascript"></script>
<script src="../includes/skins/style.js" type="text/javascript"></script>
<script src="../includes/nxt/scripts/list.js" type="text/javascript"></script>
<script src="../includes/nxt/scripts/list.js.php" type="text/javascript"></script>
<script type="text/javascript">
$NXT_LIST_SETTINGS = {
  duplicate_buttons: true,
  duplicate_navigation: true,
  row_effects: true,
  show_as_buttons: true,
  record_counter: true
}
</script>
<style type="text/css">
  /* Dynamic List row settings */
  .KT_col_title {width:140px; overflow:hidden;}
  .KT_col_eventdate {width:140px; overflow:hidden;}
  .KT_col_starttime {width:140px; overflow:hidden;}
  .KT_col_endtime {width:140px; overflow:hidden;}
</style>
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
              <h4><a name="content" id="content"></a>Career Fair Software Results </h4>
            </div>
            <p>

            <div class="KT_tng" id="listrsFairs2">
              <h1> C3mregistration
                <?php
  $nav_listrsFairs2->Prepare();
  require("../includes/nav/NAV_Text_Statistics.inc.php");
?>
              </h1>
              <div class="KT_tnglist">
                <form action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" method="post" id="form1">
                  <div class="KT_options"> <a href="<?php echo $nav_listrsFairs2->getShowAllLink(); ?>"><?php echo NXT_getResource("Show"); ?>
                    <?php 
  // Show IF Conditional region1
  if (@$_GET['show_all_nav_listrsFairs2'] == 1) {
?>
                      <?php echo $_SESSION['default_max_rows_nav_listrsFairs2']; ?>
                      <?php 
  // else Conditional region1
  } else { ?>
                      <?php echo NXT_getResource("all"); ?>
                      <?php } 
  // endif Conditional region1
?>
                        <?php echo NXT_getResource("records"); ?></a> &nbsp;
                    &nbsp;
                <?php 
  // Show IF Conditional region2
  if (@$_SESSION['has_filter_tfi_listrsFairs2'] == 1) {
?>
                  <a href="<?php echo $tfi_listrsFairs2->getResetFilterLink(); ?>"><?php echo NXT_getResource("Reset filter"); ?></a>
                  <?php 
  // else Conditional region2
  } else { ?>
                  <a href="<?php echo $tfi_listrsFairs2->getShowFilterLink(); ?>"><?php echo NXT_getResource("Show filter"); ?></a>
                  <?php } 
  // endif Conditional region2
?>
                  </div>
                  <table cellpadding="2" cellspacing="0" class="KT_tngtable">
                    <thead>
                      <tr class="KT_row_order">
                        <th> <input type="checkbox" name="KT_selAll" id="KT_selAll"/>
                        </th>
                        <th id="title" class="KT_sorter KT_col_title <?php echo $tso_listrsFairs2->getSortIcon('title'); ?>"> <a href="<?php echo $tso_listrsFairs2->getSortLink('title'); ?>">Title</a> </th>
                        <th id="eventdate" class="KT_sorter KT_col_eventdate <?php echo $tso_listrsFairs2->getSortIcon('eventdate'); ?>"> <a href="<?php echo $tso_listrsFairs2->getSortLink('eventdate'); ?>">Event date</a> </th>
                        <th id="starttime" class="KT_sorter KT_col_starttime <?php echo $tso_listrsFairs2->getSortIcon('starttime'); ?>"> <a href="<?php echo $tso_listrsFairs2->getSortLink('starttime'); ?>">Start time</a> </th>
                        <th id="endtime" class="KT_sorter KT_col_endtime <?php echo $tso_listrsFairs2->getSortIcon('endtime'); ?>"> <a href="<?php echo $tso_listrsFairs2->getSortLink('endtime'); ?>">End time</a> </th>
                        <th>&nbsp;</th>
                      </tr>
                      <?php 
  // Show IF Conditional region3
  if (@$_SESSION['has_filter_tfi_listrsFairs2'] == 1) {
?>
                        <tr class="KT_row_filter">
                          <td>&nbsp;</td>
                          <td><input type="text" name="tfi_listrsFairs2_title" id="tfi_listrsFairs2_title" value="<?php echo KT_escapeAttribute(@$_SESSION['tfi_listrsFairs2_title']); ?>" size="20" maxlength="100" /></td>
                          <td><input type="text" name="tfi_listrsFairs2_eventdate" id="tfi_listrsFairs2_eventdate" value="<?php echo KT_escapeAttribute(@$_SESSION['tfi_listrsFairs2_eventdate']); ?>" size="20" maxlength="100" /></td>
                          <td><input type="text" name="tfi_listrsFairs2_starttime" id="tfi_listrsFairs2_starttime" value="<?php echo KT_escapeAttribute(@$_SESSION['tfi_listrsFairs2_starttime']); ?>" size="20" maxlength="100" /></td>
                          <td><input type="text" name="tfi_listrsFairs2_endtime" id="tfi_listrsFairs2_endtime" value="<?php echo KT_escapeAttribute(@$_SESSION['tfi_listrsFairs2_endtime']); ?>" size="20" maxlength="100" /></td>
                          <td><input type="submit" name="tfi_listrsFairs2" value="<?php echo NXT_getResource("Filter"); ?>" /></td>
                        </tr>
                        <?php } 
  // endif Conditional region3
?>
                    </thead>
                    <tbody>
                      <?php if ($totalRows_rsFairs == 0) { // Show if recordset empty ?>
                        <tr>
                          <td colspan="6"><?php echo NXT_getResource("The table is empty or the filter you've selected is too restrictive."); ?></td>
                        </tr>
                        <?php } // Show if recordset empty ?>
                      <?php if ($totalRows_rsFairs > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                          <tr class="<?php echo @$cnt1++%2==0 ? "" : "KT_even"; ?>">
                            <td><input type="checkbox" name="kt_pk_c3mregistration" class="id_checkbox" value="<?php echo $row_rsFairs['id']; ?>" />
                                <input type="hidden" name="id" class="id_field" value="<?php echo $row_rsFairs['id']; ?>" />
                            </td>
                            <td><div class="KT_col_title"><?php echo KT_FormatForList($row_rsFairs['title'], 20); ?></div></td>
                            <td><div class="KT_col_eventdate"><?php echo KT_FormatForList($row_rsFairs['eventdate'], 20); ?></div></td>
                            <td><div class="KT_col_starttime"><?php echo KT_FormatForList($row_rsFairs['starttime'], 20); ?></div></td>
                            <td><div class="KT_col_endtime"><?php echo KT_FormatForList($row_rsFairs['endtime'], 20); ?></div></td>
                            <td><a class="KT_edit_link" href="resultsdetails.php?id=<?php echo $row_rsFairs['id']; ?>&amp;id=<?php echo $row_rsFairs['id']; ?>&amp;KT_back=1"><?php echo NXT_getResource("edit_one"); ?></a> <a class="KT_delete_link" href="#delete"><?php echo NXT_getResource("delete_one"); ?></a> </td>
                          </tr>
                          <?php } while ($row_rsFairs = mysql_fetch_assoc($rsFairs)); ?>
                        <?php } // Show if recordset not empty ?>
                    </tbody>
                  </table>
                  <div class="KT_bottomnav">
                    <div>
                      <?php
            $nav_listrsFairs2->Prepare();
            require("../includes/nav/NAV_Text_Navigation.inc.php");
          ?>
                    </div>
                  </div>
                  <div class="KT_bottombuttons">
                    <div class="KT_operations"> <a class="KT_edit_op_link" href="#" onclick="nxt_list_edit_link_form(this); return false;"><?php echo NXT_getResource("edit_all"); ?></a> <a class="KT_delete_op_link" href="#" onclick="nxt_list_delete_link_form(this); return false;"><?php echo NXT_getResource("delete_all"); ?></a> </div>
<span>&nbsp;</span>
                    <select name="no_new" id="no_new">
                      <option value="1">1</option>
                      <option value="3">3</option>
                      <option value="6">6</option>
                    </select>
                    <a class="KT_additem_op_link" href="resultsdetails.php?id=<?php echo $row_rsFairs['id']; ?>&amp;KT_back=1" onclick="return nxt_list_additem(this)"><?php echo NXT_getResource("add new"); ?></a> </div>
                </form>
              </div>
              <br class="clearfixplain" />
            </div>
            <p>&nbsp;</p>
            <br />
            </p>
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
mysql_free_result($rsFairs);
?>
