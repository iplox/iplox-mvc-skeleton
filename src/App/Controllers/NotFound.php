<?php

namespace App\Controllers;
use Iplox\Mvc\TemplateController;

class NotFound extends TemplateController {

    public function indexAction()
    {
        $this->show('errors/404');
    }
}