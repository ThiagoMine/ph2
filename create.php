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
				<h2>Cadastrar novo produto</h2>
				<div class="formulario-cadastrar">
					<form action="acao.php" method="post">
						<fieldset id="descricao">
							
								<label for="ph2_nome">Nome do produto</label>
								<input type="text" name="ph2_nome">
							
								<label for="ph2_meta_titulo">Meta Título</label>
								<input ype="text" name="ph2_meta_titulo">
							
								<label for="ph2_descricao">Descrição do produto</label>
								<textarea name="ph2_descricao" rows="5"></textarea>
							
								<label for="ph2_meta_descricao">Meta Descrição</label>
								<textarea name="ph2_meta_descricao" rows="5"></textarea>
						</fieldset>
						<fieldset id="dados">
							
								<label for="ph2_fabricante">Fabricante</label>
								<input type="text" name="ph2_fabricante">
							
								<label for="ph2_modelo">Modelo</label>
								<input type="text" name="ph2_modelo">
							
								<label for="ph2_codigo_barras">Código de Barras</label>
								<input type="text" name="ph2_codigo_barras">
							
								<label for="ph2_preco">Preço</label>
								<input type="text" name="ph2_preco">
							
								<label for="ph2_peso">Peso (em Kilos)</label>
								<input type="text" name="ph2_peso">
							
								<label for="ph2_altura">Altura (em Centimetros)</label>
								<input type="text" name="ph2_altura">
							
								<label for="ph2_largura">Largura (em Centimetros)</label>
								<input type="text" name="ph2_largura">
							
								<label for="ph2_profundidade">Profundidade (em Centimetros)</label>
								<input type="text" name="ph2_profundidade">
							
								<label for="ph2_status">Habilitar Produto</label>
								<select name="ph2_status">
									<option value="1">Sim</option>
									<option value="0">Não</option>
								</select>

								<input type="hidden" name="acao" value="novo">
						</fieldset>
						<div class="button-group">
							<input type="submit" name="enviar">
						</div>			
					</form>
				</div>
			</section>
		</div>
	</main>
<?php include_once("footer.php") ?>