<?php 
session_start();
ob_start();
//$sign_counter = 0;

//	Initializing session_counter
$period = '';
$session_counter = '';

if(empty($_SESSION_COUNTER['sign']))
{ 
	$_SESSION_COUNTER['sign'] = 0;

}else{$_SESSION_COUNTER['sign'] = $_SESSION_COUNTER['sign'];}

if(empty($window_result_holder)){
	
	$window_result = 0;
	
}

if(empty($windowvalue)){
	$windowvalue = 0;

}

//	Initializing windowvalue

if(empty($windowvalue))
{ 
	$windowvalue = 0;
}

if(!empty($_GET['punctuation']['period']))
{
	$period = $_GET['punctuation']['period'];
	
}

//	Catching numbers

if(!empty($_GET['number'])){
	foreach($_GET['number']as $key=>$value){
	//echo "<br><b>Number value: $value</b><br>";
		
		$_SESSION['total'] .= $value . $period;
		$windowvalue = $_SESSION['total'];
	}
}

echo "numbers cuantity".strlen($windowvalue).'<br>';

if(strlen($windowvalue)>=32)
{
	echo $windowvalue."<h2>The window is too big.</h2>";
	echo Str_word_count($windowvalue)."<br>";
	
	$windowvalue = ltrim($windowvalue,32);
	
	
}

//	Catching signs

if(!empty($_GET['sign'])){

	$session_counter = $_SESSION_COUNTER['sign']++;
	
	// echo "<b>Count signs:</b> ".$_SESSION_COUNTER['sign']."<br>\n";
	
	//$_SESSION['signs'] = explode(":",$_GET['sign'][0]);
	$sign_holder = array();
	$sign_holder = array_push($sign_holder,$_GET['sign']);
	print_r($sign_holder);
	
	
}
if(!empty($_GET['operation']))
{
	if($_GET['operation']=='CE')
	{
		//	Clear all
		session_destroy();
		unset($_SESSION['total']);
	}
	elseif($_GET['operation']=='=')
	{
		
		$total = $value0 . eval($sign) . $value1;
	}
}
//$_SESSION_COUNTER['sign'];

//	Catching signs



//echo rtrim("maira","i")."<br>\n";
//echo substr("maira",strpos("maira","i"))."<br>\n";
//substr_replace($string, $replacement, $start, $length = null);
//echo substr_replace("number[cero]", "", strpos("number[cero]","["));


require_once('operations.class.php');

$operations = new Operations();

if(!isset($_REQUEST['result'])){ $_REQUEST['result'] = 0;}else{ $_REQUEST['result'] = $_REQUEST['result']; }
if(empty($_SESSION['result'])){$_SESSION['result'] = 0;}else{
$_SESSION['result'] .= $_REQUEST['result'];}

/*if($_REQUEST['boton']=='number')
{
	if($window_result == 0){
		$window_result .= $_REQUEST['number'];
		$_SESSION['result'] .= $_REQUEST['number'];
		
	}else{
		$window_result .= $_REQUEST['number'];
	}
	
}
elseif($_REQUEST['boton']=='sign')
{
	switch($_REQUEST['sign'])
	{
		case 'plus':
		$subtotal = $operations->addition($ammount0,$ammount1);
		$_SESSION['result'] = 0;
		break;
		
		case 'minus':
		$subtotal = $operations->substract($ammount0,$ammount1);
		$_SESSION['result'] = 0;
		break;
		
		case 'times':
		$subtotal = $operations->multiply($ammount0,$ammount1);
		$_SESSION['result'] = 0;
		break;
		
		case 'division':
		$subtotal = $operations->divide($ammount0,$ammount1);
		$_SESSION['result'] = 0;
		break;
		
		case 'radical':
		$subtotal = $operations->squaredroot($ammount0);
		$_SESSION['result'] = 0;
		break;
		
		/*case 'percent':
		$subtotal = $operations->porcentage($ammount0,$ammount1);
		break;
		
		default:
		
		break;
		
	}
	*/
	//	reset @window_result



?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="content-type" type="text/html;charset=utf-8">
<title>Calculator</title>
<!--<script type="text/javascript" sr c="jscript/ jquery-1.11.0.min.js">< /script>-->

<link href="css/index.css" title="stylesheet" type="text/css" rel="stylesheet" rev="stylesheet" media="all" lang="english">
</head>
<body>

	<div class="outside">

	<div class="calculator" id="calculator-frame"><span class="label">
	<div maxlength="12" disable class="calculate" id="myresult" /><?php echo $windowvalue;?></div>
		<hr/>
	<div>
	<?php
	$boton = array("number[cero]"=>"0",
						"number[one]"=>"1",
						"number[two]"=>"2",
						"number[three]"=>"3",
						"number[four]"=>"4",
						"number[five]"=>"5",
						"number[six]"=>"6",
						"number[seven]"=>"7",
						"number[eight]"=>"8",
						"number[nine]"=>"9",
						"punctuation[period]"=>".",
						"punctuation[comma]"=>",",
						"sign[plus]"=>"+",
						"sign[minus]"=>"-",
						"sign[times]"=>"x",
						"sign[division]"=>"/",
						"sign[squared]"=>"&radic;",
						"sign[percentage]"=>"%",
						"operation[clear]"=>"CE",
						"operation[iqual]"=>"=");
						
	
						foreach($boton as $key=>$valuei)
						{
							echo "<a href='calculator3.php?boton=$key&$key=$valuei' id='$valuei' class='numberse'><span class='".substr_replace($key,"",strpos($key,"["))."'>$valuei</span></a>\n";
							

						}

	?>
<p>&nbsp;</p>
</div>
</body>
</html>
<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
/*foreach($_REQUEST as $variable=>$key)
{
	echo "<b>$variable:</b> $key<br>";
}*/

	echo urldecode($_SERVER["QUERY_STRING"])."<br>";
	//echo "string: " . substr_replace("number=","",$_SERVER["QUERY_STRING"], strpos($_SERVER["QUERY_STRING"], "="))."<br>";
	
	//echo $_ENV['USERNAME']."<br>";