<?php

namespace App\Controllers;
use Iplox\Mvc\TemplateController;

class Index extends TemplateController {

    public function indexAction()
    {
        return $this->show('index');
    }
}