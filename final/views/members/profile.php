<?php include('views/elements/header.php'); ?>
<?php
if (is_array($user)) {
    extract($user);
}?>
<div class="container">
	<div class="page-header">
   <p><font size="4">Profile Update</font></p>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <label for="password">Password: <font color="#FF0000">*</font></label>
        <!-- <input type="password" class="txt" id="password" name="password" value="" maxlength="100" required /> -->
        <input id="password" name="password" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" placeholder="Password" required>
        <br />

        <label for="confirm_password">Confirm Password:<font color="#FF0000">*</font> </label>
        <!-- <input type="password" class="txt" id="confirm_password" name="confirm_password" value="" maxlength="100" required /> -->
        <input id="confirm_password" name="confirm_password" type="password"  onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>
        <br/>

        <input type="hidden" name="uID" value="<?php echo $uID?>"/>
        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>

        </form>

        
      </div>
    </div>
</div>








<?php include('views/elements/footer.php'); ?>