<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-13
 * Time: 18:45
 */

namespace app\controller;


class ProductHistoryController
{

    /**
     * ProductHistoryController constructor.
     */
    public function __construct()
    {

    }

        public function create()
    {
        $template = new TemplateEngineController('new-product');
        $template->echoOutput();

    }
    
}