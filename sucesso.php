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
				<h2>Cadastro Relaizado com sucesso</h2>
			</section>
		</div>
	</main>
<?php include_once("footer.php") ?>