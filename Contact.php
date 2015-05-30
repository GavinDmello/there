<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Comic Web</title>
	<link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<body class="body">
	<header class="mainheader">
		<img class="logo" src="images/The Comic Web Logo.png">
		<img class="super" src="images/13.jpg">
		<nav>
			<ul>
			   <li><a href="index.php">Home</a></li>
			   <li><a href="Masthead.html">Masthead</a></li>
			   
			   <li class="active"><a href="#">Contact us</a></li>
			</ul>
 		</nav>
 	</header>
	
	<div class="maincontent">
		<div class="content">
			<article class="topcontent">
				<header>
					<h2><a href="#" title="first post">Contact us</a></h2>
				</header>
				<footer>
					<p class="post-info">Let us know what we Developers can do for you</p>
		 		</footer>
				<content>
				<form action="insert.php" method="post">
				<div class="form-group">
            		<div class="col-xs-30">
               		<input type="text" class="form-control" name="Name" id="inputEmail" placeholder="Name" required>
               		</div>
        	    </div>
        	    <div class="form-group">
            		<div class="col-xs-30">
               		<input type="email"  class="form-control" name="Email" id="inputEmail" placeholder="Email" required>
               		</div>
        	    </div>
        	      <div class="form-group">
            		<div class="col-xs-30">
               			<input type="taxt" name="Num" class="form-control" id="inputEmail" placeholder="Number" required>
               		</div>
        	    </div>
        	    <div class="form-group">
            		<div class="col-xs-30">
               			<textarea class="form-control" name="Comment" id="inputEmail" placeholder="Comment" required></textarea>
               		</div>
        	    </div>
        	    <div class="form-group">
            		<div class="col-xs-offset-2 col-xs-10">
                		<button type="submit" class="btn btn-primary">Submit</button>
            		</div>
        		</div>
        		<br>
        	    </form>
				</content>
			</article> 

			<article class="bottomcontent">
				<header>
					<h2><a href="#" title="second post">Second Post</a></h2>
				</header>
				<footer>
					<p>This post is written by Jeffrin</p>
		 		</footer>
				<content>
					<p>Notepad++ is a free (as in "free speech" and also as in "free beer") source code editor and Notepad replacement that supports several languages. Running in the MS Windows environment, its use is governed by GPL License.</p>
					<p>Notepad++ is a free (as in "free speech" and also as in "free beer") source code editor and Notepad replacement that supports several languages. Running in the MS Windows environment, its use is governed by GPL License.</p> 
				</content>
			</article>
		</div>
	</div>	
	<article>
				<aside class="contact">
					<img src="images/p.jpg">
				</aside>

	</article>
			<footer class="mainfooter">
				<p>Copyright &copy;2014 <a href="Masthead.html" title="My first Webpage">Google it</a></p>
			</footer>
	
</body>
</html>