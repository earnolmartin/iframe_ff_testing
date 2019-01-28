$(document).ready(function() {
	$(".goButton, .goButton1, .goButton2").click(function(e){
		
		var url = "http://dinofly.com/iframe_session_fail/test_with_p3p.php";
		if($(this).is('.goButton1')){
			url = "http://dinofly.com/iframe_session_fail/test_without_p3p.php";
		}else if($(this).is('.goButton2')){
			url = "http://dinofly.com/iframe_session_fail/test_without_p3p_no_sess.php";
		}
		
		$(".results").html('');
		
		var obj = {};
		obj["value"] = $("input.test").val();
		
		$.ajax({
			url: url,
			xhrFields: {
				withCredentials: true
			},
			method: "POST",
			data: JSON.stringify(obj),
			success: function(msg) {
			   $(".results").html(msg);
			}
		});
	});
});
