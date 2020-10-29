<?php

use munkireport\processors\Processor;
use CFPropertyList\CFPropertyList;

class Munki_facts_processor extends Processor
{
    public function run($data)
    {
        Munki_facts_model::where('serial_number', $this->serial_number)->delete();

		$parser = new CFPropertyList();
        $parser->parse($data, CFPropertyList::FORMAT_XML);
        $save_list = [];
        foreach ($parser->toArray() as $key => $val) {
            $save_list[] = [
                'serial_number' => $this->serial_number,
                'fact_key' => $key,
                'fact_value' => $val,
            ];
        }

        Munki_facts_model::insertChunked($save_list);        
    }   
}
