function clearOverlay () {
	const clearList = ['screen-overlay', 'signup', 'login', 'materials', 'interview'];
	clearList.forEach (item => {
		document.getElementById (item).style.display = 'none';
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
	clearOnEscape ();
	const clearList = ['signup', 'materials', 'interview'];
	clearList.forEach (item => {
		document.getElementById (item).style.display = 'none';
	});
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('login').style.display = 'block';
}

function signupOverlay () {
	clearOnEscape ();
	const clearList = ['login', 'materials', 'interview'];
	clearList.forEach (item => {
		document.getElementById (item).style.display = 'none';
	});
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('signup').style.display = 'block';
}

function unameValidate () {
	const regex = /^(?![0-9.-])(?=.{1,32}$)[a-zA-Z0-9._-]+(?<![.-])$/;
	const regs = ['inlog', 'insig'];
	regs.forEach (reg => {
		if (document.getElementById (reg) &&
			(regex.test (document.getElementById (reg).value) || document.getElementById (reg).value === '')
		)
			document.getElementById (reg).style.backgroundColor = 'rgba(255, 255, 255, .1)';
		else
			document.getElementById (reg).style.backgroundColor = 'rgba(255, 0, 0, .1)';
	});
}

function materialList () {
	clearOnEscape ();
	document.getElementById ('interview').style.display = 'none';
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('materials').style.display = 'block';
}

function interviewList () {
	clearOnEscape ();
	document.getElementById ('materials').style.display = 'none';
	document.getElementById ('screen-overlay').style.display = 'block';
	document.getElementById ('interview').style.display = 'block';
}
