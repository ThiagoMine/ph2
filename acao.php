<?php 

	include_once("config.php");
	include_once("mysqlthiago.php");
	$db = new mysqlthiago(DBHOST, DBUSER, DBPASSWORD, DBNAME);

	$dados = $_POST;

	switch ($dados['acao']) {
		case 'novo':
			unset($dados['acao']);
			unset($dados['enviar']);

			//echo '<pre>'; print_r($dados); echo '</pre>';

			$query = "INSERT INTO ph2_produtos (";

			$contador = 0;
			foreach ($dados as $key => $value) {
				$query = $query."".$key;
				if ($contador < 12) {
					$query = $query.", ";
				}else{
					$query = $query.") VALUES (";
				}
				$contador++;
			}

			$contador = 0;
			foreach ($dados as $key => $value) {
				$query = $query."?";
				if ($contador < 12) {
					$query = $query.", ";
				}else{
					$query = $query.");";
				}
				$contador++;
			}

			$contador = 0;
			foreach ($dados as $dado) {
				$param[$contador] = $dado;
				$contador++;
			}

			$result = $db->mysqli_prepared_query($query, $param);
			
			if ($result[0]==1) {
				include_once("header.php");
				include_once("sucesso.php");
				include_once("footer.php");
			}else{
				include_once("header.php");
				include_once("falha.php");
				include_once("footer.php");
			}			
		break;
		

		case 'update':
			$id = $dados['id'];

			unset($dados['acao']);
			unset($dados['enviar']);
			unset($dados['id']);

			$query = "UPDATE ph2_produtos SET ";

			$contador = 0;
			foreach ($dados as $key => $value) {
				if ($key=="ph2_peso" || $key=="ph2_altura" || $key=="ph2_largura" || $key=="ph2_profundidade" || $key=="ph2_status") {
					$query = $query."".$key." = ".$value;
				}else{
					$query = $query."".$key." = '".$value."'";
				}
				
				if ($contador < 12) {
					$query = $query.", ";
				}else{
					$query = $query." WHERE ph2_id_produto = ".$id;
				}
				$contador++;
			}

			$result = $db->mysqli_prepared_query($query);

			if ($result[0]==1) {
				include_once("header.php");
				include_once("sucesso.php");
				include_once("footer.php");
			}else{
				include_once("header.php");
				include_once("falha.php");
				include_once("footer.php");
			}			
		break;

		case 'busca':

			unset($dados['acao']);
			unset($dados['Pesquisar']);


			//echo '<pre>'; print_r($dados); echo '</pre>';

			$query = "SELECT * FROM ph2_produtos WHERE ";

			$contador = 0;

			foreach ($dados as $key => $value) {
				$query = $query."".$key." LIKE '%".$value."%'";
				if ($contador < 3) {
					$query = $query." and ";
				}else{
					$query = $query.";";
				}
				$contador++;
			}

			 

			$result = $db->mysqli_prepared_query($query);

			//	echo '<pre>'; print_r($result); echo '</pre>';exit();

			if (count($result)>0) {
				include_once("header.php");?>

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
											<?php foreach ($result as $dado) { ?>
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
				
				<?php include_once("footer.php");
			}else{
				include_once("header.php");?>
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

							<h2>Desculpe Nenhum dado encontrado!<br> Tente outro critério de busca.</h2>

						</section>
					</div>
				</main>
				<?php include_once("footer.php");
			}			
		break;

	}


?>