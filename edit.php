<?php include_once("header.php") ?>
<?php include_once("config.php") ?>
<?php include_once("mysqlthiago.php") ?>
<?php 
	$id = $_GET['id_produto'];
	$db = new mysqlthiago(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	$dados = $db->mysqli_prepared_query("SELECT * FROM ph2_produtos WHERE ph2_id_produto = ".$id);
	//echo '<pre>'; print_r($dados); echo '</pre>';
?>
	<main class="index">
		<div class="container">
			<aside class="col-sm-3">
				<ul>
					<li>
						<div class="overlay">
							<a href="create.php">
								<div style="width: 100%">Cadastrar Novo Produto</div>
							</a>
						</div>
						<a href="">
							<div style="width: 100%">Cadastrar Novo Produto</div>
						</a>
					</li>
					<li>
						<div class="overlay">
							<a href="search.php">
								<div style="width: 100%">Pesquisar Produto</div>
							</a>
						</div>
						<a href="search.php">
							<div style="width: 100%">Pesquisar Produto</div>
						</a>
					</li>
				</ul>
			</aside>
			<section class="principal col-sm-9">
				<h2>Editar Produto</h2>
				<div class="formulario-cadastrar">
					<form action="acao.php" method="POST">
						<fieldset id="descricao">
							
								<label for="ph2_nome">Nome do produto</label>
								<input type="text" name="ph2_nome" value="<?=$dados[0]['ph2_nome']?>">
							
								<label for="ph2_meta_titulo">Meta Título</label>
								<input ype="text" name="ph2_meta_titulo" value="<?=$dados[0]['ph2_meta_titulo']?>">
							
								<label for="ph2_descricao">Descrição do produto</label>
								<textarea name="ph2_descricao" rows="5"><?=$dados[0]['ph2_descricao']?></textarea>
							
								<label for="ph2_meta_descricao">Meta Descrição</label>
								<textarea name="ph2_meta_descricao" rows="5"><?=$dados[0]['ph2_meta_descricao']?></textarea>
						</fieldset>
						<fieldset id="dados">
							
								<label for="ph2_fabricante">Fabricante</label>
								<input type="text" name="ph2_fabricante" value="<?=$dados[0]['ph2_fabricante']?>">
							
								<label for="ph2_modelo">Modelo</label>
								<input type="text" name="ph2_modelo" value="<?=$dados[0]['ph2_modelo']?>">
							
								<label for="ph2_codigo_barras">Código de Barras</label>
								<input type="text" name="ph2_codigo_barras" value="<?=$dados[0]['ph2_codigo_barras']?>">
							
								<label for="ph2_preco">Preço</label>
								<input type="text" name="ph2_preco" value="<?=$dados[0]['ph2_preco']?>">
							
								<label for="ph2_peso">Peso (em Kilos)</label>
								<input type="text" name="ph2_peso" value="<?=$dados[0]['ph2_peso']?>">
							
								<label for="ph2_altura">Altura (em Centimetros)</label>
								<input type="text" name="ph2_altura" value="<?=$dados[0]['ph2_altura']?>">
							
								<label for="ph2_largura">Largura (em Centimetros)</label>
								<input type="text" name="ph2_largura" value="<?=$dados[0]['ph2_largura']?>">
							
								<label for="ph2_profundidade">Profundidade (em Centimetros)</label>
								<input type="text" name="ph2_profundidade" value="<?=$dados[0]['ph2_profundidade']?>">
							
								<label for="ph2_status">Habilitar Produto</label>
								<select name="ph2_status">

									<?php if ($dados[0]['ph2_status'] == 1) { ?>
										<option value="1" selected='true'>Sim</option>
									<?php } else { ?>
										<option value="1">Sim</option>
									<?php } ?>

									<?php if ($dados[0]['ph2_status'] == 0) { ?>
										<option value="0" selected='true'>Não</option>
									<?php } else { ?>
										<option value="0">Não</option>
									<?php } ?>
									
								</select>

								<input type="hidden" name="acao" value="update">
								<input type="hidden" name="id" value="<?=$id?>">
						</fieldset>
						<div class="button-group">
							<input type="submit" name="enviar">
						</div>			
					</form>
				</div>
			</section>
	</main>
<?php include_once("footer.php"); ?>