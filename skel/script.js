const clearList = ['screen-overlay', 'signup', 'login', 'profile', 'interview', 'menu', 'about'];
const fregex = /^(?![0-9.-])(?=.{1,100}$)[a-zA-Z0-9._ -]+(?<![.\- ])$/;
const uregex = /^(?![0-9.-])(?=.{1,32}$)[a-zA-Z0-9._]+(?<![.-])$/;

window.onscroll = function () {
	document.getElementById ('pBar').style.width = ((document.body.scrollTop ||
		document.documentElement.scrollTop) / (document.documentElement.scrollHeight -
		document.documentElement.clientHeight)) * 100 + "%";
};

function clearOverlay () {
	if (document.getElementsByClassName ('menu-close').length)
		document.getElementsByClassName ('menu-close')[0].outerHTML =
		'<span class="logo-menu" onclick="menuOverlay()" id="main-menu">' +
		'<img src="logos/list.svg" alt="x"/></span>';
	clearList.forEach (item => {
		if (document.getElementById (item) != null)
			document.getElementById (item).style.display = 'none'
	});
}

function resetForm () {
	clearOverlay ();
	document.querySelectorAll ('form').forEach (form => {
		form.addEventListener ('reset', function (event) {
			form.querySelectorAll ('input').forEach (input => {
				input.style.backgroundColor = 'rgba(255, 255, 255, .1)';
			});
		});
	});
}

function clearOnEscape () {
	document.addEventListener ('keydown', function (press) {
		if (press.key === 'Escape')
			clearOverlay ();
	});
}

function loginOverlay () {
	clearOverlay ();
	clearOnEscape ();
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('login').style.display = 'block';
}

function signupOverlay () {
	clearOverlay ();
	clearOnEscape ();
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('signup').style.display = 'block';
}

function menuOverlay () {
	clearOverlay ();
	clearOnEscape ();
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('menu').style.display = 'flex';
	document.getElementsByClassName ('logo-menu')[0].outerHTML =
		'<span class="menu-close" onclick="clearOverlay()"><img src="logos/close.svg" alt="x"/></span>';
}

function nameValidate (name, regex) {
	if (document.getElementById (name) && regex.test (document.getElementById (name).value))
		return true;
	else
		return false;
}

function colorValidate (name, regex) {
	if (document.getElementById (name) &&
	(regex.test (document.getElementById (name).value) || document.getElementById (name).value == ''))
		document.getElementById (name).style.backgroundColor = 'rgba(255, 255, 255, .1)';
	else
		document.getElementById (name).style.backgroundColor = 'rgba(255, 0, 0, .1)';
}

function formValidate (submit) {
	if (submit == 'signup_submit')
		if (nameValidate ('infsig', fregex) && nameValidate ('insig', uregex) &&
			document.getElementsByName ('passwd')[1].value.length != 0)
			document.getElementById ('login-form').submit ();
		else {
			if (!nameValidate ('infsig', fregex) && !nameValidate ('insig', uregex)) {
				alert ('Please correct mistakes in your form !');
				document.getElementById ('insig').value = '';
				document.getElementById ('infsig').value = '';
				document.getElementById ('insig').style.backgroundColor = 'rgba(255, 255, 255, .1)';
				document.getElementById ('infsig').style.backgroundColor = 'rgba(255, 255, 255, .1)';
			}

			if (document.getElementsByName ('passwd')[1].value.length == 0)
				alert ('Empty password !\nPlease Re-Enter');
		}

	if (submit == 'login_submit')
		if (nameValidate ('inlog', uregex) && document.getElementsByName ('passwd')[0].value.length != 0)
			document.getElementById ('login-form').submit ();
		else {
			if (!nameValidate ('inlog', uregex)) {
				alert ('Please correct mistakes in your form !');
				document.getElementById ('inlog').value = '';
				document.getElementById ('inlog').style.backgroundColor = 'rgba(255, 255, 255, .1)';
			}

			if (document.getElementsByName ('passwd')[0].value.length == 0)
				alert ('Empty password !\nPlease Re-Enter');
		}
}

function showProfile () {
	clearOverlay ();
	clearOnEscape ();
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('profile').style.display = 'block';
}

function interviewList () {
	clearOverlay ();
	clearOnEscape ();
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('interview').style.display = 'block';
}

function aboutUs () {
	clearOverlay ();
	clearOnEscape ();
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('about').style.display = 'flex';
}
