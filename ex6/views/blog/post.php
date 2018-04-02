
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

</div>


<?php include('views/elements/footer.php');?>