	<?php 
	if ($_GET['view'] == 'faculty') {echo '<img src="/career/images/banners/bannFaculty3.jpg" alt="" width="581" height="136" />';
	} elseif  ($_GET['view'] == 'parents') {echo '<img src="/career/images/banners/bannParents2.jpg" alt="Parents" />';
	} elseif  ($_GET['view'] == 'employer'){echo '<img src="/career/images/banners/bannEmployer4.jpg" alt="Employer" />';
	} else {echo '<img src="/career/images/banners/bannStudents.jpg" alt="Students" />'; 
	}  ?>