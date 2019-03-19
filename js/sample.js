
	$(document).ready(function(){
		console.log('hii');
		$('#submit').click(function(){
			console.log('here');
			console.log($('#requirement').serialize());

			$.ajax({
				url: "demo.php",
				type: 'post',
				data: $('#requirement').serialize(),
				success: function(result){
					$('#response').append(result);
					console.log(result);
		    }});
		})
	})
