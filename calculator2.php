<?php 

class Boton{
	public $boton_name;
	public $boton_type;
	public $boton_action;


	function __construct($boton_name='boton',$boton_type='button',$boton_action='add_number')
	{
		$boton = '<input type="'.$boton_type.'" name="'.$boton_name.'" id="boton_'.$boton_name.'" class="boton-'.$boton_type.'"/>';
		
		return $boton;
		
	}
	

}

class Calculate extends Boton{
	public $number = 0;
	public $first_ammount = 0;
	public $holder = 0;
	public $final_ammount = 0;
	public $total = 0;
	
	private $boton = null;
	
	function inputHolder($number)
	{
		$this->holder .= $number;
		
		return $this->holder;
		
	}
	
	
	function setAmmount($holder,$boton_action='')
	{
		
		if($holder != 0)
		{
			if( $action != '')
			{
				$holder0 = $this->holder . $holder;
				$this->first_ammount = $holder0;
			}
			else 
			{
				if(isset($action))
				{
					$holder1 = $this->holder . $holder;
					$_final_ammount = $this->holder;
				}
			}
			
			$this->holder = $this->holder . $holder;
			
		}
		else 
		{
		
		}
		
		return $this->first_ammount;
		
	}
	
	
	function addNumbers($holder,$operation)
	{
	
	}

}
echo '<pre>';
$boton = new Boton();
var_dump($boton);

$boton = new Calculate();
var_dump($boton);
echo '</pre>';
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
	<form method="get" name="calculated" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
<input type="button" name="period" id="period" onClick="changeText(&period;)" class="numberse" value="&period;"/>
<input type="button" name="radical" id="radical" onClick="sign='radical" class="numberse" value="&radic;"/>
<input type="button" name="module" id="module" onClick="sign='module'" class="numberse" value="%"/>
<input type="button" name="clear" id="clear" onClick="changeText(CE)" class="numberse" value="CE"/>
<input type="hidden" name="firstnumber" id="firstnumber" value=""/>
<input type="hidden" name="number_holder" id="number_holder" value=""/>
<input type="hidden" name="finalnumber" id="finalnumber" value=""/>
<input type="submit" name="equal" id="equal" onSubmit="add(firstnumber,finalnumber, $_GET['sign'])" class="numberse" value="&equals;"/>
	</div>
</form>
	<!--
	<a href="?number=1" id="numbers1" onClick="changeText(1)" class="numberse">1</a>
	<a href="?number=2" id="numbers2" onClick="changeText(2)" class="numberse">2</a>
	<a href="?number=3" id="numbers3" onClick="changeText(3)" class="numberse">3</a>
	<a href="?number=4" id="numbers4" onClick="changeText(4)" class="numberse">4</a>
	<a href="?number=5" id="numbers5" onClick="changeText(5)" class="numberse">5</a>
	<a href="?number=6" id="numbers6" onClick="changeText(6)" class="numberse">6</a>
	<a href="?number=7" id="numbers7" onClick="changeText(7)" class="numberse">7</a>
	<a href="?number=8" id="numbers8" onClick="changeText(8)" class="numberse">8</a>
	<a href="?number=9" id="numbers9" onClick="changeText(9)" class="numberse">9</a>
	<a href="?number=plus" id="plus" onClick="changeText(+)" class="numberse">+</a>
	<a href="?number=minus" id="minus" onClick="changeText(-)" class="numberse">-</a>
	<a href="?number=times" id="times" onClick="changeText(x)" class="numberse">x</a>
	<a href="?number=division" id="division" onClick="changeText(&divide;)" class="numberse">&divide;</a>
		<a href="?number=period" id="period" onClick="changeText(&period;)" class="numberse">&period;</a>
	<a href="?number=radical" id="radical" onClick="changeText(&radid;)" class="numberse">&radic;</a>
	<a href="?number=module" id="module" onClick="changeText(%)" class="numberse">%</a>
	<a href="?number=clear" id="clear" onClick="changeText(CE)" class="numberse">CE</a>
	<a href="?number=equal" id="equal" onClick="changeText(&equals;)" class="numberse">&equals;</a>-->
<p>&nbsp;</p>
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
	
	
	
	function add(a,b,sign){
		var totale = 0;
		
		if(sign == 'plus'){
			totale = (a+b);
		
		}else if(sign=='minus'){
			totale = (a-b);
			
		}else if(sign=='times'){
			totale = (a*b);
			
		}else if(sign=='multiply'){
			totale = a / b;
			
		}
		
		return totale;
		
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
