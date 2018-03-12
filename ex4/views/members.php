<?php include('elements/header.php');?>
<?php 
if( is_array($user) ) {
	extract($user);?>

<div class="container">
	<div class="page-header">

<h1>Member <?php echo $uID;?></h1>
  </div>

<?php echo $first_name . " " . $last_name; ?><br />
<a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>

</div>

<?php }?>

<?php if( is_array($users) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $user){?>

    <h3><a href="<?php echo BASE_URL?>members/view/<?php echo $user['uID'];?>" title="<?php echo $user['first_name'] . " " . $user['last_name'];?>"><?php echo $user['email'];?></a></h3>
    <p><?php echo $user['first_name'] . " " . $user['last_name'];?></p>
    <p><a href="mailto:<?php echo $user['email'];?>"><?php echo $user['email'];?></a></p>    

<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>