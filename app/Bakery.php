<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-06
 * Time: 19:06
 */

namespace app;


use app\controller\ProductController;
use app\controller\ProductHistoryController;
use app\model\Product;

class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && !isset( $_GET ['view']) && !isset($_GET['action']))
        {
            (new BakeryUsersController())->login();
            die();
        }

        $view = $_GET['view'];
        $action = $_GET['action'];


        if ($method == 'GET') {
            switch ($view) {
                case 'product':

                    if ($action == 'new')
                        (new ProductController())->create();

                    elseif ($action == 'list')
                        (new ProductController())->list();

                    break;

                case 'product-history' :

                    if ($action == 'new')
                        (new ProductHistoryController())->create();

                    elseif ($action == 'list')
                        (new ProductHistoryController())->list();

                    break;

                case 'bakery-users' :

                    if ($action == 'new')
                        (new BakeryUsersController())->create();

                    elseif ($action == 'list')
                        (new BakeryUsersController ())->list();

                    break;
            }

        } elseif ($method == 'POST') {
            switch ($view) {
                case 'product-history':

                    if ($action == 'create')
                        (new ProductHistoryController())->store();

                    break;

                case 'bakery-users':

                    if ($action == 'create')
                        (new bakeryUsersController())->store();

                    break;


                    case 'users';

                    if ($action == 'create');
                        (new BakeryUsersController())->store();

                        if ($action == 'login');
                        (new BakeryUsersController())->auth();

                        break;
            }
        }
    }
}