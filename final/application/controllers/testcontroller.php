<?php

class TestController extends Controller{
	
	
	public function index(){
                $user_id = 80749361;
                $api = new GoodReads("IAX0psZdCpJ04ZUu25KUg", "/home/amalane/htdocs/cache");
                $res = $api->getLatestReads($user_id);

                // print_r($res);
                // foreach( $res["reviews"]["review"] as $review ) {
                //     echo "Book:          " . $review['book']['title'] . "\n";
                //     echo "Rating (avg):  " . $review['book']['average_rating'] . "\n";
                //     echo "Rating (mine): " . $review['rating'] . "\n";
                //     echo "\n";
                // }

                $this->set('reviews', $res["reviews"]["review"]);
	}
	
	
}

?>