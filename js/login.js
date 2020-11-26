$(document).ready(function(){
    $('#errorLogin').hide();
    $("#form-login").on("submit",function(e){
        e.preventDefault();

        var user = $('#user').val();
        var password = $('#password').val();
        
        $.ajax({
            url: '../php/validarLogin.php',
            method: 'POST',
            data: {user: user, password: password},
            dataType: 'json'
        }).done(function(result){
            $('#user').val('');
            $('#password').val('');
            switch(result){
                case 'administrador':
                    window.location.href = "homeadm.html";
                    break;
                case 'válido':
                    window.location.href = "home.html";
                    break;
                case 'inválido':
                    $('#errorLogin').show();
                    break;
            }
        })
    })
})