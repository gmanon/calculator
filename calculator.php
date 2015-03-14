<?php 
session_start();
ob_start();

require_once('operations.class.php');

$operations = new Operations();

if(!isset($_REQUEST['result'])){ $_REQUEST['result'] = 0;}else{ $_REQUEST['result'] = $_REQUEST['result']; }
//if(!isset($_SESSION['cipher0'])){ $_SESSION['cipher0'] = 0;}else{ $_SESSION['cipher0'] .= $_SESSION['cipher0']; }
//if(!isset($_SESSION['cipher1'])){ $_SESSION['cipher1'] = 0;}else{ $_SESSION['cipher1'] .= $_SESSION['cipher1']; }


echo '<b>request_result: </b>'.$_REQUEST['result'].'<br>';

//echo '<b>cipher0: </b>'.$_SESSION['cipher0'].'<br>';

//echo '<b>cipher1: </b>'.$_SESSION['cipher1'].'<br>';

//$arraysigns = array('plus','minus','times','divide');

//if (in_array($var, $myarray)) {
	
//}

if($_REQUEST['number']=="clear")
{
 unset($_REQUEST['number']);
 $_REQUEST['number'] = 0;
 
 }
 
 /*
if(($_REQUEST['number'] == 'plus')||($_REQUEST['number'] == 'minus')||($_REQUEST['number'] == 'multiply')||($_REQUEST['number'] == 'plus'))
{
	if($_SESSION['cipher0'] == 0)
	{
		//$_SESSION['cipher0']=$_SESSION['result'];
		$_SESSION['operation0'] = $_REQUEST['number'];
	}
	elseif($_SESSION['cipher1'] == 0)
	{
		//$_SESSION['cipher1'] == $_SESSION['result'];
	}
	else 
	{
		//$_SESSION['cipher2'] == $_SESSION['result'];
	}
	

	
   // stop and start again
   
   unset($_SESSION['result']);
   $_SESSION['result'] = '';
   
}
elseif($_REQUEST['number'] == '=')
{
		//  Check on signs	
	if($_REQUEST['number']=='plus')
	{
		$operations->add($cipher0,$cipher1);
	}
}
elseif($_REQUEST['number'] == 'CE')
{
	unset($_SESSION['result']);
	unset($_REQUEST['number']);
}
$_SESSION['result'] .= $_REQUEST['number']; 
$result_array = explode(":",$_SESSION['result']);

//str_split($_SESSION['result']);


print_r($result_array);*/
/*
$_SESSION['output'] = '0.0';
$_SESSION['result'] = '';
$sign = 0;
$result0 =0;
$result1 =0;
echo phpversion();

$variable_result = ltrim($_SERVER["QUERY_STRING"],"number=");


$_SESSION['output'] = (string) $variable_result;
$_SESSION['result'] = $_SESSION['result'] . $_SESSION['output'];
$myoutput = $_SESSION['output'].$variable_result;

$result1 = $result1.$result0;

	
	$newtest;
	$sign;
	$cipher1;
	$cipher2;
*/	
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
<!--	<form method="get" name="calculated" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="calculator" id="calculator-frame"><span class="label">
	<input type="text" onBlurd="changeText()" maxlength="12" disable class="calculate" id="myresult" 
	name="result" size="12" value="" /></a>
		<hr/>
	<div>

<input type="button" name="cero" id="cero" onClick="changeText(0)" class="numberse" value="0"/>
<input type="button" name="one" id="numbers1" onClick="changeText(1)" class="numberse" value="1"/>
<input type="button" name="two" id="numbers2" onClick="changeText(2)" class="numberse" value="2"/>
<input type="button" name="three" id="numbers3" onClick="changeText(3)" class="numberse" value="3"/>
<input type="button" name="four" id="numbers4" onClick="changeText(4)" class="numberse" value="4"/>
<input type="button" name="five" id="numbers5" onClick="changeText(5)" class="numberse" value="5"/>
<input type="button" name="six" id="numbers6" onClick="changeText(6)" class="numberse" value="6"/>
<input type="button" name="seven" id="numbers7" onClick="changeText(7)" class="numberse" value="7"/>
<input type="button" name="eight" id="numbers8" onClick="changeText(8)" class="numberse" value="8"/>
<input type="button" name="nine" id="numbers9" onClick="changeText(9)" class="numberse" value="9"/>
<input type="button" name="plus" id="sign" onClick="sign='plus'" class="numberse" value="+"/>
<input type="button" name="minus" id="sign" onClick="sign='minus'" class="numberse" value="-"/>
<input type="button" name="times" id="sign" onClick="sign='times'" class="numberse" value="x"/>
<input type="button" name="divide" id="sign" onClick="sign='divide'" class="numberse" value="/"/>
<input type="button" name="period" id="period" onClick="changeText(&period;)" class="numberse" value="&period;"/>
<input type="button" name="radical" id="radical" onClick="sign='radical" class="numberse" value="&radic;"/>
<input type="button" name="module" id="module" onClick="sign='module'" class="numberse" value="%"/>
<input type="button" name="clear" id="clear" onClick="changeText(CE)" class="numberse" value="CE"/>
<input type="hidden" name="firstnumber" id="firstnumber" value=""/>
<input type="hidden" name="number_holder" id="number_holder" value=""/>
<input type="hidden" name="finalnumber" id="finalnumber" value=""/>
<input type="submit" name="equal" id="equal" onSubmit="add(firstnumber,finalnumber, $_GET['sign'])" class="numberse" value="&equals;"/>
	</div>
</form>-->
	<div class="calculator" id="calculator-frame"><span class="label">
	<div maxlength="12" disable class="calculate" id="myresult" 
	name="result" size="12" value="" /><?php echo $window = $_SESSION['result'];?></div>
		<hr/>
	<div>
	<a href="?boton=number&number=0" id="numbers0" onClick="changeText(0)" class="numberse">0</a>
	<a href="?boton=number&number=1" id="numbers1" onClick="changeText(1)" class="numberse">1</a>
	<a href="?boton=number&number=2" id="numbers2" onClick="changeText(2)" class="numberse">2</a>
	<a href="?boton=number&number=3" id="numbers3" onClick="changeText(3)" class="numberse">3</a>
	<a href="?boton=number&number=4" id="numbers4" onClick="changeText(4)" class="numberse">4</a>
	<a href="?boton=number&number=5" id="numbers5" onClick="changeText(5)" class="numberse">5</a>
	<a href="?boton=number&number=6" id="numbers6" onClick="changeText(6)" class="numberse">6</a>
	<a href="?boton=number&number=7" id="numbers7" onClick="changeText(7)" class="numberse">7</a>
	<a href="?boton=number&number=8" id="numbers8" onClick="changeText(8)" class="numberse">8</a>
	<a href="?boton=number&number=9" id="numbers9" onClick="changeText(9)" class="numberse">9</a>
	<a href="?boton=sign&sign=plus" id="plus" onClick="changeText(+)" class="numberse"><span class="sign">+</span></a>
	<a href="?boton=sign&sign=minus" id="minus" onClick="changeText(-)" class="numberse"><span class="sign">-</span></a>
	<a href="?boton=sign&sign=times" id="times" onClick="changeText(x)" class="numberse"><span class="sign">x</span></a>
	<a href="?boton=sign&sign=divide" id="divide" onClick="changeText(/)" class="numberse"><span class="sign">/</span></a>
	<a href="?boton=sign&sign=division" id="division" onClick="changeText(&divide;)" class="numberse"><span class="sign">&divide;</span></a>
	<a href="?boton=extra&extra=number=period" id="period" onClick="changeText(&period;)" class="numberse">&period;</a>
	<a href="?boton=sign&sign=radical" id="radical" onClick="changeText(&radid;)" class="numberse"><span class="sign">&radic;</span></a>
	<a href="?boton=sign&sign=percent" id="percent" onClick="changeText(%)" class="numberse"><span class="sign">%</span></a>
	<a href="?boton=operation&operation=clear" id="clear" onClick="changeText(CE)" class="numberse"><span class="clear">CE</span></a>
	<a href="?boton=operation&operation=equal" id="equal" onClick="changeText(&equals;)" class="numberse">&nbsp;&nbsp;&nbsp;&equals;&nbsp;&nbsp;&nbsp;</a>
<p>&nbsp;</p>
</div>
<script type="text/javascript">
	function changeText(mytext){
		var newtext = calculated.elements['result'];
		if (newtext.value == ""){
			newtext.value = "";
		}
	newtext.value = newtext.value + mytext++;
	
	
	}
	
	function defineSign(sign){
		var mysign = document.selectElementById(sign).value;
		
		return mysign
	}
	
	

	
	function displayvariabl(elementt){
		
		var mynewresult = calculated.elements['elementt'];
		
		return mynewresult;
		
	}
	
	function submitform(formname)
	{
	 
	}
document.write(defineSign('plus'));
</script>



</body>
</html>
<?php
foreach($_GET as $variable=>$key)
{
	echo "<b>$variable:</b> $key<br>";
}

	echo urldecode($_SERVER["QUERY_STRING"])."<br>";
	//echo "string: " . substr_replace("number=","",$_SERVER["QUERY_STRING"], strpos($_SERVER["QUERY_STRING"], "="))."<br>";
	
	//echo $_ENV['USERNAME']."<br>";
