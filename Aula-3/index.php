<?php
//Atividade 1: Faça um algoritimo que verifique se o estado da
//pessoa é "SP", assim exiba  "O usuário é de PS ou o comtrário".

 // Deixarei a variável já definida, agora é necessário criar a "condicional"
 //Dica : Você ter que utulizer o operador ===
 $estadoUsuario = "SP";

//condicionais;

if($estadoUsuario === "SP"){
   echo "<br>O Usuário é de SP";
}else{
   echo "<br>O Usuário não é de SP";
}



// Atividade 2: O usuário quer fazer uma compra no valor de R$599,99 e sendo assim
// escreva um algoritimo que exiba "compra efeteuada com sucesso!" ou o contrário.
// Deixarei a variável já definida, agora é necessário criar a "condicional"
// Dica: Você vai ter que utilizar o operador: >=
$saldoUsuario = 552.00;
$valorProduto = 599.99;

//condicionais;

if($saldoUsuario >= $valorProduto){
   echo "<br> Compra efetuada com sucesso";
}else{
   echo "<br> Compra não efetuada";
}



// Atividade 3: Faça um algoritimo que exiba os valores de o até 10 utilizando
// uma estrutura de repetição
//Dica Utilizar For Loop (INICIALIZADOR,CONDIÇÃO, INCREMENTADOR).


for ($i=0; $i <= 10; $i++) {
   echo "<br>valor:$i";
   }
?>