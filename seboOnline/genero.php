
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Meus livros - Sebo Online</title>
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
								<a href="livrosusuario.php" class="logo">
									<span class="symbol"><img src="images/logomini.png" alt="" /></span><span class="title">Meus livros no sebo</span>
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

					<?php
				
					include_once("conect.php");
					require "verifica.php";
					$genero = $_POST["genero"];
					$email = $_SESSION["email"];
					$sqlg = "INSERT INTO viewgenero(id, email, genero) VALUES (null,'$email','$genero')";
					$resultado = mysqli_query($conn, $sqlg);
					
				?>

				<!-- Main -->
				<div id="main">
						<div class="inner">                            
                            <h3>Resultados</h3>
									<div class="table-wrapper">
									<?php
	include_once("conect.php");
	
	$genero = $_POST['genero'];
  
	
	
	$sql= "SELECT * FROM livro WHERE genero LIKE '$genero' LIMIT 5";
	
	$res = mysqli_query($conn, $sql);
	
    
    while($dados = mysqli_fetch_array($res)){
        $id = $dados["id"];
        $t = $dados["titulo"];
        $genero = $dados["genero"];
        $a = $dados["autor"];
        $f1 = $dados["foto1"];
            
        echo "
        <section class='tiles'>
            <article class='style6'>
                <span class='image'>
                    <img src='$f1' alt='' width='300' height='250' />
                </span>
                <a href='livro.php?id=$id'>
                    <h2>$t</h2>
                    <div class='content'>
                        <p>Autor(a): <b>$a</b></p>
                    </div>
                </a>
            </article>
        
        </section>
        ";
        
    } if(mysqli_affected_rows($conn) == 0) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=principal.php'>
    <meta charset='UTF-8'>
        <script type=\"text/javascript\">
            alert(\"NAO TEM LIVRO DESSE GENERO PARSA PARSA\");
        </script>
        ";
    }       
                                        
       
        //echo "Nome do curso: ".$rows_livros['titulo']."<br>";
    
?>
							</div>
							</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
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



