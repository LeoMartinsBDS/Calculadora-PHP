<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 25/01/2018
 * Time: 22:56
 */
require_once 'classes/calculadora.php';

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];


$calculadora = new calculadora();

//setar os valores
$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

switch ($operacao)
{
    case 'somar':
        $calculadora->somar();
        break;
    case 'subtrair':
        $calculadora->subtrair();
        break;
    case 'dividir':
        $calculadora->dividir();
        break;
    case 'multiplicar':
        $calculadora->multiplicar();
        break;
}


echo $calculadora->getTotal();
?>