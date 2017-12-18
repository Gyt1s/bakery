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

        $data = $_POST;
        $destination = 'uploads/' . $_FILES['picture']['name'];

        move_uploaded_file($_FILES['picture']['tmp_name'], $destination);

        $data['picture'] = $destination;


         $model = new Product();
         $model->create($data);



         //Redirecting to list
         header('Location: ?view=product&action=list');
         exit();
    }

    public function list()
    {
        $model = new Product();
        $result = ($model->list ());
        $header = '';
        $data = '';

        foreach ($result as $item)
        {
            if ($header == '')
            {
                foreach ($item as $key => $value)
                {
                    $header .= '<th>' . $key . '</th>';
                }
            }


            $data .= '<tr onclick="window.location=\'?view=product&action=edit&id=' . $item['id'] . '\'">';

            foreach ($item as $key => $value)
            {
                if ($key == 'picture')
                    $data .= '<td><img src="' . $value . '" width="200px"></td>';
                else
                    $data .= '<td>' . $value .= '</td>';
            }

            $data .= '</a>';
            $data .=  '</tr>';
        }

        $template = new TemplateEngineController('table-list');
        $template->set('header', $header);
        $template->set('date', $data);
        $template-> echoOutput();

    }

    public function edit()
    {
        $model = new Product();
       $result = $model->find($_GET['id']);
       $record = null;

        foreach ($result as $value)
        {
            $record = $value;

        }
       if (!$record)
           die ('record not found');

        $template = new TemplateEngineController('edit-product');
        $template->set('id', $record['id']);
        $template->set('ean', $record['ean']);
        $template->set('unit', $record['unit']);
        $template->set('name', $record['name']);
        $template->set('weight', $record['weight']);
        $template->set('prime_cost', $record['prime_cost']);
        $template->set('sale_price', $record['sale_price']);
        $template->set('picture', $record['picture']);


        $template->echoOutput();
    }

    public function update()
    {
        $model = new Product();
        $model->update($_GET['id']);

        header('Location: ?view=product&action=list');
        exit();

    }

}