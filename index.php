<!DOCTYPE html>
<html>
	<head>
	<title>Registration Form</title>
	</head>
	<body>
		<h1 align="center">Welcome to Registration Page</h1>	
		
			<form name='myform' action='index.php' onsubmit="return validate()" method='POST'>
			User ID	: 	<input type="text" name="id" id='a'><br>
			Password:
						<input type="password" name="psw" id='p'><br>
			Name	: 	<input type="text" name="name" id='n'><br>
			Address	: 	<input type="text" name="address"><br>
			Country : 	<select>
						<option value="Select Country">Choose Country</option>
						<option value="BD">BD</option>
						<option value="USA">USA</option>
						<option value="BRA">BRAZIL</option>
						</select>
						<br>
			ZIP 	: 	<input type="text" name="zip"><br>			
			E-mail	: 	<input type="text" name="email"><br>
			Gender:
						<input type="radio" name="gender" value="female">Female
						<input type="radio" name="gender" value="male">Male
						<br>
			Language: 	<br>	<input type="checkbox" name="lan" value="ENGLISH"> NON ENGLISH<br>
						<input type="checkbox" name="lan" value="NON ENGLISH" checked> ENGLISH<br>
			
			ABOUT	:	<br><textarea rows="5" cols="50">
			
						</textarea>	
						<br>	
			
			<input type="submit" name="submit" value="Submit">
			</form>
	</body>	
	
	
	
	
		<script>
        function validate()
        {
            
            var a1 = document.getElementById("a");
            var a2 = document.getElementById("p");
			var a3 = document.getElementById("n");
           

                    if(a1.value == "")
                    {
                        alert("Enter userID");
                        return false;
                    }
                    if(a2.value== "")
                    {
                        alert("Enter password");
                        return false;
                    }
					if(a3.value== "")
                    {
                        alert("Enter NAME");
                        return false;
                    }



            return true;
        }
    </script>



</html>