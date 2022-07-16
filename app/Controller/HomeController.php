<?php 
 
namespace Andromeda\Belajar\PHP\MVC\Controller;

use Andromeda\Belajar\PHP\MVC\App\View;

class HomeController{

    public function index(): void
    {
        $model = [
            'title' => 'Belajar PHP MVC',
            'content' => 'Selamat belajar PHP MVC di Programmer Zaman Now'
        ];

        View::render("Home/index", $model);

        // echo "HomeController.index()";
    }

    public function hello(): void
    {
        echo "HomeController.hello()";
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

