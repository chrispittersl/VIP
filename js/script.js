
/*MENU SIDE BAR*/
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }

  /*FUNÇÕES LOGIN - BLOCK LETRAS E VALIDA */
  $('.message a').click(function()
			{
			$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
			});
			
			function blokletras(objEvent)
			{
				var iKeyCode;
				iKeyCode = objEvent.keyCode;
				if (iKeyCode>=48 && iKeyCode<=57)
				return true;
				return false;
			}
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