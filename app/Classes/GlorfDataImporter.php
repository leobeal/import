<?php

namespace App\Classes;

use Illuminate\Contracts\Filesystem\FileNotFoundException;

class GlorfDataImporter extends DataImporter
{
    protected $feed_url = 'feed-exports/glorf.json';


    /**
     *
     * @param array $data
     * @return array
     */
    protected function parseData($content){
        $data_to_parse  = json_decode($content,true);
        $data           = $data_to_parse;

        return (array) $data['videos'];
    }

}