for (var i = 0; i < input.length; i++) {

	input[i].addEventListener('keyup', checkChars);
}

function checkChars(cc) {

	var target = cc.currentTarget;
	
	if (target.name == 'email') {

		var pattern = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;


		if (!pattern.test(String(target.value).toLowerCase())) {

			target.classList.add('control');
			document.querySelector('#errorMessage').style.display = 'block';
			document.querySelector('#submit').disabled = true;

		} else {

			target.classList.remove('control');
			document.querySelector('#errorMessage').style.display = 'none';
			document.querySelector('#submit').disabled = false;
		}
	
	}
}