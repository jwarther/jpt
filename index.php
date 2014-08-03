<?php require('header.php'); ?>


<form id="addTally" action="evaluate.php" method="post">
	<select id="selectTally" name="tally">
		<option class="tallies" value="0">What's your tally then?</option>
		<option class="tallies" value="one">one</option>
		<option class="tallies" value="two">two</option>
		<option class="tallies" value="three">three</option>
		<option class="tallies" value="four">four</option>
		<option class="tallies" value="five">five</option>
		<option class="tallies" value="too many">too many</option>
	</select>
	<input id="submitTally" type="submit" value="Add pints to tally!">
</form>


<?php require('footer.php'); ?>