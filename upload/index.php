<?php require_once('incPureUpload.php'); ?>
<?php
// Pure PHP Upload 2.1.3
if (isset($HTTP_GET_VARS['GP_upload'])) {
	$ppu = new pureFileUpload();
	$ppu->path = "uploadfiles";
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

$currentPage = $_SERVER["PHP_SELF"];
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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administration - Documents</title>

<body>

	<form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="upload" id="upload" onsubmit="checkFileUpload(this,'',true,'','','','','','','');return document.MM_returnValue">
	  <table width="90%" border="0" cellpadding="8" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td width="25%"><label for="textfield"><strong>Title:<br />
          </strong></label>
          <input name="title" type="text" id="title" size="35" /></td>
          <td width="25%" nowrap="nowrap"> <strong></td>
          <td width="25%"><input name="file" type="file" onchange="checkOneFileUpload(this,'',true,'','','','','','','')" /></td>
          <td width="25%"><input name="Submit" type="submit" value="Upload File" /></td>
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
        
	          <input type="hidden" name="MM_insert" value="upload">
	</form>
	
	
	</body>
</html>
