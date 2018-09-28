<?php
$number = array(1,2,3,4,5,6,7,8,9);
rsort($number);
$arrlength =count($number);
for ($i=0; $i <$arrlength ; $i++) {

	echo$number[$i];
	echo"<br>";
}
	
?>