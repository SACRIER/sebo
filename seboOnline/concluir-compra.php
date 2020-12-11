<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Obrigado por comprar - Sebo Online</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="concluir-compra.php" class="logo">
									<span class="symbol"><img src="images/logomini.png" alt="" /></span><span class="title">Finalizando a compra</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
                            <li><a href="principal.php">Itens à venda</a></li>
							<li><a href="livrosusuario.php">Meus livros</a></li>
							<li><a href="desejos.php">Lista de Desejos</a></li>
							<li><a href="historicopedidos.php">Histórico de pedidos</a></li>
							<li><a href="vendasusuario.php">Minhas vendas</a></li>
							<li><a href="principal.html">Sair</a></li>
						</ul>
					</nav>

				<!-- Main -->
				<div id="main">
						<div class="table">
					
						<table class="table table-hover">
						<thead>
						<h1>Você acabou de concluir sua compra :)</h1>
						<tr align="left">

													
							
							<th>Nome</th>
							<th>Preço</th>						
							<th>Excluir</th>


						</tr>
					</thead>
					<tbody>

				
						<?php
						include_once('conect.php');
					
						

						$i=0;
						//procurando itens no carrinho!
						$select = ("SELECT * FROM carrinho");
						$result = $conn->query($select);
						
						$total = 0;
						if ($result->num_rows > 0) 
						{   
							//resultado
							
							while($row = $result->fetch_assoc()) 
							{
								$id="".$row["id"]."";
								$titulo = "".$row["titulo"]."";
								$preco = "".$row["preco"]."";
								
								//echo $codigo;
								//echo $item;
								//echo $quantidade;
							//comecando a lista
							
								$select2 = ("SELECT * FROM livro WHERE id = '$id'");
								$result2 = $conn->query($select2);
								//echo $result2->num_rows; 
								if ($result2->num_rows > 0) 
								{   
									while($row = $result2->fetch_assoc()) 
									{
										$id = "".$row['id']."";
										$titulo = "".$row['titulo']."";
										$preco = "".$row['preco']."";
										$total += $preco;
										

										?>
										<tr align='left-left' ondblclick="location.href='livro.php?id=<?php echo $id ?>';">
											<?php

											
											echo "<td><a  href='livro.php?id=$id' ><i class='fa fa-book' aria-hidden='true'></i> $titulo </b></a></td>";
											

											$preco = round($preco,2);
											$preco = number_format($preco, 2,',','.');
											echo "<td style='color:black;' ><b>R$$preco</b></td>";


											
											

											$i++;
									


											echo "<td ><a  href='deletecarrinho.php?id=$id' ><i class='fas fa-shopping-cart'></i> Excluir </b></a></td>";
											echo "</tr>";

											

										}
										

									}
									
							// fim da lista


								}
								$total = round($total,2);
											$total = number_format($total, 2,',','.');
								echo "<td <h1>Total: </h1><b>$total</b></td>";
							}

							else{
								echo "<script type='text/javascript'>alert('Carrinho Vazio!')</script>";
								echo "<script type='text/javascript'>history.go(-1)</script>";
							}

							


							mysqli_close($conn);
							?>






						</tbody>
					</table>
					</div>
					</div>
                        <center>
                        <input type="button" value="Voltar para página principal" class="primary" onClick="javascript: location.href='principal.php';">
                        <input type="button" value="Verificar histórico de compras" onClick="javascript: location.href='historicopedidos.php';">
						</center>
                        </div>
					</div>

                <!-- Footer -->
				<footer id=footer>
				<div class="inner">
							<section>
								<h2><center>Em caso de dúvidas, envie uma mensagem para nossa equipe</center></h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Nome" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="E-mail" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Mensagem"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2><center>Siga-nos nas redes sociais</center></h2>
								<ul class="icons">
                                    <center>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
                                    <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                                    </center>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Sebo Online. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>