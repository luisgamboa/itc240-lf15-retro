<?php
//customers_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>

    
<?php
    
//reference images for pager
$prev = '<img src="' . VIRTUAL_PATH . 'images/arrow_prev.gif" border="0" />';
$next = '<img src="' . VIRTUAL_PATH . 'images/arrow_next.gif" border="0" />';
    
    
$sql = "select * from horror_Movies2";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
// Create a connection
// connection comes first in mysqli (improved) function
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

// Create instance of new 'pager' class
$myPager = new Pager(10,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);  //load SQL, pass in existing connection, add offset
    
//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    if($myPager->showTotal()==1){$itemz = "Title";}else{$itemz = "Tittles";}  //deal with plural
        echo '<h2 id="h2-test" align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . '!</h2>';
    
	
    while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<p id="p-test">';
        echo 'Ranking:<b>' . $row['RankMoviesID'] . '</b> ' . '</br>';
        echo 'Title: <b>' . $row['TitleMovie'] . '</b> ' . '</br>';

        
        echo'<a href="movies_view.php?id=' . $row['RankMoviesID'] . '">' . 'Read More' . '</a>';
        
        
        echo '</p>';
	}
	echo $myPager->showNAV(); # show paging nav, only if enough records	 
    


}else{//inform there are no records
    echo '<p>There are currently no titles</p>';
}
    //realease web server resources
    @mysqli_free_result($result);
    
    //close conection to mysql
    mysqli_close($iConn);


?>
<?php include 'includes/footer.php';?>