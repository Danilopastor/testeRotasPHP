<?php

namespace Marcelo\Controllers;
class IndexController implements InterfaceController
{
    public function render()
    {
        $titulo = 'Primeira pagina';
        $renderizar = '/index.php';
        require __DIR__.'/../View/Template.php';
    }
};