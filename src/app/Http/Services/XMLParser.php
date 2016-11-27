<?php

namespace App\Http\Services;

use Storage;

class XMLParser
{
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

        return json_decode($json, true);
    }
}
