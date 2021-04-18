<?php


namespace App\Controllers;


class View
{

    public function display(string $template) {
        include $template;
    }


}