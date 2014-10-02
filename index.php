<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project 2</title>
	
	<link href="./estilo/style.css" rel="stylesheet">
	
	<?php require 'logic.php' ?>
</head>
<body>

	<div class="todo">
		<div class="web">

		
		<div id="generate" class="col-xs-12">
			<div class="todo">
				<div class="center">
					<h1>xkcd Password Generator</h1>
					<h3>WELLCOME</h3>
					<h1> GENERATE THE PASSWORD</h1>
				</div>
				<div class="center alert alert-info" role="alert">
					<?php echo $password;?>
				</div>	
				<div class="col-xs-4 col-xs-offset-4">
					<form class="form-horizontal" role="form" action="index.php" method="POST">
						<input type="hidden" value="false" name="first_time">
						<div class="form-group">
							<label for="words" class="col-xs-6 control-label">HOW MANY WORDS?</label>
							<div class="col-sm-3">
								<input type="number" class="form-control" value="<?php echo $customization['words'];?>" max="9" min="1" id="words" name="words">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6 col-xs-offset-4">
								<div class="checkbox" >
									<label>
										<input type="checkbox" name="symbol"  <?php if($customization['symbol'])  echo "checked"; ?> > Add symbol
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6 col-xs-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="number"  <?php if($customization['number'])  echo "checked"; ?> > Add number
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6 col-xs-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="capital"  <?php if($customization['capital'])  echo "checked"; ?> > All capital
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="center">
								<button type="submit" class="btn btn-info">GENERATE THE PASSWORD</button>
							</div>
						</div>
					</form>									
					
				</div>
			</div>

		</div>			
		
<div id="home" class="col-xs-12 main-title">
			<div class="todo">
				<div class="center">
					<h1>xkcd Password Generator</h1>
					
				</div>	
				<img alt="xkcd joke" src="./images/xkcd_password.png" class="col-xs-offset-3 img-thumbnail">
			</div>

		</div>


		<div id="faq" class="col-xs-12">
			<div class="center">
				<h1>INSTRUCTIONS</h1>
			</div>
			<div class="col-xs-8 col-xs-offset-2">
				<p>THIS IS THE APP TO GENERATE A RANDOM PASSWORD</p>
				<br>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								
									What is the xkcd password generator?
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								xkcd password generator is an app used to generate a random password with your favorites types, with or without numbers, 
								special characters.....
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								How to start?
								
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								It is very easy to use, firstly you may select the number
								 of words will you want to use in your password, secondly, you will select if you
								 want some special symbol, numbers or all in capital characters, finally you must
								 press the button GENERATE PASSWORD and.... voila! you have your password.
							</div>
						</div>
					</div>
			
</body>
</html>