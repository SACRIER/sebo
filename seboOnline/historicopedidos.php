<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Histórico - Sebo Online</title>
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
								<a href="historicopedidos.php" class="logo">
									<span class="symbol"><img src="images/logomini.png" alt="" /></span><span class="title">Histórico de pedidos</span>
								</a>
								<br>
								<form method="POST" action="pesquisar-pedido.php">
									<input type="text" name="numpedido" placeholder="Pesquise por um pedido específico">
									<input type="submit" value="Pesquisar">
								</form>

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
				<div  class="container " style="background-color: white;">
			<div class="table" >

				<table class="table table-hover">
					<thead>
						<tr align="left">

													
							<th>Nº Pedido</th>
							<th>Nome</th>
							<th>Preço</th>
							<th>Forma Pagamento						
							


						</tr>
					</thead>
					<tbody>

						<?php
						include_once('conect.php');
				
						

						
						//procurando itens no carrinho!
						$select = ("SELECT * FROM finaliza");
						$result = $conn->query($select);
						
						
						if ($result->num_rows > 0) 
						{   
							//resultado
							
							while($row = $result->fetch_assoc()) 
							{
								$id="".$row["id"]."";
								$numeropedido = "".$row["numeropedido"]."";
								$formapagamento = "".$row["formapagamento"]."";
								
								
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
									
										

										?>
										<tr align='left-left' ondblclick="location.href='livro.php?id=<?php echo $id ?>';">
											<?php

											echo "<td style='color:black;' ><b>$numeropedido</b></td>";
											
											echo "<td ><a  href='livro.php?id=$id' ><i class='fa fa-book' aria-hidden='true'></i> $titulo </b></a></td>";
											//echo "<td style='font-size:14px;'><b>$titulo</b></td>";
											

											$preco = round($preco,2);
											$preco = number_format($preco, 2,',','.');
											echo "<td style='color:black;' ><b>R$$preco</b></td>";

											
											echo "<td style='color:black;' ><b>$formapagamento</b></td>";
											

										
									


											
											echo "</tr>";

											

										}
										
										
									}
									
							// fim da lista


								}
								
							}

							else{
								echo "<script type='text/javascript'>alert('Lista vazia apenas!')</script>";
								echo "<script type='text/javascript'>history.go(-1)</script>";
							}

							


							mysqli_close($conn);
							?>






						</tbody>
					</table>


				</div>
				</div>
				

		


                <!-- Footer -->
			
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>