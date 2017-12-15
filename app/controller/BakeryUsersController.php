<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-13
 * Time: 20:11
 */

namespace app;


use app\controller\TemplateEngineController;
use app\model\Product;
use app\model\Users;

class bakeryUsersController
{

    /**
     * bakeryUsersController constructor.
     */
    public function create()
    {
        (new TemplateEngineController('bakery-users'))->echoOutput();
    }

    public function store ()
    {
        //This rows doing same
        //Product::create($_POST);
        //(new Product())->create($_POST);

        $data = $_POST;
        $data['password'] =  sha1($data['password'] );

        $model = new Users();
        $model->create($data);

        //Redirecting to list
        header('Location: ?view=bakery-users&action=list');
        exit();
    }

    public function list()
    {
        $model = new Users();
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

    public function login()
    {
        $template = new TemplateEngineController('login');
        $template-> echoOutput();
    }

    public function auth()
    {
        $query = "SELECT * FROM`" . $this->table . "`WHERE `deleted_at` IS NULL AND `email` = '" . $data['email'] . "' AND `password` = '" . $data ['password'] . "''";
        return $this->query($query);
    }
}