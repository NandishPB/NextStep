<?php
	$expiry = time () + 2592000;
	if ($_SERVER["REQUEST_METHOD"] === 'POST') {
		if ($_POST['signup'] == 1) {
			$fname = $_POST['fname'];
			$name = $_POST['uname'];
			if (isset($name))
				setcookie ('user_name', "$name", $expiry);
			if (isset($fname))
				setcookie ('user_fname', "$fname", $expiry);
			header("Location: index.php");
		}

		if ($_POST['login'] == 1) {
			$name = $_POST['uname'];
			if (isset($name))
				setcookie ('user_name', "$name", $expiry);
			header("Location: index.php");
		}

		if ($_POST['logout'] == 1) {
			setcookie ('user_name', null, 1);
			setcookie ('user_fname', null, 1);
			header("Location: index.php");
		}
	}
?>
<!DOCTYPE html>
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
		<?php if (!isset ($_COOKIE['user_name'])) { ?>
				<button class="login-button" onclick="signupOverlay()"> Sign Up </button>
				<button class="login-button" onclick="loginOverlay()"> Login </button>
		<?php } else { ?>
				<img class="logged" src="logos/person.svg" onclick="showProfile ()"/>
		<?php } ?>
		</footer>
		<div class="p-container"><div class="p-bar" id="pBar"> </div></div>
		<div class="menu-container" id="menu">
			<div class="menu-overlay">
				<a href="index.php"> Home </a>
				<button onclick="interviewList()"> Interview </button>
				<button > FAQ </button>
				<button > Feed Back </button>
			<?php if (!isset ($_COOKIE['user_name'])) { ?>
				<button onclick="signupOverlay()"> Sign Up </button>
				<button onclick="loginOverlay()"> Login </button>
			<?php } else { ?>
				<button onclick="showProfile()"> Profile </button>
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
	<?php if (!isset ($_COOKIE['user_name'])) { ?>
		<div class="login-container">
			<div class="login-overlay" id="login">
				<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
				<h1> Login </h1>
				<form action="index.php" method="post" id="login-form">
					<label> User Name <span class="req-ast"> * </span></label><br/>
					<input id="inlog" name="uname" placeholder="user177" type="text"
						oninput="colorValidate('inlog', uregex)" required/><br/><br/>
					<label> Password <span class="req-ast"> * </span></label><br/>
					<input name="passwd" type="password" required/><br/><br/>
					<button type="reset" class="cancle-button" onclick="resetForm()" formnovalidate>
						Clear
					</button>
					<button class="submit-button" name="login" value="1" onclick="formValidate('login_submit')">
						Login
					</button>
				</form>
			</div>
			<div class="login-overlay" id="signup">
				<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
				<h1> Sign Up </h1>
				<form action="index.php" method="post" id="signup-form">
					<label> Full Name <span class="req-ast"> * </span></label><br/>
					<input id="infsig" name="fname" placeholder="John Smith" type="text"
						oninput="colorValidate('infsig', fregex)" required/><br/><br/>
					<label> User Name <span class="req-ast"> * </span></label><br/>
					<input id="insig" name="uname" placeholder="user177" type="text"
						oninput="colorValidate('insig', uregex)" required/><br/><br/>
					<label> Email <span class="req-ast"> * </span></label><br/>
					<input name="mail" type="email" placeholder="someone@example.com" required/><br/><br/>
					<label> Password <span class="req-ast"> * </span></label><br/>
					<input name="passwd" type="password" required/><br/><br/>
					<button type="reset" class="cancle-button" onclick="resetForm()" formnovalidate>
						Clear
					</button>
					<button class="submit-button" name="signup" value="1"
						onclick="formValidate('signup_submit')">
						Sign Up
					</button>
				</form>
			</div>
		</div>
	<?php } else { ?>
		<div class="profile-container">
			<div class="profile-overlay" id="profile">
				<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
				<h1> Profile </h1>
				<h2> Full Name </h2> <p><?php echo $_COOKIE['user_fname']; ?></p>
				<h2> User Name </h2> <p><?php echo $_COOKIE['user_name']; ?></p>
				<form action="index.php" method="post">
					<button name="logout" value="1" class="logout-button" type="submit">
						Log Out
					</button>
				</form>
			</div>
		</div>
	<?php } ?>
		<center>
			<div class="greet">
				<div class="greet-container">
					<div class="interview-overlay" id="interview">
						<img class="close-button" src="logos/close.svg" onclick="clearOverlay()" alt="x"/>
						<h1> Live Interview </h1>
						<h3> Question </h3>
						<div id="qa">
							Why doesn't the semicolon (<span class="tt">;</span>) work to separate multiple
							statements on a single line in Python, unlike languages like C ?
						<h3 style="text-align: center;"> User Response </h3>
							Python doesn't support multiple instances of code in a single line as in C like
							<?php
								echo (shell_exec (
									"echo 'printf(\"hi what is your name : \"); scanf(\"%s\", &name);' | \
									pygmentize -l c -f html"));?>

							<h4> Rating : Partially Correct </h4>
							<div class="exp">
								<h4> Explanation </h4>
								<p>
									While the answer is technically correct in stating that Python doesn't allow
									multiple statements on a single line using semicolons, it doesn't fully
									explain the underlying reason. 
								</p>
								<b> A more comprehensive answer would include: </b>
								<ul>
									<li>
										<b> Python's Readability Focus </b><br/>
										Python's syntax emphasizes readability and clarity. Using semicolons
										to separate statements can often make code less readable, especially
										when dealing with complex expressions.
									</li>
									<li>
										<b> Implicit Line Continuation </b><br/>
										Python allows implicit line continuation for long statements, making the
										use of semicolons unnecessary.
									</li>
									<li>
										<b> Indentation-Based Syntax </b><br/>
										Python's reliance on indentation to define code blocks further
										discourages the use of semicolons.
									</li>
								</ul>
								<b> A better response might be </b>
								<p>
									Python's design philosophy prioritizes code readability and maintainability.
									Semicolons can often clutter code and hinder understanding.
									Additionally, Python's implicit line continuation and indentation-based
									syntax make the use of semicolons redundant.
									By avoiding semicolons, Python promotes a cleaner and more consistent coding
									style.
							</div>
						</div>
						<!--







						-->
					</div>
				</div>
				<div class="greet-bg">
					Mastery Through Unlimited Practices <br/>
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
						<h4> Learn </h4>
						<p> Explore resources and practice live Interview sessions. </p>
					</div>
					<div class="demo-steps">
						<h4> Dashboard </h4>
						<p> Check your progress on our dashboard visual </p>
					</div>
				</div>
			</div>

			<div>
				<h1 style="padding-bottom: 100px;"> Benifits </h1>
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
