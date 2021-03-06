<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
      
    <a href="<?php echo BASE_URL; ?>manageposts/add" class="btn btn-primary">Add A Post</a>
    <a href="<?php echo BASE_URL; ?>categories" class="btn btn-primary">Manage Categories</a>

    <?php if( is_array($posts) ) { ?>
        <?php foreach($posts as $p){?>
            <div>
            <h3><?php echo $p['title'];?></h3>
            <?php echo $p['date']; ?>
            </div>
            <a class="btn btn-primary" href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>">View</a>
            <a class="btn btn-primary" href="<?php echo BASE_URL?>manageposts/edit/<?php echo $p['pID'];?>">Edit</a>
            <a class="btn btn-primary" href="<?php echo BASE_URL?>manageposts/delete/<?php echo $p['pID'];?>">Delete</a>
            <hr>
        <?php }?>
    <?php }?>
        
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

