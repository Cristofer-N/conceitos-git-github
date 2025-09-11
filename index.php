<?php 
//Aqui vai codigo PHP 

//Para criar variaveis usamos o $ junto com o nome que queremos dar a variavel
//O PHP é fracamente tipado, nao precisamos declarar um tipo.
$nome= "Cristofer";

echo "<h1 style='color:red;'>Olá Mundo!</h1>";

echo "Nome:" . $nome; //o ponto faz a contatenacao dos textos com variaveis

//Para variaveis de numeros, so colocar aspas
$anonascimento = 2003;
//Calculos no PHP funcionam igual a todas as linguagens de programação
$idade = 2025 - $anonascimento;
echo "<br> Idade:" . $idade;

// o PHP permite injetar variaveis dentro de textos com aspas duplas

echo "<p>Meu nome é $nome, nasci em $anonascimento e tenho $idade anos.</p>";

echo gettype($idade); //gettype() mostra o tipo de variavel

echo "<br>";

var_dump($idade);
echo "<br>";
var_dump(is_float($idade));
echo "<br>";
var_dump(is_int($idade));
echo "<br>";
var_dump(is_string($idade));
echo "<br>";

$NumeroComoTexto = "1234";
$numeroConvertido = (float)$NumeroComoTexto;

echo $NumeroComoTexto


?> 

<!--Aqui vai codigo HTML -->