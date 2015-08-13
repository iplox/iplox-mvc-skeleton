<?php

namespace SubApp;
use Iplox\Mvc\Module as MvcModule;

class Module extends MvcModule
{
    public function getFile($uri)
    {
        return parent::getFile($uri);
    }
}