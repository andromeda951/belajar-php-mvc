<?php 
 
namespace Andromeda\Belajar\PHP\MVC\Controller;

class HomeController{

    public function index(): void
    {
        echo "HomeController.index()";
    }

    public function hello(): void
    {
        echo "Controller.hello()";
    }

    public function world(): void
    {
        echo "HomeController.world()";
    }

    public function about(): void
    {
        echo "Author : Andromeda";
    }
}

