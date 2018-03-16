<?php include_once("header.php") ?>
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
							<a href="">
								<div style="width: 100%">Pesquisar Produto</div>
							</a>
						</div>
						<a href="">
							<div style="width: 100%">Pesquisar Produto</div>
						</a>
					</li>
				</ul>
			</aside>
			<section class="principal col-sm-9">
				<h2>Pesquisar produto</h2>
				<div class="formulario-pesquisa">
					<form action="acao.php" method="POST">
						<label for="serach_nome">Nome</label>
						<input type="text" name="ph2_nome">

						<label for="serach_modelo">Modelo</label>
						<input type="text" name="ph2_modelo">

						<label for="serach_fabricante">Fabricante</label>
						<input type="text" name="ph2_fabricante">

						<label for="serach_codigo_barras">Cóigo de Barras</label>
						<input type="text" name="ph2_codigo_barras">

						<input type="hidden" name="acao" value="busca">

						<input type="submit" name="Pesquisar">
					</form>
				</div>
			</section>
	</main>
<?php include_once("footer.php") ?>