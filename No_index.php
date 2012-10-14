
<?php

	$body = $_REQUEST["Body"];
	$from = $_REQUEST["From"];
?>	
<form action="form.php" method="post">
			<?php
				echo $body;
			?>
</form>

<html>
<?php
echo($body);
?>
</html>
