<?php
	header("Access-Control-Allow-Origin: http://dinofly.com");
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Methods: GET, POST');
	header('Access-Control-Allow-Headers: X-Requested-With, Cache-Control');
	session_name("a_service");
	session_start();

	if(!isset($_POST["submitButton"])){
		$_SESSION["test"] = "Yes";
?>
		<form method="post">
			<p>
				Name:&nbsp;
				<input name="test" type="text">
				<input type="submit" name="submitButton" value="GO">
			</p>
		</form>
<?php
	}else{
		echo "<p>You posted \"" . $_POST["test"] . "\" as your name!</p>"; 
		if($_SESSION["test"] == "Yes"){
			echo "<h2 style='color: green;'>Session Value Maintained and Set to Yes in Browser</h2>";
		}else{
			echo "<h2 style='color: red;'>Session Value NOT MAINTAINED AND NOT SET</h2>";
		}
		$_SESSION["test"] = "Yes";
?>
		<form method="post">
			<p>
				Name:&nbsp;
				<input name="test" type="text" value="<?php echo $_POST["test"];?>">
				<input type="submit" name="submitButton" value="GO">
			</p>
		</form>
<?php
	}
?>


