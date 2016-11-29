<?php

namespace App\Http\Services;

use Storage;

abstract class XMLParser
{

    protected $XMLArray = array();

    /**
     * Parse the XML and return the data as an array
     *
     * @return array
     */
    public function parseToArray($path, $disk)
    {
        $xml_string = Storage::disk($disk)->get($path);
        $xml = simplexml_load_string($xml_string);
        $json = json_encode($xml);

        $this->XMLArray = json_decode($json, true);
        return $this->XMLArray;
    }
}
