<?php

if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Entrez votre nom";
	}
	if (!$_POST['email']) {
		$error.="<br/>- Veuillez saisir votre e-mail";
	}
	if (!$_POST['message']) {
		$error.="<br/>- Veuillez saisir un message";
	}
	if (!$_POST['check']) {
		$error.="<br/>- Veuillez confirmer que vous êtes humain";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>
Oups, il y a une erreur</strong> 
Veuillez corriger ce qui suit: '.$error.'</div>';
	} else {
		mail("pyameogo@ispndp.com", "Contact message", "Name: ".$_POST['name']."
		Email: ".$_POST['email']."
		Message: ".$_POST['message']);
		
		{
		    $_POST=array();
		$result='<div class="alert alert-success" role="alert">
Merci, nous vous contacterons sous peu</div>';
		}
	}


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  
    
    <section id="cont">
    	<div class="container">
    
    		<div class="row">
    			<div class="col-md-6 offset-md-3">
    			    <div align="center">
    				<h1>ISPNDP EMAIL</h1></div>
    				
    				<?php echo $result;?>
    				
    				<p>Envoyer un message via le formulaire</p>
    				
    				<form method="post" role="form">
    				
    					<div class="form-group">
    						<input type="text" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $_POST['name']; ?>">
    					</div>
    					
    					<div class="form-group">
    						<input type="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $_POST['email']; ?>">
    					</div>
    					
    					<div class="form-group">
    						<textarea name="message" rows="5" class="form-control" placeholder="message..."><?php echo $_POST['message']; ?></textarea>
    					</div>
    					
    					<div class="checkbox">
    						<label>
    							<input type="checkbox" name="check">je ne suis pas un robot
    						</label>
    					</div>
    					
    					<div align="center">
    					<input type="submit" name="submit" class="btn btn-primary" value="Envoyer le message"/><br/>&nbsp;&nbsp;&nbsp;
    					</div>
    					
    				</form>
    				<a href="https://ispndp.com" class="btn btn-default"><strong>Repartir à ISPND</strong><br/></a>
    				
    			</div>
    		</div>
    
    	</div>
    </section>
      

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
  </body>
</html>