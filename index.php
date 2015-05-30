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
	<script language="JavaScript1.1">
	<!--
	var slideimages=new Array()
	var slidelinks=new Array()
	function slideshowimages(){
	for (i=0;i<slideshowimages.arguments.length;i++){
	slideimages[i]=new Image()
	slideimages[i].src=slideshowimages.arguments[i]
	}
	}

	function slideshowlinks(){
	for (i=0;i<slideshowlinks.arguments.length;i++)
	slidelinks[i]=slideshowlinks.arguments[i]
	}

	function gotoshow(){
	if (!window.winslide||winslide.closed)
	winslide=window.open(slidelinks[whichlink])
	else
	winslide.location=slidelinks[whichlink]
	winslide.focus()
	}

	//-->
	</script>
</head>
<body class="body">
	<header class="mainheader">
		<img class="logo" src="images/The Comic Web Logo.png">
		<img class="super" src="images/12.jpg">
		<nav>
			<ul>
			   <li class="active"><a href="index.php">Home</a></li>
			   <li><a href="Masthead.html">Masthead</a></li>
			   
			   <li><a href="Contact.php">Contact us</a></li>
			</ul>
 		</nav>
 	</header>
	
	<div class="maincontent">
		<div class="content">
			<article class="topcontent">
			
				<a href="javascript:gotoshow()"><img src="images/1.jpg" name="slide" width = "100%" height = "430px"></a>
			<script>
			<!--
			//configure the paths of the images, plus corresponding target links
			slideshowimages("images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg");

			//configure the speed of the slideshow, in miliseconds
			var slideshowspeed=3000

			var whichlink=0
			var whichimage=0
			function slideit(){
			if (!document.images)
			return
			document.images.slide.src=slideimages[whichimage].src
			whichlink=whichimage
			if (whichimage<slideimages.length-1)
			whichimage++
			else
			whichimage=0
			setTimeout("slideit()",slideshowspeed)
			}
			slideit()

			//-->
			</script>
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
				<aside class="top-sidebar">
					
					<h3>Sign up</h3>
<form name="form" action="check.php" method="post">
        <div class="form-group">
            
            <div class="col-xs-30">
               <input type="text" name="email"  class="form-control" id="inputEmail" placeholder="Email	 ">

            </div>
        </div>
<div class="form-group">
            
            <div class="col-xs-30">
               <input type="password" name="pass" class="form-control" id="inputEmail" placeholder="Password">
               
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
        <br>
        <br>
      

        </form>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
               <a href="reg.html"> <button type="submit" class="btn btn-primary">Register</button></a>
            </div>
        </div>
</aside>
	</article>
			<footer class="mainfooter">
				<p>Copyright &copy;2014 <a href="a" title="My first Webpage">Google it</a></p>
			</footer>
	
</body>
</html>