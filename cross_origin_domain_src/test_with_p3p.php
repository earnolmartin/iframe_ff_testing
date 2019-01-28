<?php
	header("Access-Control-Allow-Origin: http://dinofly.com");
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Methods: GET, POST');
	header('Access-Control-Allow-Headers: X-Requested-With, Cache-Control');
	header('P3P: CP="CAO PSA OUR"');
	session_name("a_service");
	session_start();
	
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata, true);
	if(!isset($request) || empty($request) || !array_key_exists("value", $request)){
		$_SESSION["test"] = "Yes";
	}else{
		echo "<p>You posted \"" . $request["value"] . "\" as your name!</p>"; 
		if($_SESSION["test"] == "Yes"){
			echo "<h2 style='color: green;'>Session Value Maintained and Set to Yes in Browser</h2>";
		}else{
			echo "<h2 style='color: red;'>Session Value NOT MAINTAINED AND NOT SET</h2>";
		}
		$_SESSION["test"] = "Yes";
		exit();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="main.js"></script>
	</head>
	<body>
		<div class="results"></div>
		<p>
			Name:&nbsp;
			<input name="test" type="text" class="test">
			<input type="submit" name="submitButton" value="GO" class="goButton">
		</p>
	</body>
</html>
