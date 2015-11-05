<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paul McKenna Web Dev</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="images/mario.ico"/>
	<link rel='stylesheet' type="text/css" href='css/bootstrap.min.css'></style>
	<link rel='stylesheet' type="text/css" href='css/paulmck.css'></style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" id="dropdownToggle" type="button" 
				data-toggle="collapse" data-target="#menutarget">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#title" class="navbar-brand">WebDev</a>
			</div>
			<div class="navbar-collapse collapse" id="menutarget">
				<ul class="navbar-nav nav">
					<li><span class="sr-only">Link</span></li>
					<li data-toggle='collapse' data-target='.nav-collapse'>
						<a class="dropdownLink" href="#about">About</a>
					</li>
					<li data-toggle='collapse' data-target='.nav-collapse'>
						<a class="dropdownLink" href="#projects">Projects</a>
					</li>
					<li data-toggle='collapse' data-target='.nav-collapse'>
						<a class="dropdownLink" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


		<div class="jumbotron title" id='title'>
			<h1>Paul is learning Web Development</h1>
			<h3>and made this site in roughly 20 minutes <br> as a placeholder</h3>
		</div>
	

	<div class="jumbotron about" id='about'>
		<h1>About</h1>
		<h3>Again, just a placeholder site, <br> no judgement allowed</h3>
		<div class="col-sm-8 col-xs-12">
			<p>
				From Dublin, living in London. 
				After studying and working in film and photography 
				I am now retraining as a front-end web developer. 
				I'll use this site to showcase stuff I learn
				as I go I guess. Enjoy
			</p>
		</div>
		<div class="endOfAbout"><span></span></div>
	</div>

	<div class="jumbotron projects" id='projects'>
		<h1>Projects</h1>
		<h3>I'll put links to little things I make here</h3>
		<div class="col-sm-8 col-xs-12">
			<p>
				I promise none of them will be the examples from tutorials 
				and to be honest most of them will probably have mario in there somewhere
			</p>
		</div>
		<div class="container projectExamples">
			<div class="row">
				<div class="col-sm-4 col-xs-12 project1">
					<a href="http://www.paulmck.co.uk/triangle/index.php">
						<h3>Triangle Audio</h3>
					</a>
					
					<a href="http://www.paulmck.co.uk/triangle/index.php">
						<img src="images/triangleProject.png" alt=""></img>
					</a>
					
					<p>Website for recording studio including scalable php slideshow and responsive design</p>
				</div>

				<div class="col-sm-4 col-xs-12 project2">
					<a href="http://www.paulmck.co.uk/colorScroll/index.html">
						<h3>colorScroll</h3>
					</a>
					<a href="http://www.paulmck.co.uk/colorScroll/index.html">
						<img src="images/colorScrollProject.png" alt="">
					</a>
					<p>	
						Little project to make a colour generator by scrolling in your browser.
						Made in one night and written in vanilla javascript. I made an algorithm
						to convert rgb values to hex codes.
					</p>
				</div>
				<div class="col-sm-4 col-xs-12 project3"></div>
			</div>
			
		</div>
	<div class="endOfProjects"><span></span></div>
	</div>

	<div class="jumbotron contact" id='contact'>
		<h1>Contact</h1>
		<h3>I'll put a contact form here</h3>
		<div class="col-sm-8 col-xs-12">
			<p>
				I don't want to just leave my email up for all the bots 
				to pillage and offer me more male enhancements
			</p>


                        <?php  
                        
                        if (isset($_POST['submit'])) {
		                        $subject = $_POST['subject'];
		                        $subject2 = "Message Received";
		                        $message = $_POST['message'];
		                        $email = $_POST['email'];
		                        $name = $_POST['name'];
		                        $to = 'paulmck21@gmail.com';
		                        $from = 'From: contactForm - paulmck.co.uk';
		                        $reason = $_POST['reason'];
		                        $body = "Name: $name\nEmail: $email\nReason: $reason\nMessage: $message";
		                        $body2 = "Hey $name,\nThanks for getting in touch. I'll get back to you as soon as I can.\n\nKind Regards\n\nPaul McKenna";

                                mail($to , $subject, $body, $from);

                                mail($email, $subject2, $body2);
                        
                                echo '<h4>Success, your message has been sent!</h4>';
                        
                        }
                        
                        ?>
                        
			<form action="" method="post">
				<input type="text" name="name" placeholder='name' size="26" ><p></p>
				<input type="email" name="email" placeholder='email' size="26" ><p></p>
				<input type="text" name="subject" placeholder='subject' size="26" >
				<p></p>
				<textarea name="message" placeholder='message' cols="25" rows="3" ></textarea>
				<p id="formP">Reason for getting in touch?</p>
				<select name="reason" id="selectForm" size="1">
					<option value="job">Discuss Job Opportunity</option>
					<option value="beingNice">General Wellwishing</option>
					<option value="spam">Spamming</option>
				</select>
				<input name='submit' type="submit">
			</form>
			<div class="endOfContact"><span></span></div>
			

		</div>

	</div>


	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/paulmck.js"></script>

</body>
</html>