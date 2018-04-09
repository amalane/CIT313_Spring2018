<?php include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $user){?>

    <h3><a href="<?php echo BASE_URL?>members/users/<?php echo $user['uID'];?>" title="<?php echo $user['first_name'] . " " . $user['last_name'];?>"><?php echo $user['email'];?></a></h3>
    <p><?php echo $user['first_name'] . " " . $user['last_name'];?></p>
    <p><a href="mailto:<?php echo $user['email'];?>"><?php echo $user['email'];?></a></p>    

<?php }?>
</div>


<?php include('views/elements/footer.php');?>