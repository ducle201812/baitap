<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Phep Tinh</h1>
	<?php
	for($i = 1 ; $i<= 30 ; $i++){
		if($i % 2 == 1){
			echo "<b>$i</b>";
		}
		else {
			echo "$i" ;
		}
	}
	?>

</body>
</html>