<?php
//config.php

define('DEBUG',true); #we want to see all errors

define('SECURE',false); #force secure, https, for all site pages

define('PREFIX', 'retro_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

/* 
 *   Virtual (web) 'root' of application for images, JS & CSS files
 *   
 *   IF SECURE, MUST BE https://
 *   Contact hosting company for assistance:
 *   http://wiki.dreamhost.com/Secure_Hosting
*/
define('VIRTUAL_PATH', 'http://lgamboa.com/itc240/sandbox/app2/'); 

define('PHYSICAL_PATH', '/home/luigam1/lgamboa.com/itc240/sandbox/app2/'); # Physical (PHP) 'root' of application for file & upload reference

# END GENERAL SETTINGS, START BOOTSTRAP CODE ---------------------------

/*
 * reference required include files here
 */
include 'credentials.php'; //stores database login info
include 'common.php'; //stores all unsightly application functions, etc.
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder

//This defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//force secure website
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}

define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

define('ADMIN_PATH', VIRTUAL_PATH); # Could change to sub folder

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

# END BOOTSTRAP CODE, START SITE SPECIFIC DATA ---------------------------


//this allows us to add unique info to our pages
switch(THIS_PAGE){
    
    case "index.php":
        $title = "Index Us Title Tag";
        $pageID = "Index Us Page ID";
        break;
        
    case "about-us.php":
        $title = "About Us Title Tag";
        $pageID = "About Us Page ID";
        break;
        
    case "links.php":
        $title = "My Links Title Tag";
        $pageID = "My Links Page ID";
        break;
        
    case "daily.php":
        $title = "Daily special Tag";
        $pageID = "Daily special ID";
        break;
        
    case "contact.php":
        $title = "Contact special Tag";
        $pageID = "Contact special ID";
        break;
        
    case "movies_list.php":
        $title = "List of the Best Horror Movies in  history";
        $pageID = "Best Horror Movies";
        break;
        
    
    default:
        $title = THIS_PAGE;    
        $pageID = "Retro Diner";
        

}//END SWITCH

//HERE ARE OUR NAVIGATION PAGES
$nav1['index.php'] = 'Home';
$nav1['about-us.php'] = 'About';
$nav1['daily.php'] = 'Daily';
$nav1['movies_list.php'] = 'Movies';
//$nav1['links.php'] = 'Links';
$nav1['contact.php'] = 'Contact';



/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/


if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
	$adminWidget = '<li><a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a></li>';
	$adminWidget .= '<li><a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a></li>';
}else{//show login (YOU MAY WANT TO SET TO EMPTY STRING FOR SECURITY)
    $adminWidget = '<li><a href="' . ADMIN_PATH . 'admin_login.php">LOGIN</a></li>';
}

/*
 * These variables, when added to the header.php and footer.php files, 
 * allow custom JS or CSS scripts to be loaded into <head> element and 
 * just before the closing body tag, respectively
 */
$loadhead = '';
$loadfoot = '';
