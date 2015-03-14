<?php
$counter = 0;
$myarray = array("number[cero]"=>"0",
		"number[one]"=>"1",
		"number[two]"=>"2",
		"number[three]"=>"3",
		"number[four]"=>"4",
		"number[five]"=>"5",
		"number[six]"=>"6",
		"number[seven]"=>"7",
		"number[eight]"=>"8",
		"number[nine]"=>"9",
		"puntuation[period]"=>".",
		"puntuation[comma]"=>",",
		"sign[plus]"=>"+",
		"sign[minus]"=>"-",
		"sign[times]"=>"x",
		"sign[division]"=>"/",
		"sign[squared]"=>"sqrd",
		"sign[percentage]"=>"%");


foreach($myarray as $key=>$value)
{
	$counter++;
	echo "<a href='tst.php?boton=$key&$key=$value'>$value</a><br>\n";

}

?>