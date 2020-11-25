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

            if(result == "válido"){
                window.location.href = "home.html";
            }
            else{
                $('#errorLogin').show();
            }
        })
    })
})