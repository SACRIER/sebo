<?php
require "verifica.php";
?>


<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Vender livro - Sebo Online</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script language="javascript">
            function sem_acento(e,args)
            {		
                if (document.all){var evt=event.keyCode;} // caso seja IE
                else{var evt = e.charCode;}	// do contrário deve ser Mozilla
                var valid_chars = '0123456789abcdefghijlmnopqrstuvxzwykABCDEFGHIJLMNOPQRSTUVXZWYKàáãâéèêíìóôõúÀÁÃÂÈÉÊÍÌÕÔÓÚ,@.:!?-_ '+args;	// criando a lista de teclas permitidas
                var chr= String.fromCharCode(evt);	// pegando a tecla digitada
                if (valid_chars.indexOf(chr)>-1){return true;}
                return false;	// do contrário nega
            }
      	</script>

 	<script type="text/javascript">

        function BlockKeybord()
        {
            if(window.event) // IE
            {
                if((event.keyCode < 48) || (event.keyCode > 57))
                {
                    event.returnValue = false;
                }
            }
            else if(e.which) // Netscape/Firefox/Opera
            {
                if((event.which < 48) || (event.which > 57))
                {
                    event.returnValue = false;
                }
            }


        }

        function troca(str,strsai,strentra)
        {
            while(str.indexOf(strsai)>-1)
            {
                str = str.replace(strsai,strentra);
            }
            return str;
        }

        function FormataMoeda(campo,tammax,teclapres,caracter)
        {
            if(teclapres == null || teclapres == "undefined")
            {
                var tecla = -1;
            }
            else
            {
                var tecla = teclapres.keyCode;
            }

            if(caracter == null || caracter == "undefined")
            {
                caracter = ".";
            }

            vr = campo.value;
            if(caracter != "")
            {
                vr = troca(vr,caracter,"");
            }
            vr = troca(vr,"/","");
            vr = troca(vr,".","");
            vr = troca(vr,".","");

            tam = vr.length;
            if(tecla > 0)
            {
                if(tam < tammax && tecla != 8)
                {
                    tam = vr.length + 1;
                }

                if(tecla == 8)
                {
                    tam = tam - 1;
                }
            }
            if(tecla == -1 || tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105)
            {
                if(tam <= 2)
                {
                    campo.value = vr;
                }
                if((tam > 2) && (tam <= 5))
                {
                    campo.value = vr.substr(0, tam - 2) + '.' + vr.substr(tam - 2, tam);
                }
                if((tam >= 6) && (tam <= 8))
                {
                    campo.value = vr.substr(0, tam - 5) + caracter + vr.substr(tam - 5, 3) + '.' + vr.substr(tam - 2, tam);
                }
                if((tam >= 9) && (tam <= 11))
                {
                    campo.value = vr.substr(0, tam - 8) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + '.' + vr.substr(tam - 2, tam);
                }
                if((tam >= 12) && (tam <= 14))
                {
                    campo.value = vr.substr(0, tam - 11) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + '.' + vr.substr(tam - 2, tam);
                }
                if((tam >= 15) && (tam <= 17))
                {
                    campo.value = vr.substr(0, tam - 14) + caracter + vr.substr(tam - 14, 3) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + '.' + vr.substr(tam - 2, tam);
                }
            }
        }

        function maskKeyPress(objEvent)
        {
            var iKeyCode;

            if(window.event) // IE
            {
                iKeyCode = objEvent.keyCode;
                if(iKeyCode>=48 && iKeyCode<=57) return true;
                return false;
            }
            else if(e.which) // Netscape/Firefox/Opera
            {
                iKeyCode = objEvent.which;
                if(iKeyCode>=48 && iKeyCode<=57) return true;
                return false;
            }


        }
    </script>

</script>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="principal.php" class="logo">
									<span class="symbol"><img src="images/logomini.png" alt="" /></span><span class="title">Meus livros à venda</span>
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
							<li><a href="destroy.php">Sair</a></li>
						</ul>
					</nav>
					
				<!-- Main -->
					<div id="main">
						<div class="inner">                            
                            <h3>Meu catálogo</h3>
									<div class="table-wrapper">
									<?php
							include_once("conect.php");
							
							$email = $_SESSION["email"];
							
							$sql = "SELECT * FROM livro WHERE email ='$email'";
							$res = $conn->query($sql);
							while ($dados = mysqli_fetch_array($res)) {
							$email = $dados["email"];
							$titulo = $dados["titulo"];
							$autor = $dados["autor"];
							$genero = $dados["genero"];
							$idioma = $dados["idioma"];
							$preco = $dados["preco"];
							$preco = round($preco,2);
							$preco = number_format($preco, 2,',','.');
							

								echo "
									<div class='table-wrapper'>
									<table class='alt'>
											<thead>
												<tr>
													<th>Titulo</th>
													<th>Autor</th>
													<th>Gênero</th>
                                                    <th>Idioma</th>
                                                    <th>Preço</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$titulo</td>
													<td>$autor</td>
													<td>$genero</td>
                                                    <td>$idioma</td>
                                                    <td>$preco</td>
                                                    
												</tr>
											</tbody>
										</table>
                                                          

									</div>                           
								</section>
								";
							}
                                ?>
                                <!-- Form -->
						<div id="main">
						<div class="inner">
							<header>
								<br><br><h1>Adicionar livro</h1>
							</header>
							<div class="container">
									<form method="POST" action="addlivroavenda.php" enctype="multipart/form-data">
										<div id="col1">
										<b>Título:</b>
										<input type="tel" name="titulo" placeholder="Título do livro..." onkeypress="return sem_acento(event);" maxlength="50" required="">
										<br><b>Autor:</b>
										<input type="tel" name="autor" placeholder="Autor do livro..." onkeypress="return sem_acento(event);" maxlength="50" required="">
										<br><b>Coleção:</b>
										<input type="tel" name="colecao" placeholder="Colecao do livro..." onkeypress="return sem_acento(event);" maxlength="50" required="">
										<br><b>Editora:</b>
										<input type="tel" name="editora" placeholder="Editora do livro..." onkeypress="return sem_acento(event);" maxlength="50" required="">
										<br><b>Ano de publicação:</b>
										&nbsp;&nbsp;&nbsp;<input type="number" name="ano" placeholder="Ano do livro..." onkeypress="return sem_acento(event);" minlength="4" maxlength="4" required="">
										<br><b>Idioma:</b>
										<select class="list_of_works" name="idioma" required="">
								            <option selected style="display:none;color:#000000;">Selecione</option>
								            <option value="Alemão">Alemão</option>
								            <option value="Espanhol">Espanhol</option>
								            <option value="Francês">Francês</option>
								            <option value="Inglês">Inglês</option>
								            <option value="Português">Português</option>
								            <option value="Russo">Russo</option>
								            <option value="Sueco">Sueco</option>
								          </optgroup>
								        </select>
										<br><b>Gênero:</b>
										<select class="list_of_works" name="genero" required="">
								            <option selected style="display:none;color:#000000;">Selecione</option>
								            <option value="Romance">Romance</option>
								            <option value="Terror">Terror</option>
								            <option value="Ficção">Ficção</option>
								            <option value="Comédia">Comédia</option>
								            <option value="Ação">Ação</option>
								            <option value="Aventura">Aventura</option>
											<option value="Religião">Religião</option>
								            <option value="Acadêmico - Informática">Acadêmico - Informática</option>
											<option value="Acadêmico - Saúde">Acadêmico - Saúde</option>
											<option value="Acadêmico - Econômia">Acadêmico - Econômia</option>
											<option value="Acadêmico - Educação">Acadêmico - Educação</option>
											<option value="Acadêmico - Construção Civil">Acadêmico - Construção Civil</option>
											<option value="Acadêmico - Publicidade">Acadêmico - Publicidade</option>
											<option value="Acadêmico - Administração">Acadêmico - Administração</option>
											<option value="Acadêmico - Agro">Acadêmico - Agro</option>
											<option value="Acadêmico - Política">Acadêmico - Política</option>
											<option value="Acadêmico - Direito">Acadêmico - Direito</option>
											<option value="Acadêmico - Indústria">Acadêmico - Indústria</option>
								          </optgroup>
								        </select>
								        <br><b>Encadernação:</b>
										<select class="list_of_works" name="encadernacao" required="">
								            <option selected style="display:none;color:#000000;">Selecione</option>
								            <option value="Brochura">Brochura</option>
								            <option value="Espiral">Espiral</option>
								          </optgroup>
								        </select>
								        <br><b>Páginas:</b>
								        &nbsp;&nbsp;<input type="number" name="paginas" placeholder="N° de páginas" required="">
								    </div>
								        <div id="col2">
								        <b>Medidas (Altura x Largura):</b>
								        <br><input type="number" name="altura" required="" placeholder="Altura(cm)"><br><br><input type="number" name="largura" placeholder="Largura(cm)" required="">
								        <br><br><b>Descrição:</b>
								        <textarea placeholder="Digite..." name="descricao" onkeypress="return sem_acento(event);" required="" maxlength="1000"></textarea>
								        <br><br><b>Descreva a conservação:</b>
								        <textarea placeholder="Descreva a conservação do livro..." name="conservacao" onkeypress="return sem_acento(event);" required="" maxlength="1000"></textarea>
								        <br><b>Preço:</b>
								        <input type="Text" placeholder="SEM contar frete" name="preco" maxlength="10" onkeydown="FormataMoeda(this,10,event)" onkeypress="return maskKeyPress(event)" onkeypress="return sem_acento(event);" />
								        <br><br><b>Fotos (3):</b>
								        <br><b>Principal:</b><input type="file" name="foto1" accept="png" required="">
								        <br><br>Segunda:<input type="file" name="foto2" accept="png" required="">
								        <br><br>Última:<input type="file" name="foto3" accept="png" required="">
										 </div>
										 <?php
                                   	 /*include_once("conect.php");
								    	$pub = $_SESSION["login"];
                                   		$sql = "SELECT * FROM cadastro WHERE login = '$pub'";
                                   		$res = mysqli_query($conn,$sql);
                                    while ($dado=mysqli_fetch_array($res)) {
                                        $id = $dado["id"];
                                    }
                                    echo "<input type='hidden' value='$id' name='id'>";
								    echo "<input type='hidden' value='$pub' name='publicador'>";*/
								    ?>
										 <center>
								    	<button>Adicionar</button>
								    	</center>
									</form>
						</div>
						</div>
						</div>
								
					</div>
					</div>

                <!-- Footer -->
				<footer id=footer>
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