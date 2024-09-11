<!-- Atividade: A empresa JWC está criand
um software para bancos que tem como objetivo
lidar com o processamento da lógica do "cliente de banco"


Dessa forma é necessário criar um "Back-end" que 
seja capaz de processar os dados dos usuários
analizando os dados inseridos e aplicando as 
regras de negócio.

Abaixo será passado os riquisitos criados pela
 equipe de produto com os passos neccessários:

 -->

<!-- O formulatio no front-end vai enviar esses
dads importantes(idade, renda Anual, estado) -->
<?php 
// Pegando os valores enviados pelo formulário no front
//e transformando em variáveis no "back-end"
$idade = 62;
$rendaAnual = 92000;
$estado = "RJ";
// Pequise e crie com PHP as seguintes regras de negócio.


//Atividade 1: Código que verifica
//se a $idade é maior ou igual 18,caso seja exibir
//"permitir" cliente e caso não "não permitir cadastro".

//condicionais;

if($idade>=18){
   echo "<br>O cliente e permitido ter o cartão ";
}else{
   echo "<br>O cliente não é permitido ter o cartão";
}


//Atividade 2: Código  que verifica se
//$rendaAnual é maior que 70.000, caso seja exibir "cliente Vip"
//caso não exibir "cliente Padrão".


echo $rendaAnual;

//condicionais;

if($rendaAnual>70.000){
   echo "<br>O cliente  e vip";
}else{
   echo "<br>O cliente é padrão";
}

//Atividade 3: Calcular limite do cartão de creédito permitido que
//é de 150% do salário mensal(Salário Anual Dividido por 12) exibindo
//o limite do usuário possível

$rendaMensal = $rendaAnual / 12;
$limiteCartao = $rendaAnual * 1.5;
echo "<br>limite possível do cartão é de ${limiteCartao}";

//Atividade 4: Caso o Usuário seja do "RJ" exibir 
//uma mensagem informando que ele tem direito a uma promoção 
//que apenas clienes do estado do "RJ" vão poder ver.


//condicionais;

if($estado === "RJ"){
   echo "<br>Se o usuário for do estado do RJ tem direito a promoção";
}else{
   echo "<br>Se o usuário não for do estado do RJ não tem direito a promoção";
}


?>
