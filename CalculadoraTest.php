<?php
use PHPUnit\Framework\TestCase;
include 'Calculadora.php';
final class CalculadoraTest extends TestCase
{
public function testSuma()
{
$calc = new Calculadora(3,3);
$this->assertEquals(7, $calc->suma());
}

public function testResta()
{
$calc = new Calculadora(4,4);
$this->assertEquals(0, $calc->resta());
}
public function testMultiplicar()
{
$calc = new Calculadora(3,4);
$this->assertEquals(12, $calc->multiplicar());
}
public function testDividir()
{
$calc = new Calculadora(10,2);
$this->assertEquals(5, $calc->dividir());
}
}
?>