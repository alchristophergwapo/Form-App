var errorPword = document.getElementById("miss2");
	var pass = document.getElementById("pass");
	var childrens = document.getElementById("childlist");
	var gender = document.getElementsByName("gender");
	var status = document.getElementsByName("status");
	var submit = document.getElementById("submit");


	pass.onblur = function()
	{
		console.log('pass');
		var passw =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
		if(pass.value.match(passw) && pass.value.length >=8)
		{
			errorPword.style.display = 'none';
			email.disabled = false;
			gender[0].disabled = false;
			gender[1].disabled = false;
			status[0].disabled = false;
			status[1].disabled = false;
			submit.disabled = false;
		}
		else
		{
			console.log('pass2');
			errorPword.innerHTML = 'Your password is WEAK!!!';
			email.disabled = true;
			gender[0].disabled = true;
			gender[1].disabled = true;
			status[0].disabled = true;
			status[1].disabled = true;
			submit.disabled = true;

		}
	}

	var email = document.getElementById("mail");
	var errorEmail = document.getElementById('miss3');

	email.onblur = function()
	{
		console.log('mail');
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(email.value.match(mailformat))
		{
			errorEmail.style.display = 'none';
			gender[0].disabled = false;
			gender[1].disabled = false;
			status[0].disabled = false;
			status[1].disabled = false;
			submit.disabled = false;

		}
		else
		{
			errorEmail.innerHTML = 'You entered an invalid email!!';
			errorEmail.style.display = 'block';
			gender[0].disabled = true;
			gender[1].disabled = true;
			status[0].disabled = true;
			status[1].disabled = true;
			submit.disabled = true;

		}
	}


	function addChildren(){
		event.preventDefault();
		console.log("child");

		var input = document.createElement("input");
		var elem1 = document.createElement("br");
		var elem2 = document.createElement("br");
		var remove = document.createElement("button");

		input.setAttribute("type","text");
		input.setAttribute("placeholder","Child name");
		input.setAttribute("name","child[]");
		input.setAttribute("id","anak");
		remove.setAttribute("id","btn");
	    remove.innerHTML = "REMOVE";

	  remove.onclick = function(child) {
	    removeChild(child)
	  };

		childrens.appendChild(input);
		childrens.appendChild(remove);
		childrens.appendChild(elem1);
		childrens.appendChild(elem2);
		

	}
	function removeChild(child) {
	  var button = child.target;
	  var field = button.previousSibling;
	  var parent = button.parentElement;
	  parent.removeChild(button);
	  parent.removeChild(field);

	}

	function hide() {
		document.getElementById("div").style.display = "none";
	}
	function showTime()
	{
		document.getElementById("div").style.display = "block";
	}

	var favorite = document.getElementById("fav");

	function isChecked(){
		if (favorite.checked == false) 
		{
			console.log("wala");
			submit.disabled = true;
			return false;
		}
		else
		{
			console.log(favorite.value," is Checked");
			submit.disabled = true;
			return true;
		}
	}

