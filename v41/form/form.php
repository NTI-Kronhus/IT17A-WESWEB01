<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<form action="submit.php" method="POST">
			
			Name:		
			<input name="name" type="text"><br>
			
			Birth-date:	
			<input name="birth" type="tel"><br>
			
			Mail:		
			<input name="mail" type="email"><br>
			
			Password:	
			<input name="pass" type="password"><br>
			
			Gender: 
			<input type="radio" name="gender" value="Male">Male 
			<input type="radio" name="gender" value="Female"> Female
			
			<input type="submit" value="Skicka">
		</form>
	</body>
</html>