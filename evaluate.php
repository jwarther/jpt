<?php require('header.php'); ?>


<?php
	// Display selected tally
	if (isset($_POST["tally"]) and ($_POST["tally"]!="0")) {
		echo '<h3>Your tally for today</h3>';

		echo '<div class="tallyline bigtext">';
		echo '	<span class="date">' . date("d.m.y") . '</span>';
		echo '	<span class="tallyvalue">' . $_POST["tally"] . '</span>';
		echo '</div>';
	}
?>

<h3>So far you've had</h3>


<?php require('footer.php'); ?>