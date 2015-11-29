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
    $Feedback = '<p>This title does not exist</p>';
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