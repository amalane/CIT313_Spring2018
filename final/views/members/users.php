<?php include('views/elements/header.php');?>
<?php 
if( is_array($user) ) {
    extract($user);
}
?>

<div class="container">
	<div class="page-header">

<h1>Member <?php echo $uID;?></h1>
    <p><?php echo $user[mail];?></p>
  </div>

<?php echo $first_name . " " . $last_name; ?><br />
<a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>

</div>

</div>


<?php include('views/elements/footer.php');?>