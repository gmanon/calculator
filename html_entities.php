<?php
$s = 10;


$decode =  htmlentities("%");
echo htmlspecialchars("%");
echo $decode;
echo "&#82;<br>";
echo "<table border='1'><tr><td>";
for($i=9000;$i < 12000;$i++)
{
	echo "</td></tr><tr><td>".$i.".&nbsp;&nbsp;"."&#$i;</td><td>"; 
}

echo "</tr></table>";
?>