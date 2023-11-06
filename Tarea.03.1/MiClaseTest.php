<?php
require_once '/home/cos7/.config/composer/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class MiClaseTest extends TestCase
{
    public function testAciertaTodo()
{
    $texto = 'User1';
    $numero = '1234';
    ob_start();
    include 'index.php';
    $output = ob_get_clean();
    $this->expectOutputString('Genial, puedes pasar!!');
    $this->assertEquals($output, 'Genial, puedes pasar!!');
}

public function testAciertaUsuarioFallaNumero()
{
    $texto = 'User1';
    $numero = '12634';
    ob_start();
    include 'index.php';
    $output = ob_get_clean();
    $this->expectOutputString('Lo siento, el usuario es correcto, pero la contraseña no');
    $this->assertEquals($output, 'Lo siento, el usuario es correcto, pero la contraseña no');
}

public function testAciertaNumeroFallaUsuario()
{
    $texto = 'User2';
    $numero = '1234';
    ob_start();
    include 'index.php';
    $output = ob_get_clean();
    $this->expectOutputString('Lo siento, este usuario no es válido');
    $this->assertEquals($output, 'Lo siento, este usuario no es válido');
}

public function testFallaTodo()
{
    $texto = 'User2';
    $numero = '12634';
    ob_start();
    include 'index.php';
    $output = ob_get_clean();
    $this->expectOutputString('No has acertado ninguna');
    $this->assertEquals($output, 'No has acertado ninguna');
}

}
