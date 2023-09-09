<?php

namespace MyProject\Controllers;

use MyProject\View\View;

abstract class AbstractController
{
    /** @var View */
    protected $view;

    public function __construct()
    {
        $companies = ['fast-delivery', 'slow-delivery'];
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->view->setVar('companies', $companies);
    }
}
