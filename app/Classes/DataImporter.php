<?php

namespace App\Classes;


abstract class DataImporter
{

    /**
     * Perform the import.
     */
    public function Import(){
        $items      = $this->getItems();
        $response   = $this->Insert($items);

        //echo $response;
    }


    private function getItems(){
        $content            = file_get_contents(storage_path('app/'.$this->feed_url));
        $data               = $this->parseData($content);

        return $data;

    }

    abstract protected function parseData($content);


    private function Insert($items){
        $response = "";

        if(is_array($items)){
            foreach($items as $item){


                if(isset($item['tags']) && is_array($item['tags'])){

                    $tag_item = $item;

                    foreach($tag_item['tags'] as $tag){
                        // Insert tag into the DB.
                    }

                    $item['tags'] = implode(",",$tag_item['tags']);

                }

                //Insert into the DB.

                // This just outputs to the console.
                echo "importing: \"{$item['title']}\"; Url:{$item['url']};";

                if(isset($item['tags'])){
                    echo "Tags:{$item['tags']} ";
                }

                echo "\n";

                //sleep for testing purposes
                sleep(1);

            }
        }
        return $response;
    }
}