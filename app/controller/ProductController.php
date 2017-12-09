<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-06
 * Time: 20:00
 */

namespace app\controller;


use app\model\Product;

class ProductController
{
    public function create(): string
    {
        return file_get_contents('app/view/product/new.php');
    }

    public function store (): string
    {
        //This rows doing same
        //Product::create($_POST);
        //(new Product())->create($_POST);
         $model = new Product();
         $model->create($_POST);

         //Redirecting to list
         header('Location: ?view=product&action=list');
         exit();
    }

    public function list()
    {
        $model = new Product();
        $model->list ();

    }
}