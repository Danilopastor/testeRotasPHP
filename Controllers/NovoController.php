<?php

namespace Marcelo\Controllers;
class NovoController implements InterfaceController
{

    public function render()
    {
        $titulo = 'Nova pagina';
        $renderizar = '/novo.php';
        require __DIR__.'/../View/Template.php';
    }
}