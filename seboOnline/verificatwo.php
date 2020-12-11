<?php 
// Inicia sessões 


// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) 
{ 
// Usuário não logado! Redireciona para a página de login 

exit; 
} 
?> 