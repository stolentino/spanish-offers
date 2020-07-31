<?php
include 'inc/header.php';

echo '<h1>Welcome to our<br />ZMOT Spanish Offers</h1>';
echo '<p>Enter the requested inputs and create your offers.</p>';
//echo '<p class="col-md-1 text-center"><a class="btn btn-default btn-lg" href="play.php" role="button">Play</a></p>';
echo '<p class="col-md-6 text-center"><a class="btn btn-default btn-lg" href="lease.php" role="button">Lease</a></p>';
echo '<p class="col-md-6 text-center"><a class="btn btn-default btn-lg" href="rebate.php" role="button">Rebate</a></p>';

echo '<br />';
//echo '<h2>Recheck Your Offers</h2>';
//var_dump($_COOKIE);
/*if(isset($_COOKIE)){
    foreach($_COOKIE as $key => $value){
        if($key != 'PHPSESSID'){
           echo '<div class="form-group">';
           echo '<a class-"btn btn-info" href="inc/cookie-lease.php?read=' . urlencode($key) . '">';
           echo substr($key, 0, -10);
           echo ' ';
           echo date('d M Y H:i:s', (int) substr($key, -10));
           echo '</a>';
           echo '<a class-"btn btn-danger" href="inc/cookie-lease.php?delete=' . urlencode($key) . '">';
           echo 'X</a>';
           echo '</div>';    
        }
    }
}*/


include 'inc/footer.php';