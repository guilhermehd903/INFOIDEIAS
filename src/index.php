<?php
include './funcoes.php';

$func = new SRC\Funcoes();

//Calling first function
echo "Primeira função<br>";
echo $func->SeculoAno(1905);
echo "<br>";
echo $func->SeculoAno(1700);
echo "<br>-----------------------------<br>";
//Calling second function
echo "Segunda função<br>";
echo $func->PrimoAnterior(10);
echo "<br>";
echo $func->PrimoAnterior(29);
echo "<br>-----------------------------<br>";
//Calling third function
echo "Terceira função<br>";
$arrayMulti = array(
    array(25, 22, 18),
    array(10, 15, 13),
    array(24, 5, 2),
    array(80, 17, 15)
);

echo $func->SegundoMaior($arrayMulti);
echo "<br>-----------------------------<br>";
//Calling Forth function
echo "Quarta função<br>";
var_dump($func->SequenciaCrescente([1, 3, 2, 1]));  echo "false";
var_dump($func->SequenciaCrescente([1, 3, 2]));  echo "true";
var_dump($func->SequenciaCrescente([1, 2, 1, 2]));  echo "false";
var_dump($func->SequenciaCrescente([3, 6, 5, 8, 10, 20, 15])); echo "false";
var_dump($func->SequenciaCrescente([1, 1, 2, 3, 4, 4])); echo "false";
var_dump($func->SequenciaCrescente([1, 4, 10, 4, 2])); echo "false";
var_dump($func->SequenciaCrescente([10, 1, 2, 3, 4, 5])); echo "true";
var_dump($func->SequenciaCrescente([1, 1, 1, 2, 3])); echo "false";

var_dump($func->SequenciaCrescente([0, -2, 5, 6])); echo "true";
var_dump($func->SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6])); echo "false";
var_dump($func->SequenciaCrescente([40, 50, 60, 10, 20, 30])); echo "false";
var_dump($func->SequenciaCrescente([1, 1])); echo "true";
var_dump($func->SequenciaCrescente([1, 2, 5, 3, 5])); echo "true";

var_dump($func->SequenciaCrescente([1, 2, 5, 5, 5])); echo "false";
var_dump($func->SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1])); echo "false";
var_dump($func->SequenciaCrescente([1, 2, 3, 4, 3, 6])); echo "true";
var_dump($func->SequenciaCrescente([1, 2, 3, 4, 99, 5, 6])); echo "true";
var_dump($func->SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45])); echo "true";
var_dump($func->SequenciaCrescente([3, 5, 67, 98, 3])); echo "true";
echo "<br>-----------------------------<br>";
