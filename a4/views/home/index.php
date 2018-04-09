<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $rss_title;?></h1>
  </div>
<?php
  foreach($rss_items as $item) {
?>
<div>
    <h4>
      <?php
      echo '<a href="' . $item->link . '">' . $item->title . '</a> (' . $item->pubDate . ')';
      ?>
    </h4>
    <p>
      <?php
      echo $item->description;
      ?>
    </p>
    <hr>
</div>
<?php
  }
?>
</div>
<?php
if( isset($loggedout) ) {
?>
<div class="alert alert-success">
Logged out successfully.
</div>

<?php } ?>
<?php include('views/elements/footer.php');?>
