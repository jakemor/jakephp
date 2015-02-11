<?php
// Update .htaccess file if you decide to move project from the 
// root directory. RewriteRule on line 4 should read: 
// RewriteRule ^([^?]*)$ /<your-path>/index.php?args=$1 [NC,L,QSA]
// Defaults to: RewriteRule ^([^?]*)$ /index.php?args=$1 [NC,L,QSA]

$project_name = "Project"; 
$db_password = "admin"; 
$error_reporting = TRUE; 
$default_view_controller = "home";
$notfound_view_controller = "notfound";

?>
