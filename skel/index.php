﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
	</head>
	<body>
		<div id="screen-overlay" onclick="clearOverlay()"> </div>
		<footer class="top-footer">
			<span class="logo"><a href="index.php" class="logo-text"> NextStep </a></span>
			<button class="login-button" onclick="signupOverlay()"> Sign Up </button>
			<button class="login-button" onclick="loginOverlay()"> Login </button>
		</footer>
		<div class="login-container">
			<div class="login-overlay" id="login">
				<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
				<h1> Login </h1>
				<form method="post" id="login-form">
					<label> User Name <span class="req-ast"> * </span></label><br/>
					<input id="inlog" name="uname" placeholder="user177" type="text" oninput="unameValidate()"
						required/><br/><br/>
					<label> Password <span class="req-ast"> * </span></label><br/>
					<input name="passwd" type="password" required/><br/><br/>
					<button type="reset" class="cancle-button" onclick="resetForm()" formnovalidate>
						Clear
					</button>
					<button class="submit-button" name="login" value="1" type="submit"> Login </button>
				</form>
			</div>

			<div class="login-overlay" id="signup">
				<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
				<h1> Sign Up </h1>
				<form method="post" id="signup-form">
					<label> Full Name <span class="req-ast"> * </span></label><br/>
					<input name="fname" placeholder="John Smith" type="text" required/><br/><br/>
					<label> User Name <span class="req-ast"> * </span></label><br/>
					<input id="insig" name="uname" placeholder="user177" type="text" oninput="unameValidate()"
						required/><br/><br/>
					<label> Email <span class="req-ast"> * </span></label><br/>
					<input name="mail" type="email" placeholder="someone@example.com" required/><br/><br/>
					<label> Password <span class="req-ast"> * </span></label><br/>
					<input name="passwd" type="password" required/><br/><br/>
					<button type="reset" class="cancle-button" onclick="resetForm()" formnovalidate>
						Clear
					</button>
					<button class="submit-button" name="signup" value="1" type="submit"> Sign Up </button>
				</form>
			</div>
		</div>
		<center class="greet-bg">
			<div class="greet">
				<div class="greet-container">
					<div class="material-overlay" id="materials">
						<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
						<h1> Practice Materials </h1>
						Select your category :
					</div>
					<div class="interview-overlay" id="interview">
						<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
						<h1> Mock Interview </h1>
						Select your category :
					</div>
				</div>
				Mastery Through Unlimited Practices <br/>
				<button onclick="materialList()"> Materials </button>
				<button onclick="interviewList()"> Interview </button>
			</div>
		</center>
		<footer class="down-footer">
			<div>
				All Rights Reserved <br/>
				Copyright &copy; 2024 Team12
			</div>
		</footer>
	</body>
</html>