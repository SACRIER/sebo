<?php
//require ("verifica.php"); 

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Sebo Online</title>
		<img src="images/LOGOjogos.png" width="300" height="200"/>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/font.css" />
		<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo --
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>-->

							<!-- Nav -->
								<nav>
									<ul>
									<li>
										<?php 
											//echo "<b>Olá, </b>".$_SESSION['login']." |  "; 
										?>
									</li>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
						
							<li><a href="perfil.php">Perfil</a></li>
							<li><a href="livrosusuario.php">Meus livros</a></li>
							<li><a href="desejos.php">Lista de Desejos</a></li>
							<li><a href="historicopedidos.php">Histórico de pedidos</a></li>
							<li><a href="vendasusuario.php">Minhas vendas</a></li>
							<li><a href="destroy.php">Sair</a></li>
						</ul>
					</nav>



				<!-- Main -->
			<div  class="container" align="center" >
    			<div class="row" id="card_item">
							<header>
								<center>
								<button type="button" onClick="javascript: location.href='carrinho.php'">Meu Carrinho&nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i></button>
								<br><br>
								<form method="POST" action="pesquisar-livros.php">
								<input type="text" name="pesquisar" placeholder="Procure um jogo aqui">
								<input type="submit" value="Pesquisar">
								</form>
								<br>
								<h2>Jogos à venda</h2>
								</center>
							</header>
				</div>
			</div>
			<div id="main">
						<div class="inner">
							<header>
								<br><br><h1>SACRIER: Sua loja de Games</h1>
								<h2>Jogos à venda</h2>
							</header>
							<section class="tiles">

			
								<!--<form method="POST" action="genero.php">
								<input type="text" name="genero" placeholder="Procure pelo genero aqui">
								<input type="submit" value="genero">
								</form>-->

								<form method="POST" action="genero.php" enctype="multipart/form-data">
			
									<br><b>Procurar por um gênero especifico:</b>
										<select class="list_of_works" name="genero" required="">
								            <option selected style="display:none;color:#000000;">Selecione</option>
								            <option value="MMORPG">MMORPG</option>
								            <option value="Terror">Terror</option>
								            <option value="Ficção">Ficção</option>
								            <option value="Luta">Luta</option>
								            <option value="Ação">Ação</option>
								            <option value="Aventura">Aventura</option>
											<option value="Indie">Indie</option>
								            <option value="MOBA">MOBA</option>
											<option value="Plataforma">Plataforma</option>
								          </optgroup>
								        </select>
										<center>
								    	<button>Pesquisar</button>
								    	</center>
										</form>
										<!--<script type="text/javascript">
											$(function(){
											$('#genero').on('change', function(e){

												var genero = $("#genero").val();
										
												$.post('genero.php',{genero: genero});
												// aqui você coloca o que quer fazer...
												// quando a pessoa selecionar algo no select 
												//$('#resultado').html($(this).val()); // este é só um exemplo
											});
											});
										</script>-->
									
					<div class="table">
						<table class="table ">	
						<tbody>
							<tr>
				

									
                           			 <?php
									include_once("conect.php");
									$cont = 0;
									$sql = "SELECT * FROM livro";
									$res = mysqli_query($conn, $sql);
									
					                if ($res->num_rows > 0) 
									{   
									
										while($row = $res->fetch_assoc()) 
								
									{
									
					               	$id = "".$row['id']."";
					                $t = "".$row['titulo']."";
					                $a = "".$row['autor']."";
					                $f1 = "".$row['foto1']."";
								 
								
								
								
									
									$cont++;
							
					
									
									echo "
									
									<td> 
								
								  <section class='tiles'>
										<article class='style6'>
										<span class='image'>
									<img src='$f1' alt='' width='400' height='200' />
										</span>
										<a href='livro.php?id=$id'>
											<h2>$t</h2>
											<div class='content'>
													<p>Autor(a): <b>$a</b></p>
											</div>
										</a>
									</article>
									
									 </section>
									

									 </td> 

				
								";
								
						
						
					
						
						//verefica se ja tem 3 imagens na mesma linha cria uma proxima linha
					
						if($cont == 3){
							echo  "</tr>";
							 echo "<tr>";
							$cont = 0;
	
						}	
					} 
				
					   
									
							}
						
							?>
				
				</tr>	
			</tbody>
		</table>
	</div>


					</div>
							
					</div>
				
					<footer id="footer">
						<div class="inner">
						<section>
								<h2><center>Em caso de dúvidas, envie uma mensagem para nossa equipe</center></h2>
								<form method="POST" action="faleconosco.php">
									<div class="fields">
										<div class="field half">
											<input type="text" name="nome" id="nome" placeholder="Nome" />
										</div>
										<div class="field half">
										<select class="list_of_works" name="tipo" required="">
								            <option selected style="display:none;color:#000000;">Selecione</option>
								            <option value="Dúvida">Dúvida</option>
								            <option value="Sugestão e Elogio">Sugestão e Elogio</option>
								            <option value="Reclamação">Reclamação</option>
								          </optgroup>
								        </select>
										</div>
										<div class="field">
											<textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
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
					</div>
					</div>
			</div>

		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>