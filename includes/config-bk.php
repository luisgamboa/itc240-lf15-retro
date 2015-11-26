<?php
//config.php

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







?>