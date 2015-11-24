
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h1 id="h1-test"><?=$pageID?></h1>
<?php
  
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//$sql = "select * from test_Customers";
$sql = "select * from horror_Movies2 where RankMoviesID > 0";//we are displaying the number    
    
$result = mysqli_query($iConn,$sql);
    
if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';

        echo 'Title: <b>' . $row['FirTitlestName'] . '</b> ';
        echo 'Rating: <b>' . $row['Rating'] . '</b> ';
        echo 'Realesed: <b>' . $row['Realesed'] . '</b> ';
        echo 'Description: <b>' . $row['Description'] . '</b> ';
        echo 'Directed: <b>' . $row['Directed'] . '</b> ';

        echo '</p>';

    }   
    
}else{//inform no records
    echo'<p>Currently no customer records <p>';
}
    

    

?>

<?php include 'includes/footer.php';?>