


	/*FUNÇÃO NA NAVEGAÇÃO BOTÃO E SIDEBAR*/
	$('.btn').click(function(){
		$(this).toggleClass("click");
		$('.sidebar').toggleClass("show");
	});
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
		dropdown[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") {
			dropdownContent.style.display = "none";
			} else {
				dropdownContent.style.display = "block";
			}
		});
	}

	$('form').submit(function(e){
		e.preventDefault();

		var u_user = $('#user').val();
		var u_senha = $('#senha').val();

		$.ajax({
			url: 'http://127.0.0.1/VIP/php/login.php',
			method: 'POST',
			data: {user: u_user,senha: u_senha},
			dataType: 'json'
		}).done(function(resultado){
			$('#user').val('');
			$('#senha').val('');
			console.log(resultado);
		})

	});