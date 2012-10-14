<html>
<?php
echo($body);
?>
</html>


<img border="0" src="
	<?php
		echo($poster)
	?>
	"alt="poster">
	<?php
		echo("Movie:");
		echo($parsed['movies'][0]['title']);
	?>