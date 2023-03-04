<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
    {
        $series = [
            'The las of us',
            'Game of Thrones',
            'Mr Robot',
            'Modern Family'
        ];

        $html = '<ul>';
        foreach($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}
