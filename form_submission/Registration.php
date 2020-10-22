<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		<h1>Registration Form</h1>
		<hr>
		<form>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<input type="radio" name="gender"> Male
						<input type="radio" name="gender"> Female
					</td>
				</tr>
				<tr>
					<td>Hobbies:</td>
					<td>
						<input type="checkbox" > Movies<br>
						<input type="checkbox" > Music <br>
						<input type="checkbox" > Programming<br>
						<input type="checkbox" > Travelling <br>
						<input type="checkbox" > Adventure<br>
						<input type="checkbox" > Gardenning<br>
					</td>
				</tr>
				<tr>
					<td>Profession:</td>
					<td>
						<select>
							<option disabled selected>Choose</option>
							<option>Teacher</option>
							<option>Student</option>
							<option>Business</option>						
						</select>
					</td>
				</tr>
				<tr>
					<td>Bio:</td>
					<td>
						<textarea ></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="register"></td>
				</tr>
			</table>
		</form>
	</body>
	
</html>