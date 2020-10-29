<?php 

/**
 * munki_facts class
 *
 * @package munkireport
 * @author 
 **/
class Munki_facts_controller extends Module_controller
{
	    function __construct()
    {
        // Store module path
        $this->module_path = dirname(__FILE__);
    }
	
    /**
     * Get munki_facts information for serial_number
     *
     * @param string $serial serial number
     **/
    public function get_data($serial_number = '')
    {
        jsonView(
            Munki_facts_model::select('munki_facts.*')
            ->whereSerialNumber($serial_number)
            ->filter()
            ->get()
            ->toArray()
        );
    }

    public function get_list()
    {
        jsonView(
            Munki_facts_model::select('fact_key AS label')
                ->selectRaw('count(*) AS count')
                ->filter()
                ->groupBy('fact_key')
                ->orderBy('count', 'desc')
                ->get()
                ->toArray()
        );
    }
} 