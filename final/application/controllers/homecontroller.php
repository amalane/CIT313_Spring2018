<?php

class HomeController extends Controller{
	
	
	public function index(){
		$feed ="http://feeds.bbci.co.uk/news/world/us_and_canada/rss.xml";
		//$feed = "http://fox59.com/feed/";
		$rss = new RssDisplay($feed);
		
		$feed_data = $rss->getFeedItems(8);
		$feed_channel = $rss->getChannelInfo();

		$channel_title = $feed_channel->title;

        $user_id = 80749361;
        $api = new GoodReads("IAX0psZdCpJ04ZUu25KUg", "/home/amalane/htdocs/cache");
        $res = $api->getLatestReads($user_id);

		$this->set('reviews', $res["reviews"]["review"]);
		$this->set('user_id', $user_id);

		$this->set('rss_title', $channel_title);
		$this->set('rss_items', $feed_data);
	}
	
	
}

?>