<?php declare(strict_types=1);
namespace src;

use Exception;

class Matematica{

    public static function suma($a, $b): float{
        return floatval($a + $b);
    }

    public static function division($a, $b){
        if($b == 0) throw new Exception("Division por 0");
        return floatval($a / $b);
    }

    public static function calcularNomina($data){
        $resultado = array();
        if(isset($data["salarioBasico"])){
            if($data["salarioBasico"] >= 13000000){
                throw new Exception("El salario debe ser integral");
            }
            $resultado["salario"] = $data["salarioBasico"];
            $resultado["salud"] = $data["salarioBasico"]*0.04;
            $resultado["pension"] = $data["salarioBasico"]*0.04;
        }

        if(isset($data["salarioIntegral"])){
            if($data["salarioIntegral"] < 13000000){
                throw new Exception("El salario debe ser basico");
            }
            $resultado["salario"] = $data["salarioIntegral"];
            $resultado["salud"] = ($data["salarioIntegral"]*0.7)*0.04;
            $resultado["pension"] = ($data["salarioIntegral"]*0.7)*0.04;
        }

        return $resultado;               
    }
}

?>