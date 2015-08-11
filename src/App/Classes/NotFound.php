<?php

namespace App\Classes;
use Iplox\Mvc\TemplateController;

class NotFound extends TemplateController {

    public function indexAction()
    {
        $this->show('errors/404');
    }
}