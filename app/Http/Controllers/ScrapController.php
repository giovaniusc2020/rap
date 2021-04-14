<?php

namespace App\Http\Controllers;

require  "../scrap/simple_html_dom.php";

use Illuminate\Http\Request;

class ScrapController extends Controller
{
    
    public function prueba ($palabra){
        $html = file_get_html("https://dle.rae.es/".$palabra);

        $aux = $html->find('meta[name=description]',0)->content;
        $array = Array("definicion"=>$aux);
        echo json_encode($array, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
}
