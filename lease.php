<?php
session_start();
$total = 8;
$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if(empty($page)){
	$_SESSION['word'][1] = '';
	unset($_SESSION['word'][2]);
	session_destroy();
	$page = 1;
}

if(isset($_POST['word'])){
	$_SESSION['word'][$page-1] = filter_input(INPUT_POST, 'word', FILTER_SANITIZE_STRING);
	//var_dump($_SESSION);
}

if ($page > $total) {
    //header('location: story.php');
    header('location: lease-offer.php');
    exit;
}

include 'inc/header.php';
echo "<h1>Create Lease Offer</h1>";
echo "<h2>Step $page of $total</h2>";

echo '<form method="post" action="lease.php?p=' . ($page+1) .'">';
echo '<div class="form-group form-group-lg">';

switch ($page) {
    case 2:
        echo '
            <label class="control-label h2" for="word">Enter Year, Make, Model, Trim</label>
            <input class="form-control" type="text" name="word" id="word" placeholder="ex: 2019 Volkswagen Tiguan S">
            <p class="help-block">Add Year, Make, Model, Trim</p>
            ';
        break;
    case 3:
        echo '
            <label class="control-label h2" for="word">Enter Monthly Payment</label>
            <input class="form-control" type="text" name="word" id="word" placeholder="Enter Monthly Payment">
            <p class="help-block">Enter Lease monthly payment</p>
            ';
        break;
    case 4:
        echo '
            <label class="control-label h2" for="word">Enter length Montly Lease terms.</label>
            <input class="form-control" type="text" name="word" id="word" placeholder="Enter Length of Lease">
            <p class="help-block">Enter Length of Lease, common leases are 36 months.</p>
            ';
        break;
    case 5:
            echo '
                <label class="control-label h2" for="word">Enter Initial Downpayment Payment.</label>
                <input class="form-control" type="text" name="word" id="word" placeholder="Initial Down Payment">
                <p class="help-block">Enter Down Payment or 0 if none</p>
                ';
            break;
    case 6:
            echo '
                <label class="control-label h2" for="word">Enter Sale Price or MSRP if provided.</label>
                <input class="form-control" type="text" name="word" id="word" placeholder="MSRP or Sales Price">
                <p class="help-block">Enter Sales price or MSRP. Use Lowest price available</p>
                ';
            break;
    case 7:
            echo '
                <label class="control-label h2" for="word">Enter VIN number, if provided.</label>
                <input class="form-control" type="text" name="word" id="word" placeholder="Enter VIN if any">
                <p class="help-block">Enter VIN if provided if not leave blank</p>
                ';
            break;
    case 8:
            echo '
                <label class="control-label h2" for="word">Enter Stock number, if provided.</label>
                <input class="form-control" type="text" name="word" id="word" placeholder="Enter Stock if any">
                <p class="help-block">Enter Stock if provided if not leave blank</p>
                ';
            break;
    default:
        echo '
            <label class="control-label h2" for="word">Enter Dealer Name</label>
            <input class="form-control" type="text" name="word" id="word" placeholder="Dealer Name">
            <p class="help-block">Enter Client Name, ex Cardinale Volkswagen</p>
            ';
        break;
}
echo '</div>
  <button type="submit" class="btn btn-default btn-lg">Submit</button>
</form>
';
include 'inc/footer.php';