<?php

/*-------------------------------------------------------+
| Content Management System
| http://www.phphelptutorials.com/
+--------------------------------------------------------+
| Author: David Carr  Email: dave@daveismyname.co.uk
+--------------------------------------------------------+*/

ob_start();
session_start();

// db properties live
// define('DBHOST','db574413207.db.1and1.com');
// define('DBUSER','dbo574413207');
// define('DBPASS','kino1708');
// define('DBNAME','db574413207');

// db properties local
define('DBHOST','127.0.0.1');
define('DBUSER','root');
define('DBPASS','root');
define('DBNAME','hogcms');

// make a connection to mysql here
$conn = @mysql_connect (DBHOST, DBUSER, DBPASS);
$conn = @mysql_select_db (DBNAME);
if(!$conn){
	die( "Sorry! There seems to be a problem connecting to our database.");
}

// define site path
define('DIR','http://hog.dev/');
// define('DIR','http://www.houseofgroovedj.com/cms/');
define('DIR','http://hog.dev/cms/');

// define admin site path
// define('DIRADMIN','http://www.houseofgroovedj.com/cms/admin/');
define('DIRADMIN','http://hog.dev/cms/admin/');

// define site title for top of the browser
define('SITETITLE','Colorado Springs DJ');

//define include checker
define('included', 1);

include('functions.php');
?>
