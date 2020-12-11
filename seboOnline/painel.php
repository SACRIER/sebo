<?php
require "verifica.php"; 

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Sebo Online</title>
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

							<!-- Logo --
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>-->

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
							<li><a href="index.html">Itens à venda</a></li>
							<li><a href="generic.html">Lista de Desejos</a></li>
							<li><a href="generic.html">Histórico de pedidos</a></li>
							<li><a href="generic.html">Minhas vendas</a></li>
							<li><a href="elements.html">Sair</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<button>Carrinho&nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i></button>
								<br><br><h1>Sebo Online</p>
									<?php 
										echo "<b>Bem vindo, </b>".$_SESSION['login']; 
									?>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/livro1.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Harry Potter e o cálice de fogo</h2>
										<div class="content">
											<p>Autor(a): J.K. Rowling</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/livro2.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>A senhora do lago</h2>
										<div class="content">
											<p>Autor(a): Andrzej Sapkowski</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/livro3.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Star Wars: Tarkin</h2>
										<div class="content">
											<p>Autor(a): James Luceno</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/livro4.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>A Cabana</h2>
										<div class="content">
											<p>Autor(a): William P. Young</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/livro5.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Batman: O lance do Charada</h2>
										<div class="content">
											<p>Autor(a): Alex Irvine</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/livro6.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Caixa de pássaros</h2>
										<div class="content">
											<p>Autor(a): Josh Malerman</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/livro7.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Introdução à metodologia científica</h2>
										<div class="content">
											<p>Autor(a): Ivan Carlo Andrade de Oliveira</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/livro8.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Laranja mecânicaDolor</h2>
										<div class="content">
											<p>Autor(a): Anthony Burgess</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/livro9.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Os Lusíadas</h2>
										<div class="content">
											<p>Autor(a): Luís de Camões</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/livro10.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Desaparecido para sempre</h2>
										<div class="content">
											<p>Autor(a): Harlan Coben</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/livro11.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Harry Potter e a câmara secreta</h2>
										<div class="content">
											<p>Autor(a): J.K. Rowling</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/livro12.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Pega a visão</h2>
										<div class="content">
											<p>Autor(a): Rick Chester</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Entre em contato conosco</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Nome" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
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
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
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