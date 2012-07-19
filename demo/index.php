<?php
	require("functions.php");

	echo getHeader();
?>
<script type="text/javascript">
jQuery().ready(function(){
	$(".all").shiftChecker();
});
</script>
<?php
	if(isset($_POST["item"]))
		echo "You selected the checkboxs " . implode(", ", $_POST["item"]) . "<br/>";

	echo '<form method="POST">';
	for($i = 10; $i < 31; $i++)
		echo '<input type="checkbox" class="all" name="item[]" value="' . ($i) . '" />Select item ' . ($i) . '<br/>';
	echo '<button type="submit">Go around!</button>';

	echo getFooter();
?>