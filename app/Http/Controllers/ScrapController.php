<?php

namespace App\Http\Controllers;

require  "../scrap/simple_html_dom.php";

use Illuminate\Http\Request;

class ScrapController extends Controller
{
    
    public function prueba ($palabra){
        $html = file_get_html("https://dle.rae.es/".$palabra);

        echo $html->find('meta[name=description]',0)->content;
    }
}
