<?php
	include_once "function.php";
?>
<!-- browse categories -->

<div id='upload_result'>
    <?php 
        if(isset($_REQUEST['result']) && $_REQUEST['result']!=0)
        {		
            echo upload_error($_REQUEST['result']);
        }
    ?>
</div>
<br/><br/>

<!-- Query media - MOST VIEWS-->
<h1 class="text-center">Most Viewed</h1>
<?php

    $query = "SELECT * from media where username != 'NULL' ORDER BY viewcount DESC LIMIT 5"; 
    $result = mysql_query( $query );
    if (!$result){
       die ("Could not query the media table in the database: <br />". mysql_error());
    }

?>

<?php include('display_media.php');?>

<!-- Query media - NEWEST-->
<h1 class="text-center">Recent Uploads</h1>
<?php

    $query = "SELECT * from media where username != 'NULL' ORDER BY upload_time DESC LIMIT 5"; 
    $result = mysql_query( $query );
    if (!$result){
       die ("Could not query the media table in the database: <br />". mysql_error());
    }

?>

<?php include('display_media.php');?>

<!-- Query media - Recently Viewed-->
<h1 class="text-center">Recently Viewed</h1>
<?php

    $query = "SELECT * from media where username != 'NULL' ORDER BY last_access DESC LIMIT 5"; 
    $result = mysql_query( $query );
    if (!$result){
       die ("Could not query the media table in the database: <br />". mysql_error());
    }

?>

<?php include('display_media.php');?>


