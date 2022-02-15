<!-- saved from url=(0107)http://goiteens.club/hse/back/uploadReg.php?name=:name&company=:company&tel=:tel&email=:email&password=:pwd -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="chrome-extension://jggobmlojchhlngdhmmdghgganciigof/css/translate_popup.css">
		<style type="text/css">
		</style>
	</head>
	<body>
		<?php


			$name = $_POST['name'];
			$com = $_POST['company'];
			$photo = $_POST['inputGroupFile01'];
			$tel = $_POST['tel'];
			$email = $_POST['email'];
			$pass = $_POST['password'];

			$host = 'levelhst.mysql.tools';
			$user = 'levelhst_task1';
			$pwd = ')RcGm63s3@';
			$database = 'levelhst_task1';

			$link = mysqli_connect($host, $user, $pwd, $database);
			if (!$link)
			{
				die("Connection failed: " . mysqli_connect_error());
				exit();
			}

			echo "Connected successfully .<br>";

			$sql = "INSERT INTO hrs (name, company, photo, tel, email,  password) VALUES ( '$name',  '$com', '$photo','$tel','$email','$pass')";
			if (mysqli_query($link, $sql))
				echo "New record created successfully! .<br>";
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				exit();
			}
			?>
			<a href=registration.php>Back</a>
	</body>
</html>