<?php

class HomeController extends Controller{
	
	
	public function index(){
		$feed ="http://feeds.bbci.co.uk/news/world/us_and_canada/rss.xml";
		//$feed = "http://fox59.com/feed/";
		$rss = new RssDisplay($feed);
		
		$feed_data = $rss->getFeedItems(8);
		$feed_channel = $rss->getChannelInfo();

		$channel_title = $feed_channel->title;

		$this->set('rss_title', $channel_title);
		$this->set('rss_items', $feed_data);
	}
	
	
}

?>