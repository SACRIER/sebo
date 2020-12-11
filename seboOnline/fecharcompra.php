<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Finalizar compra - Sebo Online</title>
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
								<a href="fecharcompra.php" class="logo">
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
						<h1>Confira seus itens antes de fechar a compra</h1>
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
								$total += $preco;
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

											
											echo "<td style='font-size:14px;'><b>$titulo</b></td>";
											

											$preco = round($preco,2);
											$preco = number_format($preco, 2,'.','.');
											echo "<td style='color:black;' ><b>R$$preco</b></td>";


											
											

											$i++;
									


											echo "<td ><a  href='deletecarrinho.php?id=$id' ><i class='fas fa-shopping-cart'></i> Excluir </b></a></td>";
											echo "</tr>";

											

										}
										

									}
									
							// fim da lista


								}
											$total = round($total,2);
											$total = number_format($total, 2,'.','.');
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
						<section>
							<h2>Dados para entrega</h2>
							<form method="POST" action="finalizar.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="cep" id="cep" value="" maxlength="8" minlength="8" placeholder="Informe o CEP" onblur="pesquisacep(this.value);"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="cidade" id="cidade" value="" placeholder="Cidade" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="estado" id="estado" value="" placeholder="Estado" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="endereco" id="endereco" value="" placeholder="Endereço" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="bairro" id="bairro" value="" placeholder="Bairro" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="numcasa" id="numcasa" value="" placeholder="Número" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="pontoref" id="pontoref" value="" placeholder="Ponto de referência" />
									</div>
									<div class="col-12">
									<select name="formapagamento" id="formapagamento">
									<option value="">- Forma de pagamento -</option>
									<option value="Boleto">Boleto</option>
									<option value="Cartão de Crédito">Cartão de Crédito</option>
									<option value="SeboCard">SeboCard</option>
									</select>
									</div>
										<center>
								    	<button>Finalizar</button>
								    	</center>
							
							
										</form>

						
						</section>
						<form method="POST" action="fecharcompra.php?f=frete">
									<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="cep_destino" id="cep_destino" value="" placeholder="CEP" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="hidden" name="total" id="total" value="<?php echo $total ?>"/>
									</div>
									
									<ul class="actions">
										<li><input type="submit" value="Calcular o frete" class="primary" data-toggle="modal" data-target="Modal"  /></li>
									</ul>
									
									</div>
									</form>
									<?php
									@require_once("frete.php");
									$pagina = @$_GET['f'];
									
									//echo $pagina;
									
									?>
						</div>
					</div>
					</div>

                <!-- Footer -->
				<footer id=footer>
				<div class="inner">
							<section>
								<h2><center>Em caso de dúvidas, envie uma mensagem para nossa equipe</center></h2>
								<form method="post" action="faleconosco.php">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Nome" />
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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
			<script>
									function calcular_frete(){
										var cep_destino = $("#cep_destino").val();
										
										$.post('frete.php',{cep_destino: cep_destino},function(data){
										alert(data);		
										});
									}
									</script>
										<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
       
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>