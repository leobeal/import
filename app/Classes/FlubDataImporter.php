<?php

namespace App\Classes;

use Symfony\Component\Yaml\Yaml;

class FlubDataImporter extends DataImporter
{
    protected $feed_url = 'feed-exports/flub.yaml';

    /**
     * Returns a normalized array, using the keys Tags(array), url, title.
     *
     * @param $content
     * @return array
     */
    protected function parseData($content){

        $data_to_parse      = Yaml::parse($content);

        $data   = array();
        $i      = 0;

        foreach($data_to_parse as $item=>$array){

            foreach($array as $key=>$val){
                if($key=="labels"){

                    $labels = explode(",",$val);

                    foreach($labels as $tag){
                        $data[$i]['tags'][] = $tag;
                    }
                    continue;
                }
            }

            $data[$i]['title']  = $array['name'];
            $data[$i]['url']    = $array['url'];

            $i++;

        }
        return $data;
    }

}