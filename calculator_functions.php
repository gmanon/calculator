<?php

if(!isset($_GET['title'])){ $_GET['title'] = "Index_calculator"; } 
else { $_GET['title'] = $_GET['title']; }

?>
<!DOCTYPE html>
<!-- Author: Guillermina Gonjon (GManon)
     Date: March 14th, 2015
     Contact: gmanonwebpresence@gmail.com
     License: GNU ("Freely available to any use with no garantee of any kind.")
 -->
<html>
<head>
<meta http-equiv="content-type" type="text/html;charset=utf-8"/>

<title><?php echo ucwords($_GET['title']);?></title>

<!-- Stylesheet -->
<link href="css/calculator.css" title="stylesheet" type="text/css" rel="stylesheet" rev="stylesheet" media="all" lang="english">
</head>
<body>
<h2 class="title"><?php echo ucwords($_GET['title']);?></h2>
	<!-- Menu -->
	<a href="?title=index" class="menu">Simple Calculation</a>  
    <a href="?title=temperature" class="menu">Temperature</a>  
    <a href="?title=dates" class="menu">Dates</a>  
    <a href="?title=measurements" class="menu">Measurements</a> 
	<!-- End Menu -->
    <hr class="menu-divider"/>
	<div class="outside">
	<!-- Form that contains the calculator and is also the base of the entire script -->
	<form method="get" name="calculated" action="#">
	<div class="calculator" id="calculator-frame"><span class="label">

	<!-- Output window -->
    
	<input type="text" onBlurd="changeText()" maxlength="12" disable class="calculate" id="myresult" name="result" size="12"/></span>
		<hr/>
	 <!-- Non-standard bottons to print, seek for help and see the date -->
    <input id='help' name='help' type='button' onClick='showHelp("?")' class='aids' value='?'/>
    <input id='print' name='print' type='button' onClick='showHelp("print")' class='aids' value='&#9113;'/>
    <input id='time' name='time' type='button' onClick='showHelp("time")' class='aids' value='&#9200;'/> 
    <?php if($_GET['title'] != 'measurements') { echo '<hr>';} ?>
    <input id='to' name='to' type='button' onClick='changeText("TO")' class='numberse' value='TO'/>
	<input id='period' name='period' type='button' onClick='changeText(".")' class='numberse' value='&period;'/>
    <?php if($_GET['title'] != 'measurements') { echo '<hr>';} ?>
	<input id='clear' name='clear' type='button' onClick='changeText("CE")' class='operation' value='CE'/>
	<input id='equal' name='equal' type='button' onClick='changeText("&equals;")' class='operation' value='&equals;'/>
	
	
	<div>
		
	<!-- Calculator buttons -->
    <!--<script lang="javaScript">
    /*var i = 0;
    for(i=0;i<10;i++){
        document.writeln("<input id='"+i+"' name='boton"+i+"' type='button' onClick='chanteText("+i+") class='numberse' value='"+i+"'/>");
    }*/
        </script>-->
    <?php
        $symbols = array('to'=>'TO','clear'=>'CE','equal'=>'&equals;','help'=>'?','print'=>'$#9113;','time'=>'&#9200;');
                    
        $index_symbols = array('plus'=>'+','minus'=>'-','times'=>'x','division'=>'&#247;','module'=>'&percnt;',
                            'sqroot'=>'&radic;', 'exponent'=>'^');
                    
        $date_symbols = array('year'=>'Y','month'=>'M','day'=>'D','hour'=>'h','minute'=>'mn',
                                'second'=>'scd;', 'week'=>'W');
                    
        $temperature_symbols = array('Celcius'=>'C','farenheight'=>'F','kelvin'=>'K', 'R'=>'R');
        
        $measurement_symbols['space'] = array('kilometer'=>'KM','decameter'=>'DM','meter'=>'M','decimeter'=>'dc',
                            'centimeter'=>'cm','milimeter'=>'mm','acre'=>'acre','mile'=>'ml','yard'=>'yd',
                            'feet'=>'ft','inch'=>'in','pica'=>'pc');
                            
        $measurement_symbols['volunme'] = array('liter'=>'lt','gallon'=>'gl','pint'=>'pt',
                            'quart'=>'Qrt','gram'=>'gm','kilogram'=>'kg','pound'=>'lb','onze'=>'onz');
    
        
        function calculateBottoms($lengh = 10)
        {
                $calculator_bottoms = null;
    
                for($i=0;$i<10;$i++)
                {
                    $calculator_bottoms .= "<input id='$i' name='boton$i' type='button' onclick='changeText($i)' class='numberse' value='$i'/>\n";
                }
        
        return $calculator_bottoms;
        }
        
        echo calculateBottoms($lengh = 10);
        
        function calculateSigns($symbols, $class='sign' )
        {
            
            foreach($symbols as $key=>$value )
                {
                    echo "<input id='$key' name='$key' type='button' onClick='otherOperations($value)' class='$class $key' value='$value'/>\n";
                }
                
        }
        switch($_GET['title']){ 
            case "dates":
                calculateSigns($date_symbols, 'date-sign');
            break;
            
            case "temperature":
                calculateSigns($temperature_symbols, 'temperature-sign');
            break;
            
            case "measurements":
                calculateSigns($measurement_symbols['space'], 'measurement-sign');
                echo "<hr style='margin:0;'>";
                calculateSigns($measurement_symbols['volunme'], 'measurement-sign');
                
            break;
            
            default:
                calculateSigns($index_symbols, 'sign');
            break;
        }
     if($_GET['title'] != 'measurements') { echo '<hr>';}  
    ?>

	<!-- Script functions -->
	<script language="javaScript" src="js/calculators.js"></script>

	</div>
</form>

<p>&nbsp;</p>
</body>
</html>
<?php
foreach($_GET as $key=>$var)
{
    //echo "$key: $var<br>\n";
}