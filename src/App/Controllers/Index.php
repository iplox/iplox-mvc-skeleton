<?php

namespace App\Controllers;
use Iplox\Mvc\TemplateController;

class Index extends TemplateController {

    public function indexAction()
    {
        $this->show('index');
    }
}