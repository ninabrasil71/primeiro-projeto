<!-- PHP é um pouco parecido com javaScript -->
<!-- PHP roda/funciona apenas no servidor -->
<!-- Vamos usar o servidor "APACHE" para rodar PHP -->
<!-- XAMPP:É um kit que reune uma stack/conjunto de ferramentas harmoniosas para trabalhar com back-end -->
<!-- SFTWARES QUE O XAMPP INSTALA: 
Um servidor:APACHE
UM Banco de dados: MYSQ1
 -->
<!-- É necessario colocar todo código php dentro de "?php" -->

 <?php

 // Definindo variável em PHP
 $cpf ="127.222.222-21";
 $nomeCompleto = "Letícia Ferreira da SilVa";
 $nomeDeUsuario = "Letícia9050";
 $idadeUsuario = 89;
 //Imprimindo valores na tela
 echo $cpf;

 echo $nomeCompleto;

 //condicionais;

 if($idadeUsuario>=65){
    echo "<br>O usuario se encontra na terceira idade";
 }else{
    echo "<br>O usuario não se encontra na terceira idade";
 }


 ?>