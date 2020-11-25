$(document).ready(function(){

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
            url: 'http://localhost/VIP/rotinas/horarios/altHorarios_altera.php',
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
            url: 'http://localhost/VIP/rotinas/horarios/cadHorarios.php',
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
    $("#form-altera-reunioes").on("submit",function(e){
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
            url: 'http://localhost/VIP/rotinas/reunioes/AltReuniao_altera.php',
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
    $("#form-cadastrar-reunioes").on("submit",function(e){
        e.preventDefault();
        var cod_usuario = $('#cod_usuario').val();
        var cod_turma = $('#cod_turma').val();
        var horainicio = $('#horainicio').val();
        var horafim = $('#horafim').val();
        var diadasemana = $('#diadasemana').val();
        var materia = $('#materia').val();
        var professor = $('#professor').val();
        
        $.ajax({
            url: 'http://localhost/VIP/rotinas/horarios/CadReuniao.php',
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
            url: 'http://localhost/VIP/rotinas/tcc/AltTcc_altera.php',
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

    

    
    $("#form-cadastrar-tcc").on("submit",function(e){
        e.preventDefault();
        var cod_usuario = $('#cod_usuario').val();
        var cod_turma = $('#cod_turma').val();
        var horainicio = $('#horainicio').val();
        var horafim = $('#horafim').val();
        var diadasemana = $('#diadasemana').val();
        var materia = $('#materia').val();
        var professor = $('#professor').val();
        
        $.ajax({
            url: 'http://localhost/VIP/rotinas/tcc/CadTcc.php',
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
})