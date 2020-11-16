


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

	$("#form-login").on("submit",function(e){
		e.preventDefault();

		var user = $('#user').val();
		var password = $('#password').val();
		
		$.ajax({
			url: 'http://localhost/VIP/php/validarLogin.php',
			method: 'POST',
			data: {user: user, password: password},
			dataType: 'json'
		}).done(function(result){
			$('#user').val('');
			$('#password').val('');

			if(result == "válido"){
				window.location.href = "home.html";
			}
			else{
				$('#errorLogin').html("As crendenciais estão incorretas.")
			}
		})
	})


	$(document).ready(function(){
		$(document).on("click",".view_data",function(){
			var sala = $(this).attr("id");
			var dados = {
				sala: sala
			};
			$.post('tempoReal.php', dados, function(retorno){
				$("#conteudo").html(retorno);
				$("#modalAcontecimentos").modal("show");
			});
		});
		
	});
