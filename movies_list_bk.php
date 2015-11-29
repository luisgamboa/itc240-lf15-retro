<?php
//customers_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
$sql = "select * from horror_Movies2";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p id="p-test">';
        echo 'Ranking:<b>' . $row['RankMoviesID'] . '</b> ' . '</br>';
        echo 'Title: <b>' . $row['TitleMovie'] . '</b> ' . '</br>';

        
        echo'<a href="movies_view.php?id=' . $row['RankMoviesID'] . '">' . 'Read More' . '</a>';
        
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}
    //realease web server resources
    @mysqli_free_result($result);
    
    //close conection to mysql
    mysqli_close($iConn);


?>
<?php include 'includes/footer.php';?>