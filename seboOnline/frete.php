
    
  

<?php
include_once("conect.php");
$cep = $_POST["cep_destino"];
$valor = $_POST["total"];

 
 function calcular_frete($cep_origem,
     $cep_destino,
     $peso,
     $valor,
     $tipo_do_frete,
     $altura = 6,
     $largura = 20,
     $comprimento = 20){
  
  
     $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
     $url .= "nCdEmpresa=";
     $url .= "&sDsSenha=";
     $url .= "&sCepOrigem=" . $cep_origem;
     $url .= "&sCepDestino=" . $cep_destino;
     $url .= "&nVlPeso=" . $peso;
     $url .= "&nVlLargura=" . $largura;
     $url .= "&nVlAltura=" . $altura;
     $url .= "&nCdFormato=1";
     $url .= "&nVlComprimento=" . $comprimento;
     $url .= "&sCdMaoProria=n";
     $url .= "&nVlValorDeclarado=" . $valor;
     $url .= "&sCdAvisoRecebimento=n";
     $url .= "&nCdServico=" . $tipo_do_frete;
     $url .= "&nVlDiametro=0";
     $url .= "&StrRetorno=xml";
 
     //Sedex: 40010
     //Pac: 41106 foi trocado pelo 04510
  
     $xml = simplexml_load_file($url);
  
     return $xml->cServico;

   
  
 }
 $val = (calcular_frete('12800000',
 $cep,
  2,
  $valor,
  '04510'));
 

$dale = $val->Valor;
$dele = $val->PrazoEntrega;
$doly = $dale + $total;

echo "
    <div class='col-6 col-12-xsmall'>
										<input type='text' name='retorno' id='' value='Valor: RS = $dale  Prazo = $dele Total da Compra= $doly'/>
									</div>
    

";

  






 ?>
  