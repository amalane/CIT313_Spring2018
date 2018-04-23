
<?php include('views/elements/header.php');?>
<?php 
if( is_array($post) ) {
	extract($post);
}	
?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php echo $content;?>
<div class="container">
	<sub>Posted on <?php echo $date; ?> </sub>
</div>

<br>

<h2>View Comments</h2>

<div id="cmain">
<?php
foreach($comments as $c) {
?>
<div class="well">
	<?php echo $c['commentText']; ?>
	<br>
	<?php echo $c['first_name'] . " " . $c['last_name']; ?>
	<br>
	<?php echo $c['date']; ?>
	<?php if(  $u->isAdmin() ) { ?>
	<br>
	<form action="<?php echo BASE_URL; ?>blog/deleteComment" method="POST">
		<input type="hidden" name="commentID" id='commentID' value="<?php echo $c['commentID']; ?>">
		<input type="hidden" name="pid" id='pid' value="<?php echo $pID ?>">
		<input type="submit" id="submitDeleteComment" class='btn btn-primary' value="Delete">
	</form>

	<?php } ?>

</div>
<?php
}
?>

</div>

<?php 
if( $u->isRegistered() ) {
?>
<form action="<?php echo BASE_URL; ?>blog/addComments" method="POST">
    <textarea  class='form-control' id="textComment" name="textComment" value="Comments." placeholder="Comments." rows="3" style="width:75%;"></textarea>
<br>
    <input type="submit" id='submitComment' class='btn btn-primary' value="Comment">
    
    
    <input type="hidden" name="pid" id='pid' value="<?php echo $pID ?>">
    <input type="hidden" name="uid" id='uid' value="<?php echo $u->uID ?>">

</form>
<?php
} else {
?>
<h4>Login to post comments</h4>
    <a href="<?php echo BASE_URL; ?>login" class="btn btn-primary">Login</a>
<?php
}
?>

</div>

<?php include('views/elements/footer.php');?>