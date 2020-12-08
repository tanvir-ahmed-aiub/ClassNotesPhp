<html>
	<head></head>
	<body>
		<form>
			<input type="text" id="name" placeholder="Name"><br>
			<input type="text" id="email" placeholder="Email"><br>
			<input type="text" id="username" placeholder="Username"><br>
			<input type="button" name="register" onmouseout="out()" onmouseover="over()" onclick="dummy()" value="Register">
			<input type="button" name="google_form" id="google_form" onclick="gform()" value="Sign in With Google">
		</form>
		<p id="output"></p>
		<div id="div_gform" style="display:none">
			<input type="text" id="g_mail" placeholder="Gmail"><br>
			<input type="text" id="g_password" placeholder="Password"><br>
			<input type="button" id="g_register" value="Login">
		</div>
		
		
		<script>
			
			function getElement(id){
				return document.getElementById(id);
				
			}
			function dummy(){
				getElement("output").innerHTML = "Register Button Clicked";
			}
			function over(){
				getElement("output").innerHTML = "Register Button Mouse over";
			}
			function out(){
				getElement("output").innerHTML = "Register Button Mouse out";
			}
			var g_hidden = true;
			function gform(){
				if(g_hidden){
					getElement("div_gform").style.display="block";
					getElement("google_form").value="Hide google form";
					g_hidden = false;
				}
				else{
					getElement("div_gform").style.display="none";
					getElement("google_form").value="Sign in With Google";
					g_hidden = true;
				}
			}
		</script>
	</body>
	
</html>