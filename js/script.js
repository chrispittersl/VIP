


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

$(document).on("click",".rota",function(){
	var local = $(this).attr("id");
	var img = document.getElementById("mapa");

	switch(local){
		case 'btn-sala1':
			img.src = "../img/Mapeamento/bloco_A/sala1.png";
			break;
		case 'btn-sala2':
			img.src = "../img/Mapeamento/bloco_A/sala2.png";
			break;
		case 'btn-sala3':
			img.src = "../img/Mapeamento/bloco_A/sala3.png";
			break;
		case 'btn-sala4':
			img.src = "../img/Mapeamento/bloco_A/sala4.png";
			break;
		case 'btn-sala5':
			img.src = "../img/Mapeamento/bloco_A/sala5.png";
			break;
		case 'btn-sala6':
			img.src = "../img/Mapeamento/bloco_A/sala6.png";
			break;
		case 'btn-sala7':
			img.src = "../img/Mapeamento/bloco_A/sala7.png";
			break;
		case 'btn-sala8':
			img.src = "../img/Mapeamento/bloco_A/sala8.png";
			break;
		case 'btn-sala9':
			img.src = "../img/Mapeamento/bloco_B/sala9.png";
			break;
		case 'btn-sala10':
			img.src = "../img/Mapeamento/bloco_B/sala10.png";
			break;
		case 'btn-sala11':
			img.src = "../img/Mapeamento/bloco_B/sala11.png";
			break;
		case 'btn-sala12':
			img.src = "../img/Mapeamento/bloco_B/sala12.png";
			break;
		case 'btn-sala13':
			img.src = "../img/Mapeamento/bloco_B/sala13.png";
			break;
		case 'btn-sala14':
			img.src = "../img/Mapeamento/bloco_B/sala14.png";
			break;
		case 'btn-sala15':
			img.src = "../img/Mapeamento/bloco_B/sala15.png";
			break;
		case 'btn-sala16':
			img.src = "../img/Mapeamento/bloco_B/sala16.png";
			break;	
		case 'btn-auditorio':
			img.src = "../img/Mapeamento/Externos/Auditorio.png";
			break;	
		case 'btn-refeitorio':
			img.src = "../img/Mapeamento/Bloco_ADM/Refeitorio.png";
			break;											
		case 'btn-miniauditorio':
			img.src = "../img/Mapeamento/Bloco_ADM/Mini_Auditorio.png";
			break;
		case 'btn-banheiro_patio_fem':
			img.src = "../img/Mapeamento/Bloco_ADM/Banheiro_patio_fem.png";
			break;	
		case 'btn-banheiro_patio_masc':
			img.src = "../img/Mapeamento/Bloco_ADM/Banheiro_patio_masc.png";
			break;
		case 'btn-biblioteca':
			img.src = "../img/Mapeamento/Bloco_ADM/Biblioteca.png";
			break;
		case 'btn-enfermaria':
			img.src = "../img/Mapeamento/Bloco_ADM/Enfermaria.png";
			break;
		case 'btn-secretaria':
			img.src = "../img/Mapeamento/Bloco_ADM/Secretaria.png";
			break;
		case 'btn-cantina':
			img.src = "../img/Mapeamento/Externos/Cantina.png";
			break;
		case 'btn-portaria':
			img.src = "../img/Mapeamento/Externos/Portaria.png";
			break;
		case 'btn-Anexo':
			img.src = "../img/Mapeamento/Bloco_ADM/Anexo.png";
			break;
		case 'btn-quadra_coberta':
			img.src = "../img/Mapeamento/Externos/Quadra_Coberta.png";
			break;
		case 'btn-quadra_descoberta':
			img.src = "../img/Mapeamento/Externos/Quadra_Descoberta.png";
			break;
	}
})
