<?php

//Para anexar outro arquivo
require_once("../functions/funcoes.php");


    
    
    //Declaração e atribuição de variáveis 
$nome    = $_POST["txtNome"];
$email    = $_POST["txtEmail"];
$fone    = $_POST["txtFone"];
$cpf     = $_POST["txtCpf"];
$endereco    = $_POST["txtEndereco"];
$bairro  =$_POST["txtBairro"];
$cidade    = $_POST["txtCidade"];
$uf    = $_POST["txtUF"];
$cep    = $_POST["txtCep"];


if (isset($_POST["btnEnviar"])) {

    $nome = $_POST["txtNome"];

    echo $nome . ", seus dados foram cadastrados com sucesso!!<br>";
    
//Definir o conjunto de dados 
$array = ["nome"=>"{$nome}", "cep"=>"{$cep}","endereço"=>"{$endereco}", "bairro"=>"{$bairro}", "cidade"=>"{$cidade}", "uf"=>"{$uf}","email"=>"{$email}", "telefone"=>"{$fone}"];
 
array_push($_SESSION['lista'], $array);



    //apresentar o resultado de duas variáveis

echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";


  //Verificar se o campo txtNome foi preenchido
  //Se sim, atribuir valores as variaveis

if (isset($_POST["txtNome"])) {
$fone     = $_POST['txtFone'];
$cep      = $_POST['txtCep'];


//apresentar o valor de variável
echo "Cep: " . $cep . "<br>";
//echo "<br>";

  //atribuir o resultado na variável $body

$body = "===================================" . "<br>";
$body = $body . "FALE CONOSCO - TESTE DE EXIBIÇÃO" . "<br>";
$body = $body . "===================================" . "<br>";
$body = $body . "Nome: " . $nome . "<br>";
$body = $body . "Email: " . $email . "<br>";
$body = $body . "Telefone: " . $fone . "<br>";
$body = $body . "===================================" . "<br>";



//apresentar o valor da variável
echo $body;


//Chamar a função dia_atual
//Funcão com return precisa de variável
//variável = função();
$dia = dia_atual(); 
echo $dia . "<br>";

$hora = date('H:i:s');
echo $hora. "<br>";

if (($hora >= "00:00:00") && ($hora <= "11:59:59")) {
    echo "Bom dia !!";
}

elseif (($hora >= "12:00:00") && ($hora <= "15:59:59")){
    echo "Boa Tarde !!";
}

else {
    echo "Boa Noite !!";
}

}

} //Fechamento do IF

else if (isset($_POST['btnListar'])) {

//Mostrar os dados como tabela
$exibirdados = listar();
echo $exibirdados;
}


?>