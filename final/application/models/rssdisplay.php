<?php
class RssDisplay extends Model {


	protected $feed_url;
	protected $num_feed_items;

	
	public function __construct($url){
		parent::__construct();

		$this->feed_url = $url;
				
	}
	
	public function getFeedItems($num_feed_items) {
		$feed_items_arr = array();

		$feed_items = simplexml_load_file($this->feed_url)->channel->item;

		foreach($feed_items as $item) {
			if( count($feed_items_arr) >= $num_feed_items)
				break;

			array_push( $feed_items_arr, $item);
		}
		
		$this->num_feed_items = $num_feed_items;

		return $feed_items_arr;
	}

	public function getChannelInfo() {
		$channel = simplexml_load_file($this->feed_url)->channel;
		unset($channel->item);
		return $channel;
	}
}
