<html>
<head>
	<title>Signup form</title>
</head>
<body>
	<form method="POST" action="regCheck.php">
			
			<table border="1" cellspacing="0">
			    <tr>
					<th colspan="3">Registration</th>
				</tr>
				<tr>
					<td>Name:</td>
					<td> <input type="text" name="myname" value="" /></td>
					<td width="15px"></td>
				</tr>
				
				<tr>
					<td>Email: </td>
					<td><input type="email" name="myemail" value="" /></td>
					<td width="15px"></td>
				</tr>
				<tr>
					<td>User Name: </td>
					<td><input type="text" name="myid" value="" /></td>
					<td width="15px"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="mypass" value=""></td>
					<td width="15px"></td>
				</tr>
				
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="mypass" value=""></td>
					<td width="15px"></td>
				</tr>
				
				
				<tr>
					<td>Gender: </td>
					<td>
						<input type="radio" name="gender" value=""> Male
						<input type="radio" name="gender" value=""> Female
						<input type="radio" name="gender" value=""> Other
						<td width="15px"></td>
					</td>
				</tr>
				
				<tr>
					<td>DOB: </td>
					<td><input type="date" name="" value=""></td>
					<td width="15px"></td>
				</tr>
				
				
				<tr>
					<th colspan="3" height="30px"></th>
				</tr>
				
				<tr>
					<td colspan="3" height="30px" align="right">
					   <input type="submit" name="submit" value="Submit">
					   <input type="reset" name="reset" value="reset">
					</td>
				</tr>

			</table>
		
	</form>
</body>
</html>