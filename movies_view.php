<?php
//customers_view.php - shows of details of a single customer
?>
<?php include 'includes/config.php';?>

<?php

//process querystring here
if(isset($_GET['id']))
{// process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
    
}else{//redirect to safe page
    header('Location:movies_list.php');   
}

$sql = "select * from horror_Movies2 where RankMoviesID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $TitleMovie = stripslashes($row['TitleMovie']);
        $RatingMovie = stripslashes($row['RatingMovie']);
        $ReleasedMovie = stripslashes($row['ReleasedMovie']);
        $title = "Title Page for " . $TitleMovie;
        $DescriptionMovie = stripslashes($row['DescriptionMovie']);
        $GenreMovie = stripslashes($row['GenreMovie']);
        $DirectedMovie = stripslashes($row['DirectedMovie']);
        $pageID = $TitleMovie;
        $Feedback = '';//no feedback necesary
    }    

}else{//inform there are no records
    $Feedback = '<p>This customer does not exist</p>';
}



?>

<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    
    
    
    
    if($Feedback == '')
    {//data exists, show it
        
        echo '<p id="p-test">';
        echo '<img src="uploads/movies' . $id . '.jpg" />' . '</br>';;
        echo 'Rating of the Movie: <b>' . $RatingMovie . '</b> ' . '</br>';
        echo 'Released: <b>' . $ReleasedMovie . '</b> ' . '</br>';
        echo 'Description of the Movie: <b>' . $DescriptionMovie . '</b> ' . '</br>';
        echo 'Genre of the Movie: <b>' . $GenreMovie . '</b> ' . '</br>';
        echo 'Directed by: <b>' . $DirectedMovie . '</b> ' . '</br>';

 		echo '<img src="' . VIRTUAL_PATH . 'uploads/movies' . dbOut($row['RankMoviesID']) . '_thumb.jpg" />';

    if(startSession() && isset($_SESSION["AdminID"]))
        {# only admins can see 'peek a boo' link:
            echo '<p align="center"><a href="' . VIRTUAL_PATH . 'upload_form.php?' . $_SERVER['QUERY_STRING'] . '">UPLOAD IMAGE</a></p>';
            /*
            # if you wish to overwrite any of these options on the view page, 
            # you may uncomment this area, and provide different parameters:						
            echo '<div align="center"><a href="' . VIRTUAL_PATH . 'upload_form.php?' . $_SERVER['QUERY_STRING']; 
            echo '&imagePrefix=customer';
            echo '&uploadFolder=upload/';
            echo '&extension=.jpg';
            echo '&createThumb=TRUE';
            echo '&thumbWidth=50';
            echo '&thumbSuffix=_thumb';
            echo '&sizeBytes=100000';
            echo '">UPLOAD IMAGE</a></div>';
            */						

        }
        if(isset($_GET['msg']))
        {# msg on querystring implies we're back from uploading new image
            $msgSeconds = (int)$_GET['msg'];
            $currSeconds = time();
            if(($msgSeconds + 2)> $currSeconds)
            {//link only visible once, due to time comparison of qstring data to current timestamp
                echo '<p align="center"><script type="text/javascript">';
                echo 'document.write("<form><input type=button value=\'IMAGE UPLOADED! CLICK TO REFRESH PAGE!\' onClick=history.go()></form>")</scr';
                echo 'ipt></p>';
            }
        }

        /*
        echo'<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a>';
        */

        echo '</p>';
        
    }else{//warn user no data
        echo $Feedback;
    }
    

    
    echo '<p id="p-test"><a href="movies_list.php">Go Back<a/></p>';

    //realease web server resources
    @mysqli_free_result($result);
    
    //close conection to mysql
    mysqli_close($iConn);


?>
<?php include 'includes/footer.php';?>