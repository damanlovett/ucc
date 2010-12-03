	<?php 
	if ($_GET['view'] == 'faculty') { virtual('/career/menus/FACquick.php'); 
	} elseif  ($_GET['view'] == 'parents') {virtual ('/career/menus/PARquick.php'); 
	} elseif  ($_GET['view'] == 'employer'){virtual ('/career/menus/EMPquick.php'); 
	} else {virtual ('/career/menus/STUquick.php');
	}?>