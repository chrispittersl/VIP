
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
