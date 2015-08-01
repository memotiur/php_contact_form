<?php include 'validation.php';?>
<!DOCTYPE HTML> 
<html>
  <head>
  <title>PHP Contact Form with Validation</title>
  <link rel="stylesheet" href="css/style.css" />
  </head>
<body>
<div class="container">
  <div class="main">
   <h2>PHP Contact Form with Validation</h2><hr/><br>	
	<form method="post" action="contact_form.php"> 
	<label>Name :</label><br>
	<input class="input" type="text" name="name" value="">
	<span class="error"><?php echo $nameError;?></span><br><br>					
		 
	<label>Email :</label><br>
	<input class="input" type="text" name="email" value="">
	<span class="error"><?php echo $emailError;?></span><br><br>	
						   
	<label>Purpose :</label><br>
	<input class="input" type="text" name="purpose" value="">
	<span class="error"><?php echo $purposeError;?></span><br><br>	
				
	<label>Message :</label><br>
	<textarea name="message" val=""></textarea>
	<span class="error"><?php echo $messageError;?></span><br><br>	
				
	<input class="submit" type="submit" name="submit" value="Submit">
    <span class="success"><?php echo $successMessage;?></span>
    </form>
  </div>
  <div class="formget">
	<a href=http://www.formget.com/app><img src="images/formget.jpg" alt="Online Form Builder"/></a>
  </div>
</div>  
</body>
</html>
<!--html ends here-->
