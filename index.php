<?php include_once("header.php") ?>
<?php include_once("config.php") ?>
<?php include_once("mysqlthiago.php") ?>
<?php 
	$db = new mysqlthiago(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	$dados = $db->mysqli_prepared_query("SELECT * FROM ph2_produtos", null);
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
				<div class="formulario-principal">
					<form>
						<table>
							<thead>
								<tr>
									<td class="col-sm-1"></td>
									<td class="col-sm-2">Nome Do Produto</td>
									<td class="col-sm-3">Descrição</td>
									<td class="col-sm-1">Preço</td>
									<td class="col-sm-1">Habilitado</td>
									<td class="col-sm-1">Editar</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($dados as $dado) { ?>
									<?php  //echo '<pre>'; print_r($dado); echo '</pre>'; ?>
									<tr>
										<td class="col-sm-1"><input type="radio" name="produtos" id="produto-1" value="<?=$dado['ph2_id_produto']?>"></td>
										<td class="col-sm-2"><?=$dado['ph2_nome']?></td>
										<td class="col-sm-3"><?=$dado['ph2_descricao']?></td>
										<td class="col-sm-1">R$ <?=$dado['ph2_preco']?></td>
										<?php if ($dado['ph2_status']==1) { ?>
											<td class="col-sm-1"><span>Habilitado</span></td>
										<?php } else { ?>
											<td class="col-sm-1"><span>desabilitado</span></td>
										<?php } ?>
										<td class="col-sm-1"><a href="edit.php?id_produto=<?=$dado['ph2_id_produto']?>" class="btn-default">Editar</a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>					
					</form>
				</div>
			</section>
		</div>
	</main>
<?php include_once("footer.php") ?>