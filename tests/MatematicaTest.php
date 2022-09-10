<?php declare(strict_types=1);
require __DIR__ . "/../src/Matematica.php";


use PHPUnit\Framework\TestCase;
use src\Matematica;

final class MatematicaTest extends TestCase
{
    public function testSumaEnClaseMatematica(): void
    {
        $this->assertEquals(9, Matematica::suma(5,5));
    }

    public function testDivisionEnClaseMatematica(): void
    {
        $this->assertEquals(5, Matematica::division(5,0));
    }

    public function testCalculoSaludSalarioMinimo(): void
    {
        $this->assertEquals(40000,Matematica::calcularNomina(["salarioBasico" => 1000000])["salud"] );
    }

    public function testCalculoSaludSalarioIntegral(): void
    {
        $this->assertEquals(364000,Matematica::calcularNomina(["salarioIntegral" => 13000000])["salud"] );
    }

    public function testExcepcionSalarioMayor13SMLV(): void
    {
        $this->expectException(Exception::class);
        Matematica::calcularNomina(["salarioBasico" => 13000000]);
    }

    public function testExcepcionSalarioMenor13SMLV(): void
    {
        $this->expectException(Exception::class);
        Matematica::calcularNomina(["salarioIntegral" => 1000000]);
    }

}
    
?>
