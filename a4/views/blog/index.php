
<?php include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<sub>Posted on <?php echo $p['date']; ?> </sub>

		<div style = "margin-top: 15px;"><a href = "<?php echo BASE_URL ?>ajax/get_post_content/?pID=<?php echo $p['pID']; ?>" class="btn post-loader"> View entire post</a></div>
<?php }?>
</div>

<?php include('views/elements/footer.php');?>