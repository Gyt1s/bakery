<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-06
 * Time: 19:06
 */

namespace app;


use app\controller\ProductController;
use app\model\Product;

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

                    elseif ($action == 'list')
                        (new ProductController())->list ();

                    break;

            }


        }
        elseif ($method == 'POST') {
            switch ($view) {
                case 'product':

                    if ($action == 'create')
                        $this->show((new ProductController())->store());

                    break;

            }
        }

       // echo "Bakery online";
    }


    private function show (string $text)
    {
        echo $text;
    }

}