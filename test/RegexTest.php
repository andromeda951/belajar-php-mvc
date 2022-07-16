<?php 
 
namespace Andromeda\Belajar\PHP\MVC;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase{

    public function testRegex()
    {
        $path = "/products/12345/categories/abcde";
        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";
        $result = preg_match($pattern, $path, $variable);

        self::assertEquals(1, $result);
        var_dump($variable);
        array_shift($variable);
        var_dump($variable);

        $path = "/hello";
        $pattern = '#^' . "/hello" . '$#';
        $result = preg_match($pattern, $path, $variable);
        var_dump($result);
        var_dump($variable);
    }
}

