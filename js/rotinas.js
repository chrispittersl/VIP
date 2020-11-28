
    // form Alterar Horarios
    $("#btn-alt1-h").on("click",function(e){
        e.preventDefault();
        var cod_horario = $('#cod_horario').val();
        $.ajax({
        url: 'altHorarios_verifica.php',
        method: 'POST',
        data: {cod_horario: cod_horario},
        dataType: 'json'
        }).done(function(result){
            switch (result){
                case "Horario encontrado!":
                    document.form_HorariosAlt1.submit();
                    break;

                case "Horario não cadastrado!":
                    alert("Horario não cadastrado!");
                    window.location.href = "AltHorarios.php";
                    break;

                default:
                    alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                    window.location.href = "../../teste/homeadm.html";
            }
        })   
    })

    $("#btn-alt2-h").on("click",function(e){
        e.preventDefault();
        var cod_horario = $('#cod_horario').val();
        var cod_usuario = $('#cod_usuario').val();
        var cod_turma = $('#cod_turma').val();
        var horainicio = $('#horainicio').val();
        var horafim = $('#horafim').val();
        var dia_da_semana = $('#dia_da_semana').val();
        var materia = $('#materia').val();
        var professor = $('#professor').val();
        $.ajax({
            url: 'altHorarios_altera.php',
            method: 'POST',
            data: {cod_horario: cod_horario,
                cod_usuario: cod_usuario, cod_turma: cod_turma, 
                horainicio: horainicio, horafim: horafim,
                dia_da_semana: dia_da_semana, materia: materia,
                professor: professor},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro alterado com sucesso!");
                window.location.href = "altHorarios.php";
            }
            else{
                alert("Falha ao alterar o registro, favor contactar o administrador.");
                window.location.href = "../../html/homeadm.php";
            }
        })
    })

    // form Cadastrar Horarios
    $("#btn-cad-h").on("click",function(e){
        e.preventDefault();
        var cod_usuario = $('#cod_usuario').val();
        var cod_turma = $('#cod_turma').val();
        var horainicio = $('#horainicio').val();
        var horafim = $('#horafim').val();
        var dia_da_semana = $('#dia_da_semana').val();
        var materia = $('#materia').val();
        var professor = $('#professor').val();
        
        $.ajax({
            url: 'cadHorarios.php',
            method: 'POST',
            data: {cod_usuario: cod_usuario, cod_turma: cod_turma, 
                horainicio: horainicio, horafim: horafim,
                dia_da_semana: dia_da_semana, materia: materia,
                professor: professor},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro cadastrado com sucesso!");
                window.location.href = "cadHorarios_mostra.php";
            }
            else{
                alert("Falha ao cadastrar o registro, favor contactar o administrador.");
                window.location.href = "../../html/homeadm.php";
            }
        })
    })
    
    //Form Excluir Horarios
    $("#btn-exc-h").on("click",function(e){
        e.preventDefault();
        var cod_horario = $('#cod_horario').val();
        $.ajax({
            url: 'exclHorarios.php',
            method: 'POST',
            data: {cod_horario: cod_horario},
            dataType: 'json'
        }).done(function(result){
            switch (result){
                case "Horario não cadastrado!":
                    alert("Horario não cadastrado!");
                    window.location.href = "exclHorarios_mostra.php";
                    break;
                
                case "Excluído com sucesso!":
                    alert("Excluído com sucesso!");
                    window.location.href = "exclHorarios_mostra.php";
                    break;

                default:
                    alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                    window.location.href = "../../teste/homeadm.html";
                    break;
            }
        })
    })

    //Form Pesquisar Horarios
    $("#btn-pesq-h").on("click",function(e){
        e.preventDefault();
        var cod_reuniao = $('#cod_turma').val();
        $.ajax({
        url: 'PesqReuniao_verifica.php',
        method: 'POST',
        data: {cod_reuniao: cod_reuniao},
        dataType: 'json'
        }).done(function(result){
            
            switch (result){
                case '0':
                    document.f1.submit();
                    break;

                case '1':
                    alert("Não há reuniões cadastradas!");
                    window.location.href = "../../html/homeadm.php";
                    break;

                default:
                    alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                    window.location.href = "../../html/homeadm.php";
                    break;
            }
        })   
    })

    // form Alterar Reunioes
    $("#btn-alt1-r").on("click",function(e){
        e.preventDefault();
        var cod_reuniao = $('#cod_reuniao').val();
        $.ajax({
        url: 'AltReuniao_verifica.php',
        method: 'POST',
        data: {cod_reuniao: cod_reuniao},
        dataType: 'json'
        }).done(function(result){
            switch (result){
                case "Reunião encontrada!":
                    document.form_ReuniaoAlt1.submit();
                    break;

                case "Reunião não cadastrada!":
                    alert("Reunião não cadastrada!");
                    window.location.href = "AltReuniao.php";
                    break;

                default:
                    alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                    window.location.href = "../../html/homeadm.php";
                    break;
            }
        })   
    })

    $("#btn-alt2-r").on("click",function(e){
        e.preventDefault();
        var cod_reuniao = $('#cod_reuniao').val();
        var horario_reuniao = $('#horario_reuniao').val();
        var data_reuniao = $('#data_reuniao').val();
        var descricao = $('#descricao').val();
        var nome = $('#nome').val();
        var data_agendamento = $('#data_agendamento').val();
        var num_sala = $('#num_sala').val();
        var cod_usuario = $('#cod_usuario').val();
        
        $.ajax({
            url: 'AltReuniao_altera.php',
            method: 'POST',
            data: {cod_reuniao: cod_reuniao, horario_reuniao: horario_reuniao, 
                data_reuniao: data_reuniao, descricao: descricao,
                nome: nome, data_agendamento: data_agendamento,
                num_sala: num_sala, cod_usuario: cod_usuario},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro alterado com sucesso!");
                window.location.href = "AltReuniao.php";
            }
            else{
                alert("Falha ao alterar o registro, favor contactar o administrador.");
                window.location.href = "../../teste/homeadm.html";

            }
        })
    })

    // form Cadastrar Reunioes
    $("#btn-cad-r").on("click",function(e){
        e.preventDefault();
        var horario_reuniao = $('#horario_reuniao').val();
        var data_reuniao = $('#data_reuniao').val();
        var descricao = $('#descricao').val();
        var nome = $('#nome').val();
        var data_agendamento = $('#data_agendamento').val();
        var num_sala = $('#num_sala').val();
        var cod_usuario = $('#cod_usuario').val();
        
        $.ajax({
            url: 'CadReuniao.php',
            method: 'POST',
            data: {horario_reuniao: horario_reuniao, data_reuniao: data_reuniao, 
                descricao: descricao, nome: nome,
                data_agendamento: data_agendamento, num_sala: num_sala,
                cod_usuario: cod_usuario},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro cadastrado com sucesso!");
                window.location.href = "CadReuniao_mostra.php";
            }
            else{
                alert("Erro ao inserir o registro no Banco de Dados");
                window.location.href = "../../html/homeadm.php";
            }
        })
    })

    //Form Excluir Reuniao
    $("#btn-exc-r").on("click",function(e){
        e.preventDefault();
        var cod_reuniao = $('#cod_reuniao').val();
        $.ajax({
            url: 'ExclReuniao.php',
            method: 'POST',
            data: {cod_reuniao: cod_reuniao},
            dataType: 'json'
        }).done(function(result){
            switch (result){
                case "Reunião não cadastrada!":
                    alert("Reunião não cadastrada!");
                    window.location.href = "ExclReuniao_mostra.php";
                    break;
                
                case "Excluído com sucesso!":
                    alert("Excluído com sucesso!");
                    window.location.href = "ExclReuniao_mostra.php";
                    break;

                default:
                    alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                    window.location.href = "../../html/homeadm.php";
                    break;
            }
        })
    })
    // Form Pesquisar Reuniao
    $("#btn-pesq-r").on("click",function(e){
        e.preventDefault();
        var cod_reuniao = $('#cod_reuniao').val();
        $.ajax({
        url: 'PesqReuniao_verifica.php',
        method: 'POST',
        data: {cod_reuniao: cod_reuniao},
        dataType: 'json'
        }).done(function(result){
            
            switch (result){
                case '0':
                    document.f1.submit();
                    break;

                case '1':
                    alert("Não há reuniões cadastradas!");
                    window.location.href = "../../html/homeadm.php";
                    break;

                default:
                    alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                    window.location.href = "../../html/homeadm.php";
                    break;
            }
        })   
    })

    // form Alterar TCC
    $("#btn-alt1-t").on("click",function(e){
        e.preventDefault();
        var cod_tcc = $('#cod_tcc').val();
        $.ajax({
        url: 'AltTcc_verifica.php',
        method: 'POST',
        data: {cod_tcc: cod_tcc},
        dataType: 'json'
        }).done(function(result){
            switch (result){
                case "TCC encontrado!":
                    document.form_TccAlt1.submit();
                    break;

                case "TCC não cadastrado!":
                    alert("TCC não cadastrado!");
                    window.location.href = "AltTcc.html";
                    break;

                default:
                    alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                    window.location.href = "../../html/homeadm.php";
            }
        })   
    })

    $("#btn-alt2-t").on("click",function(e){
        e.preventDefault();
        var cod_tcc = $('#cod_tcc').val();
        var horario_tcc = $('#horario_tcc').val();
        var data_tcc = $('#data_tcc').val();
        var descricao = $('#descricao').val();
        var nome = $('#nome').val();
        var data_agendamento = $('#data_agendamento').val();
        var num_sala = $('#num_sala').val();
        var cod_usuario = $('#cod_usuario').val();
        
        $.ajax({
            url: 'AltTcc_altera.php',
            method: 'POST',
            data: {cod_tcc: cod_tcc, horario_tcc: horario_tcc, 
                data_tcc: data_tcc, descricao: descricao,
                nome: nome, data_agendamento: data_agendamento,
                num_sala: num_sala, cod_usuario: cod_usuario},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro alterado com sucesso!");
                window.location.href = "AltTcc.html";
            }
            else{
                alert("Falha ao alterar o registro, favor contactar o administrador.");
                window.location.href = "../../html/homeadm.php";
            }
        })
    })

    // form cadastrar Tcc
    $("#btn-cad-t").on("click",function(e){
        e.preventDefault();
        var horario_tcc = $('#horario_tcc').val();
        var data_tcc = $('#data_tcc').val();
        var descricao = $('#descricao').val();
        var nome = $('#nome').val();
        var data_agendamento = $('#data_agendamento').val();
        var num_sala = $('#num_sala').val();
        var cod_usuario = $('#cod_usuario').val();
        
        $.ajax({
            url: 'CadTcc.php',
            method: 'POST',
            data: {horario_tcc: horario_tcc, 
                data_tcc: data_tcc, descricao: descricao,
                nome: nome, data_agendamento: data_agendamento,
                num_sala: num_sala, cod_usuario: cod_usuario},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro cadastrado com sucesso!");
                window.location.href = "CadTcc.html";
            }
            else{
                alert("Falha ao cadastrar o registro, favor contactar o administrador.");
                window.location.href = "../../html/homeadm.php";
            }
        })
    })
    //Form Excluir TCC
    $("#btn-exc-t").on("click",function(e){
        e.preventDefault();
        var cod_tcc = $('#cod_tcc').val();
        
        $.ajax({
            url: 'exclTcc.php',
            method: 'POST',
            data: {cod_tcc: cod_tcc},
            dataType: 'json'
        }).done(function(result){
            switch (result){
                case "TCC não cadastrada!":
                alert("TCC não cadastrada!");
                window.location.href = "exclTcc_mostra.php";
                break;
                
                case "Excluído com sucesso!":
                alert("Excluído com sucesso!");
                window.location.href = "exclTcc_mostra.php";
                break;

                default:
                alert("Ocorreu um problema no banco de dados, favor contactar o administrador");
                window.location.href = "../../html/homeadm.php";
            }
        })
    })