<?php

/*iremos declarar as variaveis que recebemos pelo método post

lembra lá na explicação do metodo post o que deveria ser feito? então, os dados

serão pegos por aqui e transformados em comunicação entre server e cliente para gerar

o email do cara e te enviar*/
$assunto="Cadastro PetSabor";
$nomeDono=$_POST[nomeDono];//aqui pega os dados que foram preenchidos la no formulário com o ID NOME
$telefone=$_POST[telefone];
$email=$_POST[email];//aqui a mesma coisa, mas com o email
$cep=$_POST[cep];
$cidade=$_POST[cidade];
$estado=$_POST[estado];
$nomePet=$_POST[nomePet];
$raca2=$_POST[raca2];
$data=$_POST[data];
$castrado=$_POST[castrado];
$saude=$_POST[saude];
$peso=$_POST[peso];
$sexo=$_POST[sexo];
$pacote=$_POST[pacote];
$retorno=$_POST[retorno];
$mensagem=$_POST[mensagem];//aqui a mesma coisa, mas com o assunto

//agora vamos enviar todos esses dados usando a função mail que é do PHP
mail("contato@petsabor.com","$assunto",
"Nome do Dono: $nomeDono\n
Telefone: $telefone\n
E-mail: $email\n
CEP: $cep\n
Cidade: $cidade\n
Estado: $estado\n
Nome do Pet: $nomePet\n
Raça: $raca2\n
Data de Nascimento: $data\n
É Castrado: $castrado\n
Possui algum problema de Saude: $saude\n
Peso: $peso\n
Sexo: $sexo\n
Pacote escolhido: $pacote\n
Prefere o retorno via: $retorno\n
Mensagem: $mensagem","FROM:$nomeDono<$email>");

/*Ele diz assim pro código: "Envia um email para meuemail@meudominio.com.br e que esse email tenha os dados que
foram pegos em ASSUNTO, NOME, EMAIL, ASSUNTO e MENSAGEM, eles foram pegos com o MÉTODO POST e em FROM vai conter
os dados de quem enviou o email, ou seja, la na caixa de entrada do teu e-mail vai ter isso. :)*/

//echo "sua mensagem foi enviada com sucesso!"; //aí mostramos no navegador da pessoa que enviou o email uma mensagem de sucesso
header('Location: http://www.vivastri.com.br/petsabor/');
exit;
?>