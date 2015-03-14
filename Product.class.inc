class Product {
	public $period;
	public $number;
	public $window;
	public $sign;
	
	public $var;
	
	function initializeVars($var)
	{
		$this->var = $var;
		
		if(empty($this->var)
		{
			$this->var = 0;
			
			return $this->var;
		}
	}
}

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