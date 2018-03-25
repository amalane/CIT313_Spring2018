<?php include('elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Register </h1>
   <p><font size="4">Register Today!</font></p>
  </div>
   
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
        
        <label for="first_name">First Name: <font color="#FF0000">*</font></label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name?>" maxlength="20" required />
        <br />
                    
        <label for="last_name">Last Name: <font color="#FF0000">*</font></label>
        <input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name?>" maxlength="20" required />
        <br />
         
        <label for="email">E-mail Address: <font color="#FF0000">*</font></label>
        <input type="text" class="txt" id="email" name="email" value="<?php echo $email?>" maxlength="100" required />
        <br />
        
        <label for="password">Password: <font color="#FF0000">*</font></label>
        <input type="password" class="txt" id="password" name="password" value="" maxlength="100" required />
        
          <br/>
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>

        </form>

        
      </div>
    </div>
</div>
<?php include('elements/footer.php');?>
