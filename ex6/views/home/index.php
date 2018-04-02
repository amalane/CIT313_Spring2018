<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1> Hello From the View</h1>
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
