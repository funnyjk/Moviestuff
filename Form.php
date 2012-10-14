<html>
<body>


	<?php

	$moviet = str_replace(" ", "%20", $_POST["title"]);
	$url = "http://api.rottentomatoes.com/api/public/v1.0/movies.json?q=". $moviet . "&apikey=cgu43t3cn6fs9c3hennzgzjt";
	$data = file_get_contents($url);
	$parsed = json_decode($data, true);
	$poster = $parsed['movies'][0]['posters']['original'];
	$mtitle = $parsed['movies'][0]['title'];
	$mgenre = 
	//$mgenre = $parsed['movies'][0]['title']);
	print $url;
	//echo($parsed['movies'][0]['title']);
	
	//echo($poster)
	//var_dump($parsed);
	echo("Movie: ");
	echo ($mtitle);
	echo()
	//$poster;
?>


</body>
</html>


