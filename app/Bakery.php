<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-06
 * Time: 19:06
 */

namespace app;


use app\controller\ProductController;

class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET')
        {
            switch ($view)
            {
                case 'product':

                    if ($action == 'new')
                    $this->show ((new ProductController())-> create());

                    break;

            }

            
        }
        elseif ($method == 'POST') {
            switch ($view) {
                case 'product':

                    if ($action == 'new')
                        $this->show((new ProductController())->create());

                    break;

            }
        }

        echo "Bakery online";
    }

    private function show (string $text)
    {
        echo $text;
    }

}