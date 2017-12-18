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
    public function create()
    {
        (new TemplateEngineController('new-product'))->echoOutput();
    }

    public function store ()
    {
        //This rows doing same
        //Product::create($_POST);
        //(new Product())->create($_POST);
        print_r($_POST);
        print_r($_FILES);
        die();

         $model = new Product();
         $model->create($_POST);



         //Redirecting to list
         header('Location: ?view=product&action=list');
         exit();
    }

    public function list()
    {
        $model = new Product();
        $result = ($model->list ());
        $header = '';
        $date = '';

        foreach ($result as $item)
        {
            if ($header == '')
            {
                foreach ($item as $key => $value)
                {
                    $header .= '<th>' . $key . '</th>';
                }
            }

            $date .= '<tr>';

            foreach ($item as $key => $value)
            {
                $date .= '<td>' . $value .= '</td>';
            }

            $date .=  '</tr>';
        }

        $template = new TemplateEngineController('table-list');
        $template->set('header', $header);
        $template->set('date', $date);
        $template-> echoOutput();

    }

}