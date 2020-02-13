<?php

namespace Marcelo\Controllers;
class Redirect implements InterfaceController
{
    public function olaMundo()
    {
        return "<h1>OLA MUNDO</h1>";
    }
    public function render()
    {
        echo $this->olaMundo();
    }
}