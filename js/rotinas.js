
    // form Alterar Horarios
    $("#form-altera-horarios").on("submit",function(e){
        e.preventDefault();
        var cod_horario = $('#cod_horario').val();
        var cod_usuario = $('#cod_usuario').val();
        var cod_turma = $('#cod_turma').val();
        var horainicio = $('#horainicio').val();
        var horafim = $('#horafim').val();
        var diaSemana = $('#diaSemana').val();
        var materia = $('#materia').val();
        var professor = $('#professor').val();
        
        $.ajax({
            url: 'altHorarios_altera.php',
            method: 'POST',
            data: {cod_usuario: cod_usuario, cod_turma: cod_turma, 
                horainicio: horainicio, horafim: horafim,
                diaSemana: diaSemana, materia: materia,
                professor: professor, cod_horario: cod_horario},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro alterado com sucesso!");
                window.location.href = "altHorarios.html";
            }
            else{
                alert("Falha ao alterar o registro, favor contactar o administrador.");
                window.location.href = "../../teste/homeadm.html";
            }
        })
    })
    // form Cadastrar Horarios
    $("#form-cadastrar-horarios").on("submit",function(e){
        e.preventDefault();
        var cod_usuario = $('#cod_usuario').val();
        var cod_turma = $('#cod_turma').val();
        var horainicio = $('#horainicio').val();
        var horafim = $('#horafim').val();
        var diadasemana = $('#diadasemana').val();
        var materia = $('#materia').val();
        var professor = $('#professor').val();
        
        $.ajax({
            url: 'cadHorarios.php',
            method: 'POST',
            data: {cod_usuario: cod_usuario, cod_turma: cod_turma, 
                horainicio: horainicio, horafim: horafim,
                diadasemana: diadasemana, materia: materia,
                professor: professor},
            dataType: 'json'
        }).done(function(result){
            if(result == "0"){
                alert("Registro cadastrado com sucesso!");
                window.location.href = "cadHorarios.html";
            }
            else{
                alert("Falha ao cadastrar o registro, favor contactar o administrador.");
                window.location.href = "../../teste/homeadm.html";
            }
        })
    })

    // form Alterar Reunioes
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
                window.location.href = "AltReuniao.html";
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
                window.location.href = "CadReuniao.html";
            }
            else{
                alert(result);
                window.location.href = "../../teste/homeadm.html";
            }
        })
    })
    //Form Excluir Reuniao
    $("#btn-exc-r").on("click",function(e){
        e.preventDefault();
        var cod_reuniao = $('#cod_reuniao').val();
        console.log("sua vaca");
        
        $.ajax({
            url: 'ExclReuniao.php',
            method: 'POST',
            data: {cod_reuniao: cod_reuniao},
            dataType: 'json'
        }).done(function(result){
            if(result == "Reunião não cadastrada!"){
                alert("Reunião não cadastrada!");
                window.location.href = "ExclReuniao.html";
            }
            else if(result == "Excluído com Sucesso"){
                alert("Excluído com Sucesso");
                window.location.href = "ExclReuniao.html";
            }
            else{
                alert("Ocorreu um problema no banco de dados, favor contactar o adm");
                window.location.href = "../../teste/homeadm.html";
            }
        })
    })
    // form Alterar Tcc
    $("#form-altera-tcc").on("submit",function(e){
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
                window.location.href = "../../teste/homeadm.html";
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
                window.location.href = "../../teste/homeadm.html";
            }
        })
    })