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
			<span class="logo-menu" onclick="menuOverlay()" id="main-menu">
				<img src="logos/list.svg"/>
			</span>
			<span class="logo"><a href="index.php" class="logo-text"> NextStep </a></span>
			<?php
				if (!isset ($_COOKIE['user_name'])) {
					//setcookie ('user_name', 'xyz', time () + 30 * 24 * 60 * 60);
					echo '<button class="login-button" onclick="signupOverlay()"> Sign Up </button>
						<button class="login-button" onclick="loginOverlay()"> Login </button>';
				} else
				echo '<a href="index.php"><img class="logged" src="logos/person.svg"/></a>';
			?>
		</footer>
		<div class="p-container"><div class="p-bar" id="pBar"> </div></div>
		<div class="menu-container" id="menu">
			<div class="menu-overlay">
				<a href="index.php"> Home </a>
				<button onclick="materialList()"> Materials </button>
				<button onclick="interviewList()"> Interview </button>
				<button > FAQ </button>
				<button > Feed Back </button>
			<?php
				if (!isset ($_COOKIE['user_name'])) {
			?>
				<button onclick="signupOverlay()"> Sign Up </button>
				<button onclick="loginOverlay()"> Login </button>
			<?php } ?>
				<button onclick="aboutUs()"> About Us </button>
			</div>
		</div>
		<div class="au-container" id="about">
			<div class="au-overlay">
				<h1> About Us </h1>
				<h2> Members </h2>
				<ul>
					<li> Naik Nishanth </li>
					<li> Nandish P.B  </li>
					<li> Shreyas  </li>
					<li> Vinayaka M.N </li>
				</ul>
			</div>
		</div>
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
		<center>
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
				<div class="greet-bg">
					Mastery Through Unlimited Practices <br/>
					<button onclick="materialList()"> Materials </button>
					<button onclick="interviewList()"> Interview </button>
				</div>
			</div>

			<div class="demo">
				<h1> How It Works </h1>
				<div class="demo-container">
					<div class="demo-steps">
						<h4> Preferences </h4>
						<p> Select the category you want to practice. </p>
					</div>
					<div class="demo-steps">
						<h4> Register </h4>
						<p> Register for personalized experience. </p>
					</div>
					<div class="demo-steps">
						<h4> Dashboard </h4>
						<p> Explore resources and practice live Interview sessions. </p>
					</div>
					<div class="demo-steps">
						<h4> Progress </h4>
						<p> Check your progress on our dashboard visual </p>
					</div>
				</div>
			</div>
			<?php
				for ($j = 0; $j < 6 ; $j++)
					for ($i = 1; $i < 6 ; $i++)
						echo "<h$i> Heading $i </h$i>";
			?>
		</center>
		<footer class="down-footer">
			<div>
				All Rights Reserved <br/>
				Copyright &copy; 2024 Team12
			</div>
		</footer>
	</body>
</html>
