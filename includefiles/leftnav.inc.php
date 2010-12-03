	<a name="links" id="links"></a>
	<?php 
	if ($_GET['view'] == 'faculty') { virtual('/career/menus/FACleftnav.php'); 
	} elseif  ($_GET['view'] == 'parents') {virtual ('/career/menus/PARleftnav.php');
	} elseif  ($_GET['view'] == 'employer'){virtual ('/career/menus/EMPleftnav.php'); 
	} else {virtual ('/career/menus/STUltexploring.php'); 
	}  ?>
	
	