<!DOCTYPE html>
<html>
<head>
	<title>Lotto Lucky Pick</title>
</head>
<body>
<div id="result" data-min="1" data-max="58"></div>
<div id="result" data-min="1" data-max="55"></div>
<div id="result" data-min="1" data-max="49"></div>
<div id="result" data-min="1" data-max="45"></div>
<div id="result" data-min="1" data-max="42"></div>
<div id="result" data-min="1" data-max="31"></div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('div#result').each(function(i,v){
			var min = $(this).data('min');
			var max = $(this).data('max');

			if(i == 5){
				var drawVal = draw_ez2(min,max);

				if(drawVal.length < 6){
					drawVal = draw_ez2(min,max);
				}

				$(this).html("Draw EZ2: "+drawVal.join('-'));
			}else{
				var drawVal = draw(min,max);

				if(drawVal.length < 6){
					drawVal = draw(min,max);
				}

				$(this).html("Draw 6/"+max+": "+drawVal.join('-'));
			}
						
		});		
	});

	// function check(){
	// 	$('div#result').each(function(i,v){
	// 		if($(this)){

	// 		}
	// 	});	
	// }

	function draw(min,max){
		var lotto = new Array();
		var randomNumber;
		for (var i = 1;i <=6 ; i++) {
			randomNumber = getRandomInt(min,max);
			if(jQuery.inArray(randomNumber, lotto)){
				if(randomNumber < 10){
					randomNumber = '0'+randomNumber;
				}

				lotto.push(randomNumber);
			}
		}

		return lotto;
	}

	function draw_ez2(min,max){
		var lotto = new Array();
		var randomNumber;
		for (var i = 1;i <=2 ; i++) {
			randomNumber = getRandomInt(min,max);
			if(jQuery.inArray(randomNumber, lotto)){
				if(randomNumber < 10){
					randomNumber = '0'+randomNumber;
				}

				lotto.push(randomNumber);
			}
		}

		return lotto;
	}


	function Consecutive(arr) {
	  arr.sort((a, b) => a - b);
	  return arr[arr.length - 1] - arr[0] - arr.length + 1;
	}

	function getRandomInt(min, max) {
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}

</script>
</html>