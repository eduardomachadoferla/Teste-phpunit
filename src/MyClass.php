<?php
 
class Calculadora
{
    public function somar($a, $b) {
        return $a + $b;
    }
 
    public function subtrair($a, $b) {
        return $a - $b;
    }
 
    public function dividir($a, $b) {
        if ($b == 0) {
            throw new Exception("Divisão por zero");
        }
        return $a / $b;
    }
}
 