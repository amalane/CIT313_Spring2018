<?php

class WeatherController extends Controller{
	
	public function index(){
        
        $this->set(result, false);


	}
    
    public function getresults() {

        $xml = simplexml_load_file("http://api.wunderground.com/api/509d61bb96df1336/conditions/q/" . $_POST['zip'] . ".xml");
        $this->set(results, true);
        $this->set(weather,$xml);

    }
	
}

?>