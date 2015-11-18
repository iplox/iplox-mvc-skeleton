<?php


namespace App\Controllers\Api;


use Iplox\AbstractModule;
use Iplox\BaseController;
use Iplox\Config;

class Book extends BaseController
{
    public function __construct(Config $config, AbstractModule $module)
    {
        parent::__construct($config, $module);
        $this->config->set('contentType', 'application/json');
    }

    public function get()
    {
        return [
            ['title' => 'Cien años de soledad', 'author' => 'Gabriel Garcia Marquez'],
            ['title' => 'El coronel no tiene quien le escriba', 'author' => 'Gabriel Garcia Marquez'],
        ];
    }

    public function create()
    {

    }
}