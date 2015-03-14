window.onerror = function(msg, url, line) {

	if (onerror.num++ < onerror.max) {
		alert("ERROR: " + msg + "\n" + url + ":" + line);
		return true;
	}
}

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
  