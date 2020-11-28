<?php
	include_once "../../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Alteração de reuniões</title>
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
			$cod_reuniao = $_POST['cod_reuniao'];
			$stmt = $pdo->prepare("SELECT cod_reuniao,horario_reuniao,data_reuniao,descricao,nome,data_agendamento,S.num_sala,U.cod_usuario FROM reunioes AS R INNER JOIN sala AS S ON R.num_sala = S.num_sala INNER JOIN usuario AS U ON R.cod_usuario = U.cod_usuario where cod_reuniao = $cod_reuniao");
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$sala = $row['num_sala'];
			$cod_usuario = $row['cod_usuario'];
		?>
		<div class="cont-rotinas-gd">
			<h1>Alteração</h1>
			<form id="form-altera-reunioes" name = "f1">
				<label>Código de reunião</label>
				
				<label id="cod"><?php echo $row['cod_reuniao'] ?></label>
				<input type="hidden" id="cod_reuniao" name="cod_reuniao" value="<?php echo $row['cod_reuniao'];?>">

				<label for="horario_reuniao">Horário da Reunião</label>
				<input type='time' id="horario_reuniao" name='horario_reuniao' value='<?php echo $row['horario_reuniao'];?>' required>
				
				<label for="data_reuniao">Data que irá ocorrer</label>
				<input type='date' id="data_reuniao" name='data_reuniao' value='<?php echo $row['data_reuniao'];?>' required>
				
				<label for="descricao">Descrição</label>
				<textarea id="descricao" name="descricao"><?php echo $row['descricao'];?></textarea>
				
				<label for="nome">Nome</label>
				<input type='text' id="nome" name='nome' value='<?php echo $row['nome'];?>' required>
				
				<label for="data_agendamento">Data de agendamento</label>
				<input type='date' id="data_agendamento" name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
				
				<label for="num_sala">Número de sala</label>
				<!-- <input type='text' list="dtl_num_sala" id="num_sala" name='num_sala' onkeypress= "return blockletras(event)" value='' required> -->
				<select id="num_sala" name="num_sala">
				<?php
					$stmt = $pdo->prepare("SELECT * FROM sala");
					$stmt->execute();
					while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
						if($dados['num_sala'] == $sala){
							?><option value="<?php echo $dados['num_sala'];?>" selected><?php echo $dados['num_sala'];?> - <?php echo $dados['nome_sala'];?></option><?php
						}
						else{
							?><option value="<?php echo $dados['num_sala'];?>"><?php echo $dados['num_sala'];?> - <?php echo $dados['nome_sala'];?></option><?php
						}
					}
					?>
				</select>
				
				<label for="cod_usuario">Código de usuário</label>
				<!-- <input type='text' list="dtl_cod_usuario" id="cod_usuario" name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php echo $cod_usuario;?>' required> -->
				<select id="cod_usuario" name="cod_usuario">
					<?php
					$stmt = $pdo->prepare("SELECT * FROM usuario");
					$stmt->execute();
					while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
						if($dados['cod_usuario'] == $cod_usuario){
							?><option value="<?php echo $dados['cod_usuario'];?>" selected><?php echo $dados['cod_usuario'];?> - <?php echo $dados['usuario'];?></option><?php
						}
						else{
							?><option value="<?php echo $dados['cod_usuario'];?>"><?php echo $dados['cod_usuario'];?> - <?php echo $dados['usuario'];?></option><?php
						}
					?>
						
					<?php
					}
					?>
				</select>


			
				<button id="btn-alt2-r"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button>
				<a href="../../html/homeadm.php">Voltar para a <span>home</span></a>
			</form>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="../../js/script.js"></script>	
	<script src="../../js/blockletras.js"></script>	
	<script src="../../js/rotinas.js"></script>
	</body>
</html>