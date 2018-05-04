<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <div>
      <img src="views/img/bookbanner.jpg">
    </div>
    
    <h1>Amanda's Book Club</h1>
  </div>

  <div class="span3">
    <h4>Goodreads Favorites</h4>
    <?php
        // print_r($reviews);
        // https://www.goodreads.com/review/list/80749361
        foreach( array_slice($reviews, 0, 10 ) as $review) {
            // echo "Book:          " . $review['book']['title'] . "<br>\n";
            // echo "Link:          " . $review['book']['link'] . "<br>\n";
            // echo "Rating (avg):  " . $review['book']['average_rating'] . "<br>\n";
            // echo "Rating (mine): " . $review['rating'] . "<br>\n";
            // echo "<br>\n";
            echo '<a href="' . $review['book']['link'] . '">' . $review['book']['title'] . '</a>';
            echo "<br>";
        }
        echo '<br>';
        echo '<a href="https://www.goodreads.com/review/list/' . $user_id . '">More...</a>';
    ?>
  </div>

  <div class="span8">
      <h3>Books for Leadership</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
    </div>


</div>



</div>
<?php
if( isset($loggedout) ) {
?>
<div class="alert alert-success">
Logged out successfully.
</div>

<?php } ?>
<?php include('views/elements/footer.php');?>
