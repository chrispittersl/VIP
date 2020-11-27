


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
$("#btn-href-home").on("click",function(){
	window.location.href = "/html/home.php";
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



/* Botões de Rota */
$("#resetar").on("click",function(e){
	e.preventDefault();
	var img = document.getElementById("mapa");
	img.src = "../img/Mapeamento/Mapa.png";
})
$(document).on("click",".rota",function(){
	var local = $(this).attr("id");
	var img = document.getElementById("mapa");

	switch(local){
		case 'btn-sala1':
			img.src = "../img/Mapeamento/bloco_A/sala1.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala1').scrollView();
			
			break;
		case 'btn-sala2':
			img.src = "../img/Mapeamento/bloco_A/sala2.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala2').scrollView();
			break;
		case 'btn-sala3':
			img.src = "../img/Mapeamento/bloco_A/sala3.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala3').scrollView();
			break;
		case 'btn-sala4':
			img.src = "../img/Mapeamento/bloco_A/sala4.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala4').scrollView();
			break;
		case 'btn-sala5':
			img.src = "../img/Mapeamento/bloco_A/sala5.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala5').scrollView();
			break;
		case 'btn-sala6':
			img.src = "../img/Mapeamento/bloco_A/sala6.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala6').scrollView();
			break;
		case 'btn-sala7':
			img.src = "../img/Mapeamento/bloco_A/sala7.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala7').scrollView();
			break;
		case 'btn-sala8':
			img.src = "../img/Mapeamento/bloco_A/sala8.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$('#sala8').scrollView();
			break;
		case 'btn-sala9':
			img.src = "../img/Mapeamento/bloco_B/sala9.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala9').scrollView();
			break;
		case 'btn-sala10':
			img.src = "../img/Mapeamento/bloco_B/sala10.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala10').scrollView();
			break;
		case 'btn-sala11':
			img.src = "../img/Mapeamento/bloco_B/sala11.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala11').scrollView();
			break;
		case 'btn-sala12':
			img.src = "../img/Mapeamento/bloco_B/sala12.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala12').scrollView();
			break;
		case 'btn-sala13':
			img.src = "../img/Mapeamento/bloco_B/sala13.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala13').scrollView();
			break;
		case 'btn-sala14':
			img.src = "../img/Mapeamento/bloco_B/sala14.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala14').scrollView();
			break;
		case 'btn-sala15':
			img.src = "../img/Mapeamento/bloco_B/sala15.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala15').scrollView();
			break;
		case 'btn-sala16':
			img.src = "../img/Mapeamento/bloco_B/sala16.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$('#sala16').scrollView();
			break;	
		case 'btn-auditorio':
			img.src = "../img/Mapeamento/Externos/Auditorio.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 300,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;	
		case 'btn-refeitorio':
			img.src = "../img/Mapeamento/Bloco_ADM/Refeitorio.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;											
		case 'btn-miniauditorio':
			img.src = "../img/Mapeamento/Bloco_ADM/Mini_Auditorio.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-banheiro_patio_fem':
			img.src = "../img/Mapeamento/Bloco_ADM/Banheiro_patio_fem.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;	
		case 'btn-banheiro_patio_masc':
			img.src = "../img/Mapeamento/Bloco_ADM/Banheiro_patio_masc.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-biblioteca':
			img.src = "../img/Mapeamento/Bloco_ADM/Biblioteca.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-enfermaria':
			img.src = "../img/Mapeamento/Bloco_ADM/Enfermaria.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-secretaria':
			img.src = "../img/Mapeamento/Bloco_ADM/Secretaria.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-cantina':
			img.src = "../img/Mapeamento/Externos/Cantina.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 1000,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-portaria':
			img.src = "../img/Mapeamento/Externos/Portaria.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 0,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-anexo':
			img.src = "../img/Mapeamento/Bloco_ADM/Anexo.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 250,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-quadra_coberta':
			img.src = "../img/Mapeamento/Externos/Quadra_Coberta.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 1000,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-quadra_descoberta':
			img.src = "../img/Mapeamento/Externos/Quadra_Descoberta.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 1000,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-banheiros_masc_A':
			img.src = "../img/Mapeamento/bloco_A/banheiros_A_masc.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-banheiros_fem_A':
			img.src = "../img/Mapeamento/bloco_A/banheiros_A_fem.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 450,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-banheiros_masc_B':
			img.src = "../img/Mapeamento/bloco_B/banheiros_B_masc.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-banheiros_fem_B':
			img.src = "../img/Mapeamento/bloco_B/banheiros_B_fem.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 750,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-labquimica':
			img.src = "../img/Mapeamento/bloco_C/Lab_Quim.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 900,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
		case 'btn-labfisica':
			img.src = "../img/Mapeamento/bloco_C/Lab_fis.png";
			$.fn.scrollView = function () {
				return this.each(function () {
					$('html').animate({
						scrollTop: 900,
					}, 1000);
				});
			}
			$(document).scrollView();
			break;
	}
})
