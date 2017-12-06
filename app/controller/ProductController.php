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
        $model = new Product();
        $model->

        print_r($_POST);

        return '';
    }
}