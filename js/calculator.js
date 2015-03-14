
/*  Main function to make numbers appear on the output screen 
    @mytext is the holder for every click on the calculatorl
*/

function changeText(mytext){
	var result = calculated.result;

	if((mytext != "=") && (mytext != "CE") && (mytext != "&radic;") && (mytext != "&percnt") && (mytext != "^")){
		result.value = result.value +mytext;
	
	calculated.result.value = result.value;
	
	}else if(mytext == "="){
	
	calculated.result.value = eval(calculated.result.value);

	}else if(mytext == "CE"){
		calculated.result.value = '';

	}

}	

/*  This function catches the operators using a singer numerator.  
    For example squared root 
*/

function otherOperations(mytext){

	var result = calculated.result;
	
	if(mytext == "%"){
		calculated.result.value = eval(result.value)/100;
		
	}else if(mytext == "^"){
		calculated.result.value = eval(result.value * result.value);

	}else if(mytext == "sqroot"){
		calculated.result.value = Math.sqrt(eval(result.value));
		}
		
		return calculated.result.value;
}
  
  /*  This last one holds the extra bottons that are not calculating anything */
  
  function showHelp(mytext){
  		var aids = calculated.aids;
  		
  		if(mytext == "?"){
  			window.open('help.html','help','width=400,height=400,status_bar=yes,resizable=yes,titlebar=no,menubar=no,resizable=no');
  		
  		}else if(mytext == "print"){

  			window.print();
  	
  		}else if(mytext == "time"){
  			
			var d = new Date();
					
  			calculated.result.value = d;

  		}

  }
  
