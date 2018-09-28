<?php
function ham_kiem_tra($n)
{
	for ($i=2;$i<$n;$i++){

		if($n % $i==0)
			{
				return 0;
			}
			
		}
	return 1;
}
	$a =ham_kiem_tra(71);
	if ($a==0)
		echo 'không phai số nguyên tố'."<br>";
	else
		echo 'là số nguyên tố'."<br>";

?>