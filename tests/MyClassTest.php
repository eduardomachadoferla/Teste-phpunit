<?php
use PHPUnit\Framework\TestCase;
 
require_once __DIR__ . '/../src/MyClass.php';
 
class MyClassTest extends TestCase
{
    public function testSomar()
    {
        $calc = new Calculadora();
        $resultado = $calc->somar(2, 3);
        $this->assertEquals(5, $resultado);
 
        echo "testSomar = $resultado\n";
    }
 
    public function testSubtrair()
    {
        $calc = new Calculadora();
        $resultado = $calc->subtrair(5, 3);
        $this->assertEquals(2, $resultado);
 
        echo "testSubtrair = $resultado\n";
    }
 
    public function testDividir()
    {
        $calc = new Calculadora();
        $resultado = $calc->dividir(10, 2);
        $this->assertEquals(5, $resultado);
 
        echo "testDividir = $resultado\n";
    }
 
    public function testDivisaoPorZero()
    {
        $calc = new Calculadora();
 
        try {
            $calc->dividir(10, 0);
        } catch (Exception $e) {
            echo "testDivisaoPorZero = Exception lançada\n";
            $this->assertTrue(true); // para passar o teste
            return;
        }
 
        $this->fail("Esperava Exception, mas nada foi lançado"); // se não lançar exception
    }
}
 