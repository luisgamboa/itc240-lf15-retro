<?php
//config.php

define('DEBUG',TRUE); #we want to see all errors

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

include 'common.php'; //stores all unsightly application functions, etc.
include 'credentials.php;'//credentials
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder

/* automatic path settings - use the following path settings for placing all code in one application folder */ 
define('VIRTUAL_PATH', 'http://lgamboa.com/retro/'); # Virtual (web) 'root' of application for images, JS & CSS files
define('PHYSICAL_PATH', '/home/luigam1/lgamboa.com/retro/'); # Physical (PHP) 'root' of application for file & upload reference
define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching



//THIS DEFINES THE CURRENT FILE NAME

define('THIS_PAGE',basename( $_SERVER['PHP_SELF']) );//it will create a constant, are simple data

//echo THIS_PAGE;//constan wont have a dollar sign

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
        
        
        
    
    
    default:
        $title = THIS_PAGE;    
        $pageID = "Retro Diner";
        

}//END SWITCH

//HERE ARE OUR NAVIGATION PAGES
$nav1['index.php'] = 'Home';
$nav1['about-us.php'] = 'About';
$nav1['daily.php'] = 'Daily';
$nav1['links.php'] = 'Links';



/*

				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
			


foreach($nav1 as $link => $label){

    echo "link is $link and label is $label <br />";

}
*/

//echo $title;

//die;

/*
Creates links inside the header.php file
*/


    
    //<li><a herf="LINK">LABEL</a></li>
    
    //<li class="active"><a herf="LINK">LABEL</a></li>



function makeLinks($arr,$prefix='',$suffix='',$exception='')
{
    $myReturn = '';
    foreach($arr as $link => $label)
    {
        
        
        if(THIS_PAGE == $link )
        {//current file gets active class
            $myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' . $suffix;  
        }else{
            $myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;  
            
        }

    }
    
    return $myReturn;
}//END OF MAKELINKS() FUNCTION

//new code
/**
 * generic error handling function for hiding db errors, etc.
 *
 * Change the socks reference and any HTML to suit
 *
 * @param string $myFile File from which error emitted
 * @param string $myLine Line where error can be found
 * @param string $errorMsg Message to be shown to admin only
 * @return void
 * @see dbIn()
 * @todo none
 */

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}

/**
 * Wrapper function for processing data pulled from db
 *
 * Forward slashes are added to MySQL data upon entry to prevent SQL errors.  
 * Using our dbOut() function allows us to encapsulate the most common functions for removing  
 * slashes with the PHP stripslashes() function, plus the trim() function to remove spaces.
 *
 * @param string $str data as pulled from MySQL
 * @return $str data cleaned of slashes, spaces around string, etc.
 * @see dbIn()
 * @todo none
 */
function dbOut($str)
{
	if($str!=""){$str = stripslashes(trim($str));}//strip out slashes entered for SQL safety
	return $str;
} #End dbOut()





?>