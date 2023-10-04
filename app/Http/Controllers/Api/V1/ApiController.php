<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Racer;
use SimpleXMLElement;

class ApiController extends Controller
{

    public function index()
    {
        return ApiResources::collection(Racer::all());
    }

    public function xml()
    {
        $json = Racer::all();
        $array = json_decode($json, true);
        $xml = new SimpleXMLElement('<div/>');

        foreach($array as $key => $value) {
            $xml->addChild($key, implode(' ', $value));
        }

        return $xml->asXML();
    }

}
