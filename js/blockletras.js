  /*FUNÇÕES LOGIN - BLOCK LETRAS  */
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