<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Novo Cadastro - Sebo Online</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
							<img src="images/logomini.png" width="50" height="30"/><h2>Faça seu cadastro preenchendo os dados abaixo</h2>
								<form method="POST" action="registrarusuario.php">
									<div class="fields">
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" required=""/>
										</div>
										<div class="field half">
											<input type="password" name="senha" id="senha" placeholder="Senha" maxlength="20" minlenght="6" required=""/>
                                        </div>
										<div class="field">
											<input type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="11" required=""/>
                                        </div>
                                        <div class="field">
											<input type="text" name="nomecompleto" id="nomecompleto" placeholder="Nome completo" required="" />
                                        </div>
                                        <div class="field">
											<input type="text" name="cep" id="cep" placeholder="CEP" maxlength="8" minlength="8" onblur="pesquisacep(this.value);" required=""/>
												
                                        </div>
                                        <div class="field">
											<input type="text" name="endereco" id="endereco" placeholder="Endereço" required="" />
                                        </div>
                                        <div class="field">
											<input type="text" name="bairro" id="bairro" placeholder="Bairro" required="" />
                                        </div>
                                        <div class="field">
											<input type="text" name="cidade" id="cidade" placeholder="Cidade" required="" />
                                        </div>
                                        <div class="field">
											<input type="text" name="estado" id="estado" placeholder="Estado" required=""/>
                                        </div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Cadastrar" class="primary" /></li>
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