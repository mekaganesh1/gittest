

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>



function move_square(){
	
	var clears = setInterval(scrolling,5);
		
	var movable = document.getElementById('moving_div');
	var position = 0;
	var position1 = 450;


	function scrolling(){
		
	position++;
	movable.style.top = 	position+'px';
	movable.style.left = 	position+'px';
	
		
	
	
	if(position == 450){
		
		clearInterval(clears);
		
		
		
	}
	
	
	
	  //$("#moving_div").clone().appendTo("body").insertAfter();
	//var divClone = movable.cloneNode(true);
	
	//document.body.appendChild(divClone);
		/*if(position>450){		 
			position1--;
			pos = position1;

		} else {	 
			position++;
			pos = position;		 
		}*/	 
		
		/*
		
});
		*/

	}
	
	if(position > 200){
		var movablessss = document.getElementById('moving_div_child');
			var divClone = movablessss.cloneNode(true);
	
	document.getElementById('main_div').appendChild(divClone);
		
		
		
	//$(document).ready(function() {
		
    //var e = $('#moving_div_child');
	/*var e = document.getElementById('moving_div_child');
	
    for (var i = 0; i < 3; i++) {
      e.clone().insertAfter(e);
	 position--;
	e.style.top = 	position+'px';
	e.style.left = 	position+'px';
	  
    }*/	
		
	//}
	
	}

}
</script>

<style>
#main_div{ background:#000;width:500px;height:500px;position:relative;}
#moving_div{ border-radius:50px;background:#ccc; width:50px;height:50px; position:absolute;}
#moving_div_child{ border-radius:50px;background:#ccc; width:50px;height:50px;}

#divClone{margin:20px;}

</style>





</head>

<body>

<div id="main_div">

<div id="moving_div">
<div id="moving_div_child">

</div>
</div>

</div>

<input type="button" value="Move" onclick="move_square()" >
 


</body>
</html>
