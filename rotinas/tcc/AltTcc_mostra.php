<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Alteração de dados: TCC</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
		<link rel="stylesheet" href="../css/rotinas-tudo.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php
			include_once "../../php/conexao.php";
			$cod_tcc = $_POST["cod_tcc"];
			$stmt = $pdo->prepare("SELECT cod_tcc,horario_tcc,data_tcc,descricao,nome,data_agendamento,S.num_sala,U.cod_usuario from tcc AS T INNER JOIN sala AS S ON T.num_sala=S.num_sala INNER JOIN usuario AS U ON T.cod_usuario=U.cod_usuario where cod_tcc = $cod_tcc");
			$stmt->execute();
			$num_rows = $stmt->rowCount();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
		?>
		<div class="cont-rotinas-gd">

			<h1>Alteração</h1>
					<form id="form-altera-tcc" name = "f1">
					<label>Código do TCC</label>
					<label id="cod"><?php echo $row['cod_tcc']?></label>
					<input type="hidden" id="cod_tcc" name="cod_tcc" value=<?php echo $row['cod_tcc'];?>>
					
					<label for="horario_tcc">Horário que irá ocorrer</label>
					<input type='time' id="horario_tcc" name='horario_tcc' value='<?php echo $row['horario_tcc'];?>' required>
					
					<label for="data_tcc">Data que irá ocorrer</label>
					<input type='date' id="data_tcc" name='data_tcc' value='<?php echo $row['data_tcc'];?>' required>
					
					<label for="descricao">Descrição</label> 
					<textarea id="descricao" name="descricao" required><?php echo $row['descricao'];?></textarea>
					
					<label for="nome">Nome</label> 
					<input type='text' id="nome" name='nome' value='<?php echo $row['nome'];?>' required>
					
					<label for="data_agendamento">Data de agendamento</label>
					<input type='date' id="data_agendamento" name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
					
					<label for="num_sala">Numero sala</label>
					<!-- <input type='text' id="num_sala" name='num_sala' onkeypress= "return blockletras(event)" value='<?php // echo $row['num_sala'];?>' required> -->
					<select name="num_sala" id="num_sala">
						<?php 
							$stmt = $pdo->prepare("SELECT * FROM sala");
							$stmt->execute();
							while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
								if($dados['num_sala'] == $row['num_sala']){
									?><option value="<?php echo $dados['num_sala'];?>" selected><?php echo $dados['num_sala'];?> - <?php echo $dados['nome_sala'];?></option><?php
								}
								else{
									?><option value="<?php echo $dados['num_sala'];?>"><?php echo $dados['num_sala'];?> - <?php echo $dados['nome_sala'];?></option><?php
								}
							}
						?>
					</select>

					<label for="cod_usuario">Código de usuário</label>
					<!-- <input type='text' id="cod_usuario" name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php // echo $row['cod_usuario'];?>' required> -->
					<select name="cod_usuario" id="cod_usuario">
						<?php 
							$stmt = $pdo->prepare("SELECT * FROM usuario");
							$stmt->execute();
							while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
								if($dados['cod_usuario'] == $row['cod_usuario']){
									?><option value="<?php echo $dados['cod_usuario'];?>" selected><?php echo $dados['cod_usuario'];?> - <?php echo $dados['usuario'];?></option><?php
								}
								else{
									?><option value="<?php echo $dados['cod_usuario'];?>"><?php echo $dados['cod_usuario'];?> - <?php echo $dados['usuario'];?></option><?php
								}
								
							}
						?>
					</select>

					<button id="btn-alt2-t"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button>
					<a href="../../html/homeadm.php">Voltar para a <span>home</span></a>		
				</form>
			</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="../../js/script.js"></script>	
		<script src="../../js/blockletras.js"></script>
		<script src="../../js/rotinas.js"></script>
	</body>
</html>