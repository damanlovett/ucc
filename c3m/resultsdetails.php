<?php require_once('../Connections/connCareer.php'); ?>
<?php
// Load the common classes
require_once('../includes/common/KT_common.php');

// Load the tNG classes
require_once('../includes/tng/tNG.inc.php');

// Load the KT_back class
require_once('../includes/nxt/KT_back.php');

// Make a transaction dispatcher instance
$tNGs = new tNG_dispatcher("../");

// Make unified connection variable
$conn_connCareer = new KT_connection($connCareer, $database_connCareer);

// Start trigger
$formValidation = new tNG_FormValidation();
$tNGs->prepareValidation($formValidation);
// End trigger

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
$query_rsFairs = "SELECT * FROM c3mregistration ORDER BY id DESC";
$rsFairs = mysql_query($query_rsFairs, $connCareer) or die(mysql_error());
$row_rsFairs = mysql_fetch_assoc($rsFairs);
$totalRows_rsFairs = mysql_num_rows($rsFairs);

// Make an insert transaction instance
$ins_c3mregistration = new tNG_multipleInsert($conn_connCareer);
$tNGs->addTransaction($ins_c3mregistration);
// Register triggers
$ins_c3mregistration->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_c3mregistration->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_c3mregistration->registerTrigger("END", "Trigger_Default_Redirect", 99, "../includes/nxt/back.php");
// Add columns
$ins_c3mregistration->setTable("c3mregistration");
$ins_c3mregistration->addColumn("title", "STRING_TYPE", "POST", "title");
$ins_c3mregistration->addColumn("eventdate", "STRING_TYPE", "POST", "eventdate");
$ins_c3mregistration->addColumn("starttime", "STRING_TYPE", "POST", "starttime");
$ins_c3mregistration->addColumn("endtime", "STRING_TYPE", "POST", "endtime");
$ins_c3mregistration->addColumn("location", "STRING_TYPE", "POST", "location");
$ins_c3mregistration->addColumn("eventdescription", "STRING_TYPE", "POST", "eventdescription");
$ins_c3mregistration->addColumn("orgname", "STRING_TYPE", "POST", "orgname");
$ins_c3mregistration->addColumn("contactfirst", "STRING_TYPE", "POST", "contactfirst");
$ins_c3mregistration->addColumn("contactlast", "STRING_TYPE", "POST", "contactlast");
$ins_c3mregistration->addColumn("email", "STRING_TYPE", "POST", "email");
$ins_c3mregistration->addColumn("officeaddress", "STRING_TYPE", "POST", "officeaddress");
$ins_c3mregistration->addColumn("contactphone", "STRING_TYPE", "POST", "contactphone");
$ins_c3mregistration->addColumn("expectattendance", "STRING_TYPE", "POST", "expectattendance");
$ins_c3mregistration->addColumn("carolcontact", "STRING_TYPE", "POST", "carolcontact");
$ins_c3mregistration->addColumn("notes", "STRING_TYPE", "POST", "notes");
$ins_c3mregistration->setPrimaryKey("id", "NUMERIC_TYPE");

// Make an update transaction instance
$upd_c3mregistration = new tNG_multipleUpdate($conn_connCareer);
$tNGs->addTransaction($upd_c3mregistration);
// Register triggers
$upd_c3mregistration->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_c3mregistration->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_c3mregistration->registerTrigger("END", "Trigger_Default_Redirect", 99, "../includes/nxt/back.php");
// Add columns
$upd_c3mregistration->setTable("c3mregistration");
$upd_c3mregistration->addColumn("title", "STRING_TYPE", "POST", "title");
$upd_c3mregistration->addColumn("eventdate", "STRING_TYPE", "POST", "eventdate");
$upd_c3mregistration->addColumn("starttime", "STRING_TYPE", "POST", "starttime");
$upd_c3mregistration->addColumn("endtime", "STRING_TYPE", "POST", "endtime");
$upd_c3mregistration->addColumn("location", "STRING_TYPE", "POST", "location");
$upd_c3mregistration->addColumn("eventdescription", "STRING_TYPE", "POST", "eventdescription");
$upd_c3mregistration->addColumn("orgname", "STRING_TYPE", "POST", "orgname");
$upd_c3mregistration->addColumn("contactfirst", "STRING_TYPE", "POST", "contactfirst");
$upd_c3mregistration->addColumn("contactlast", "STRING_TYPE", "POST", "contactlast");
$upd_c3mregistration->addColumn("email", "STRING_TYPE", "POST", "email");
$upd_c3mregistration->addColumn("officeaddress", "STRING_TYPE", "POST", "officeaddress");
$upd_c3mregistration->addColumn("contactphone", "STRING_TYPE", "POST", "contactphone");
$upd_c3mregistration->addColumn("expectattendance", "STRING_TYPE", "POST", "expectattendance");
$upd_c3mregistration->addColumn("carolcontact", "STRING_TYPE", "POST", "carolcontact");
$upd_c3mregistration->addColumn("notes", "STRING_TYPE", "POST", "notes");
$upd_c3mregistration->setPrimaryKey("id", "NUMERIC_TYPE", "GET", "id");

// Make an instance of the transaction object
$del_c3mregistration = new tNG_multipleDelete($conn_connCareer);
$tNGs->addTransaction($del_c3mregistration);
// Register triggers
$del_c3mregistration->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Delete1");
$del_c3mregistration->registerTrigger("END", "Trigger_Default_Redirect", 99, "../includes/nxt/back.php");
// Add columns
$del_c3mregistration->setTable("c3mregistration");
$del_c3mregistration->setPrimaryKey("id", "NUMERIC_TYPE", "GET", "id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rsc3mregistration = $tNGs->getRecordset("c3mregistration");
$row_rsc3mregistration = mysql_fetch_assoc($rsc3mregistration);
$totalRows_rsc3mregistration = mysql_num_rows($rsc3mregistration);
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
  <!-- InstanceBeginEditable name="PageHeader" --><?php echo $tNGs->displayValidationRules();?>
  <script src="../includes/nxt/scripts/form.js" type="text/javascript"></script>
  <script src="../includes/nxt/scripts/form.js.php" type="text/javascript"></script>
  <script type="text/javascript">
$NXT_FORM_SETTINGS = {
  duplicate_buttons: true,
  show_as_grid: true,
  merge_down_value: true
}
  </script>
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
              <?php
	echo $tNGs->getErrorMsg();
?>
            <div class="KT_tng">
              <h1>
                <?php 
// Show IF Conditional region1 
if (@$_GET['id'] == "") {
?>
                  <?php echo NXT_getResource("Insert_FH"); ?>
                  <?php 
// else Conditional region1
} else { ?>
                  <?php echo NXT_getResource("Update_FH"); ?>
                  <?php } 
// endif Conditional region1
?>
                C3mregistration </h1>
              <div class="KT_tngform">
                <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
                  <?php $cnt1 = 0; ?>
                  <?php do { ?>
                    <?php $cnt1++; ?>
                    <?php 
// Show IF Conditional region1 
if (@$totalRows_rsc3mregistration > 1) {
?>
                      <h2><?php echo NXT_getResource("Record_FH"); ?> <?php echo $cnt1; ?></h2>
                      <?php } 
// endif Conditional region1
?>
                    <table cellpadding="2" cellspacing="0" class="KT_tngtable">
                      <tr>
                        <td class="KT_th"><label for="title_<?php echo $cnt1; ?>">Title:</label></td>
                        <td><input type="text" name="title_<?php echo $cnt1; ?>" id="title_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['title']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("title");?> <?php echo $tNGs->displayFieldError("c3mregistration", "title", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="eventdate_<?php echo $cnt1; ?>">Event date:</label></td>
                        <td><input type="text" name="eventdate_<?php echo $cnt1; ?>" id="eventdate_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['eventdate']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("eventdate");?> <?php echo $tNGs->displayFieldError("c3mregistration", "eventdate", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="starttime_<?php echo $cnt1; ?>">Start time:</label></td>
                        <td><input type="text" name="starttime_<?php echo $cnt1; ?>" id="starttime_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['starttime']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("starttime");?> <?php echo $tNGs->displayFieldError("c3mregistration", "starttime", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="endtime_<?php echo $cnt1; ?>">End time:</label></td>
                        <td><input type="text" name="endtime_<?php echo $cnt1; ?>" id="endtime_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['endtime']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("endtime");?> <?php echo $tNGs->displayFieldError("c3mregistration", "endtime", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="location_<?php echo $cnt1; ?>">Location:</label></td>
                        <td><input type="text" name="location_<?php echo $cnt1; ?>" id="location_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['location']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("location");?> <?php echo $tNGs->displayFieldError("c3mregistration", "location", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="eventdescription_<?php echo $cnt1; ?>">Event description:</label></td>
                        <td><textarea name="eventdescription_<?php echo $cnt1; ?>" id="eventdescription_<?php echo $cnt1; ?>" cols="50" rows="5"><?php echo KT_escapeAttribute($row_rsc3mregistration['eventdescription']); ?></textarea>
                            <?php echo $tNGs->displayFieldHint("eventdescription");?> <?php echo $tNGs->displayFieldError("c3mregistration", "eventdescription", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="orgname_<?php echo $cnt1; ?>">Organization name:</label></td>
                        <td><input type="text" name="orgname_<?php echo $cnt1; ?>" id="orgname_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['orgname']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("orgname");?> <?php echo $tNGs->displayFieldError("c3mregistration", "orgname", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="contactfirst_<?php echo $cnt1; ?>">Contact first:</label></td>
                        <td><input type="text" name="contactfirst_<?php echo $cnt1; ?>" id="contactfirst_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['contactfirst']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("contactfirst");?> <?php echo $tNGs->displayFieldError("c3mregistration", "contactfirst", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="contactlast_<?php echo $cnt1; ?>">Contact last:</label></td>
                        <td><input type="text" name="contactlast_<?php echo $cnt1; ?>" id="contactlast_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['contactlast']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("contactlast");?> <?php echo $tNGs->displayFieldError("c3mregistration", "contactlast", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="email_<?php echo $cnt1; ?>">Email:</label></td>
                        <td><input type="text" name="email_<?php echo $cnt1; ?>" id="email_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['email']); ?>" size="32" maxlength="150" />
                            <?php echo $tNGs->displayFieldHint("email");?> <?php echo $tNGs->displayFieldError("c3mregistration", "email", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="officeaddress_<?php echo $cnt1; ?>">Office address:</label></td>
                        <td><input type="text" name="officeaddress_<?php echo $cnt1; ?>" id="officeaddress_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['officeaddress']); ?>" size="32" maxlength="255" />
                            <?php echo $tNGs->displayFieldHint("officeaddress");?> <?php echo $tNGs->displayFieldError("c3mregistration", "officeaddress", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="contactphone_<?php echo $cnt1; ?>">Contact phone:</label></td>
                        <td><input type="text" name="contactphone_<?php echo $cnt1; ?>" id="contactphone_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['contactphone']); ?>" size="32" maxlength="100" />
                            <?php echo $tNGs->displayFieldHint("contactphone");?> <?php echo $tNGs->displayFieldError("c3mregistration", "contactphone", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="expectattendance_<?php echo $cnt1; ?>">Expected attendance:</label></td>
                        <td><input type="text" name="expectattendance_<?php echo $cnt1; ?>" id="expectattendance_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['expectattendance']); ?>" size="32" maxlength="50" />
                            <?php echo $tNGs->displayFieldHint("expectattendance");?> <?php echo $tNGs->displayFieldError("c3mregistration", "expectattendance", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="carolcontact_<?php echo $cnt1; ?>">Carol contact:</label></td>
                        <td><input type="text" name="carolcontact_<?php echo $cnt1; ?>" id="carolcontact_<?php echo $cnt1; ?>" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['carolcontact']); ?>" size="10" maxlength="10" />
                            <?php echo $tNGs->displayFieldHint("carolcontact");?> <?php echo $tNGs->displayFieldError("c3mregistration", "carolcontact", $cnt1); ?> </td>
                      </tr>
                      <tr>
                        <td class="KT_th"><label for="notes_<?php echo $cnt1; ?>">Notes:</label></td>
                        <td><textarea name="notes_<?php echo $cnt1; ?>" id="notes_<?php echo $cnt1; ?>" cols="50" rows="5"><?php echo KT_escapeAttribute($row_rsc3mregistration['notes']); ?></textarea>
                            <?php echo $tNGs->displayFieldHint("notes");?> <?php echo $tNGs->displayFieldError("c3mregistration", "notes", $cnt1); ?> </td>
                      </tr>
                    </table>
                    <input type="hidden" name="kt_pk_c3mregistration_<?php echo $cnt1; ?>" class="id_field" value="<?php echo KT_escapeAttribute($row_rsc3mregistration['kt_pk_c3mregistration']); ?>" />
                    <?php } while ($row_rsc3mregistration = mysql_fetch_assoc($rsc3mregistration)); ?>
                  <div class="KT_bottombuttons">
                    <div>
                      <?php 
      // Show IF Conditional region1
      if (@$_GET['id'] == "") {
      ?>
                        <input type="submit" name="KT_Insert1" id="KT_Insert1" value="<?php echo NXT_getResource("Insert_FB"); ?>" />
                        <?php 
      // else Conditional region1
      } else { ?>
                        <div class="KT_operations">
                          <input type="submit" name="KT_Insert1" value="<?php echo NXT_getResource("Insert as new_FB"); ?>" onclick="nxt_form_insertasnew(this, 'id')" />
                        </div>
                        <input type="submit" name="KT_Update1" value="<?php echo NXT_getResource("Update_FB"); ?>" />
                        <input type="submit" name="KT_Delete1" value="<?php echo NXT_getResource("Delete_FB"); ?>" onclick="return confirm('<?php echo NXT_getResource("Are you sure?"); ?>');" />
                        <?php }
      // endif Conditional region1
      ?>
                      <input type="button" name="KT_Cancel1" value="<?php echo NXT_getResource("Cancel_FB"); ?>" onclick="return UNI_navigateCancel(event, '../includes/nxt/back.php')" />
                    </div>
                  </div>
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
