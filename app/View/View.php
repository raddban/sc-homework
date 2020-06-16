<?php
namespace App\View;

class View
{

    public static function view( string $path, array $variables = [])
    {
        extract($variables);

        require 'resources/' . $path;
    }
}
