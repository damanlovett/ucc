<?php require_once('../../Connections/members.php'); ?>
<?php require_once('../../ScriptLibrary/incPureUpload.php'); ?>
<?php require_once('../../ScriptLibrary/incAddOnDelete.php'); ?>
<?php require_once('../../Connections/members.php'); ?>
<?php require_once('../includefiles/init.php'); ?>
<?php require_once('../../ScriptLibrary/incPureUpload.php'); ?>
<?php
// Pure PHP Upload 2.1.3
if (isset($HTTP_GET_VARS['GP_upload'])) {
	$ppu = new pureFileUpload();
	$ppu->path = "../../upload";
	$ppu->extensions = "";
	$ppu->formName = "upload";
	$ppu->storeType = "file";
	$ppu->sizeLimit = "";
	$ppu->nameConflict = "over";
	$ppu->requireUpload = "true";
	$ppu->minWidth = "";
	$ppu->minHeight = "";
	$ppu->maxWidth = "";
	$ppu->maxHeight = "";
	$ppu->saveWidth = "";
	$ppu->saveHeight = "";
	$ppu->timeout = "600";
	$ppu->progressBar = "";
	$ppu->progressWidth = "300";
	$ppu->progressHeight = "100";
	$ppu->checkVersion("2.1.3");
	$ppu->doUpload();
}
$GP_uploadAction = $HTTP_SERVER_VARS['PHP_SELF'];
if (isset($HTTP_SERVER_VARS['QUERY_STRING'])) {
  if (!eregi("GP_upload=true", $HTTP_SERVER_VARS['QUERY_STRING'])) {
		$GP_uploadAction .= "?".$HTTP_SERVER_VARS['QUERY_STRING']."&GP_upload=true";
	} else {
		$GP_uploadAction .= "?".$HTTP_SERVER_VARS['QUERY_STRING'];
	}
} else {
  $GP_uploadAction .= "?"."GP_upload=true";
}

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

$currentPage = $_SERVER["PHP_SELF"];

// Delete Before Record Addon 1.0.6
if ((isset($_GET['delete'])) && ($_GET['delete'] != "")) {
	mysql_select_db($database_members, $members);
	$dbr_result = mysql_query("SELECT doc_id, title, doc_location FROM documents WHERE documents.doc_id=".$_GET['delete'], $members) or die(mysql_error());
	$dbr = new deleteFileBeforeRecord();
	$dbr->path = "../../upload";
	$dbr->pathThumb = "";
	$dbr->naming = "prefix";
	$dbr->suffix = "";
	$dbr->checkVersion("1.0.6");
	while ($dbr->sqldata = mysql_fetch_array($dbr_result)) {
		$dbr->deleteFile();
	}
}

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

if (isset($editFormAction)) {
  if (isset($HTTP_SERVER_VARS['QUERY_STRING'])) {
	  if (!eregi("GP_upload=true", $HTTP_SERVER_VARS['QUERY_STRING'])) {
  	  $editFormAction .= "&GP_upload=true";
		}
  } else {
    $editFormAction .= "?GP_upload=true";
  }
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "upload")) {
  $insertSQL = sprintf("INSERT INTO documents (doc_id, title, type, `description`, doc_location, created_by) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['doc_id'], "text"),
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['type'], "text"),
                       GetSQLValueString($_POST['description'], "text"),
                       GetSQLValueString($_POST['file'], "text"),
                       GetSQLValueString($_POST['created_by'], "text"));

  mysql_select_db($database_members, $members);
  $Result1 = mysql_query($insertSQL, $members) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_GET['delete'])) && ($_GET['delete'] != "")) {
  $deleteSQL = sprintf("DELETE FROM documents WHERE doc_id=%s",
                       GetSQLValueString($_GET['delete'], "text"));

  mysql_select_db($database_members, $members);
  $Result1 = mysql_query($deleteSQL, $members) or die(mysql_error());
}

mysql_select_db($database_members, $members);
$query_rsDocs = "SELECT * FROM documents";
$rsDocs = mysql_query($query_rsDocs, $members) or die(mysql_error());
$row_rsDocs = mysql_fetch_assoc($rsDocs);
$totalRows_rsDocs = mysql_num_rows($rsDocs);

mysql_select_db($database_members, $members);
$query_rsDocTypes = "SELECT * FROM document_type";
$rsDocTypes = mysql_query($query_rsDocTypes, $members) or die(mysql_error());
$row_rsDocTypes = mysql_fetch_assoc($rsDocTypes);
$totalRows_rsDocTypes = mysql_num_rows($rsDocTypes);

$maxRows_rsDocsList = 15;
$pageNum_rsDocsList = 0;
if (isset($_GET['pageNum_rsDocsList'])) {
  $pageNum_rsDocsList = $_GET['pageNum_rsDocsList'];
}
$startRow_rsDocsList = $pageNum_rsDocsList * $maxRows_rsDocsList;

mysql_select_db($database_members, $members);
$query_rsDocsList = "SELECT documents.id, documents.doc_id, documents.title, documents.type, documents.created_by, DATE_FORMAT(documents.create_date,'%M %d, %Y at %r') as 'documents.create_date', documents.doc_location, documents.active FROM documents";
$query_limit_rsDocsList = sprintf("%s LIMIT %d, %d", $query_rsDocsList, $startRow_rsDocsList, $maxRows_rsDocsList);
$rsDocsList = mysql_query($query_limit_rsDocsList, $members) or die(mysql_error());
$row_rsDocsList = mysql_fetch_assoc($rsDocsList);

if (isset($_GET['totalRows_rsDocsList'])) {
  $totalRows_rsDocsList = $_GET['totalRows_rsDocsList'];
} else {
  $all_rsDocsList = mysql_query($query_rsDocsList);
  $totalRows_rsDocsList = mysql_num_rows($all_rsDocsList);
}
$totalPages_rsDocsList = ceil($totalRows_rsDocsList/$maxRows_rsDocsList)-1;

$queryString_rsDocsList = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsDocsList") == false && 
        stristr($param, "totalRows_rsDocsList") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsDocsList = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rsDocsList = sprintf("&totalRows_rsDocsList=%d%s", $totalRows_rsDocsList, $queryString_rsDocsList);
?>
<?php require_once('../includefiles/memberaccess.php'); ?>
<?php require_once('../includefiles/init.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administration - Documents</title>
<script type="text/javascript" src="/admin/includefiles/tabber.js"></script>
<link href="../styles/mainStyles.css" rel="stylesheet" type="text/css" />
<link href="../styles/sddm.css" rel="stylesheet" type="text/css" />
<link href="../styles/tab.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

/* Optional: Temporarily hide the "tabber" class so it does not "flash"
   on the page as plain HTML. After tabber runs, the class is changed
   to "tabberlive" and it will appear. */

document.write('<style type="text/css">.tabber{display:none;}<\/style>');
</script>
<script language='javascript' src='../../ScriptLibrary/incPureUpload.js'></script>
<style type="text/css">
<!--
form {
	background-color: #FFFFFF;
	border: 1px solid #999999;
}
-->
</style>
<script language='javascript' src='../../ScriptLibrary/incPureUpload.js'></script>
</head>

<body>
<div class="headerbarmembers">
  <?php require_once('../includefiles/userInfo.php'); ?>
    <div align="left"></div>
</div>

<div class="mainbody">
  <div>
<?php require_once('../includefiles/pageNavmembers.php'); ?>
  </div>
  <div class="maincontent">
    <div class="pageheader"><span class="pagetitleDocuments">Document Manager </span> </div>
	<h4 class="pageBGDocuments"><img src="../images/imgCreateRed.gif" alt="" width="14" height="14" /> Document Upload </h4>
	<form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="upload" id="upload" onsubmit="checkFileUpload(this,'',true,'','','','','','','');return document.MM_returnValue">
	  <table width="100%" cellpadding="8" bgcolor="#FFFFFF">
        <tr>
          <td width="25%"><label for="textfield"><strong>Title:<br />
          </strong></label>
          <input name="title" type="text" class="smallbutton" id="title" size="35" /></td>
          <td width="25%" nowrap="nowrap"> <strong>Type:<br />
            <label>              </label>
          </strong>
            <label><select name="type" class="smallbutton" id="type">
              <option value="Select Doc Type"></option>
              <?php
do {  
?>
              <option value="<?php echo $row_rsDocTypes['type']?>"><?php echo $row_rsDocTypes['type']?></option>
              <?php
} while ($row_rsDocTypes = mysql_fetch_assoc($rsDocTypes));
  $rows = mysql_num_rows($rsDocTypes);
  if($rows > 0) {
      mysql_data_seek($rsDocTypes, 0);
	  $row_rsDocTypes = mysql_fetch_assoc($rsDocTypes);
  }
?>
            </select>
          </label></td>
          <td width="25%"><input name="file" type="file" class="smallbutton" onchange="checkOneFileUpload(this,'',true,'','','','','','','')" /></td>
          <td width="25%"><input name="Submit" type="submit" class="smallbutton" value="Upload File" /></td>
        </tr>
        <tr>
          <td colspan="2"><label for="label"><strong>Description:</strong></label>
            <br />
          <textarea name="description" cols="45" rows="5" id="description"></textarea></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table><label for="description"></label>
      <br />
        
      <input name="created_by" type="hidden" id="created_by" value="<?php echo $_SESSION['user_id']; ?>" />
      <input name="doc_id" type="hidden" id="doc_id" value="<?php echo create_guid();?>" />
	          <input type="hidden" name="MM_insert" value="upload">
	</form>
	<br />
    <table width="100%" border="0" cellpadding="3" cellspacing="0" class="tableborder">
      <tr>
        <td class="pageBGDocumentTable">&nbsp;<?php echo ($startRow_rsDocsList + 1) ?> to <?php echo min($startRow_rsDocsList + $maxRows_rsDocsList, $totalRows_rsDocsList) ?> of <?php echo $totalRows_rsDocsList ?> </td>
        <td class="pageBGDocumentTable">&nbsp;</td>
        <td class="pageBGDocumentTable">&nbsp;</td>
        <td class="pageBGDocumentTable">&nbsp;</td>
        <td class="pageBGDocumentTable">&nbsp;
          <table width="50%" border="0" align="center" cellpadding="3" cellspacing="0">
            <tr>
              <td width="23%" align="center"><?php if ($pageNum_rsDocsList > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_rsDocsList=%d%s", $currentPage, 0, $queryString_rsDocsList); ?>">First</a>
                  <?php } // Show if not first page ?>              </td>
              <td width="31%" align="center"><?php if ($pageNum_rsDocsList > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_rsDocsList=%d%s", $currentPage, max(0, $pageNum_rsDocsList - 1), $queryString_rsDocsList); ?>">Previous</a>
                  <?php } // Show if not first page ?>              </td>
              <td width="23%" align="center"><?php if ($pageNum_rsDocsList < $totalPages_rsDocsList) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_rsDocsList=%d%s", $currentPage, min($totalPages_rsDocsList, $pageNum_rsDocsList + 1), $queryString_rsDocsList); ?>">Next</a>
                  <?php } // Show if not last page ?>              </td>
              <td width="23%" align="center"><?php if ($pageNum_rsDocsList < $totalPages_rsDocsList) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_rsDocsList=%d%s", $currentPage, $totalPages_rsDocsList, $queryString_rsDocsList); ?>">Last</a>
                  <?php } // Show if not last page ?>              </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <th nowrap="nowrap"><div align="left">Title</div></th>
        <th nowrap="nowrap"><div align="left">Type</div></th>
        <th nowrap="nowrap"><div align="left">Created on </div></th>
        <th colspan="2" nowrap="nowrap"><div align="left">Delete</div>          
          <div align="left"></div></th>
      </tr>
      <?php do { ?>
        <tr bgcolor="#FFFFFF" class="tableRowColor">
          <td nowrap="nowrap"><div align="left"><a href="/admin/upload/<?php echo $row_rsDocsList['doc_location']; ?>"><?php echo $row_rsDocsList['title']; ?></a></div></td>
          <td><div align="left"><?php echo $row_rsDocsList['type']; ?></div></td>
          <td><div align="left"><?php echo $row_rsDocsList['documents.create_date']; ?></div></td>
          <td colspan="2"><a href="delete.php?delete=<?php echo $row_rsDocsList['doc_id']; ?>"><img src="../../images/imgAdminDelete.gif" alt="Delete" width="14" height="14" border="0" /></a>
          <div align="left"></div></td></tr>
        <?php } while ($row_rsDocsList = mysql_fetch_assoc($rsDocsList)); ?>
    </table>
  </div>
  <div class="cleartable"></div>
</div>
<div class="footer">
   Copyright &copy; 2006 Site Designed by <a href="http://lovettcreations.org">LovettCreations.org</a>. LCCM is software designed and owned by Lovett Creations. All Rights Reserved</div>

</body>
</html>
<?php
mysql_free_result($rsDocs);

mysql_free_result($rsDocTypes);

mysql_free_result($rsDocsList);

mysql_free_result($rsUpload);
?>
