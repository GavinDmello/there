<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTML5 and CSS3 Responsive Webpage</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
function ticker() {
    $('#ticker li:first').slideUp(function() {
        $(this).appendTo($('#ticker')).slideDown();
    });
}
setInterval(ticker, 3000);
</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js ">

        </script>
<style type="text/css">
.ticker {
width: 200px;
height: 200px;
overflow: hidden;
border: 1px solid #DDD;
border-radius: 5px;
box-shadow: 0px 0px 5px #DDD;
background-color:  #F5F3E5;
text-align: left;
}
.ticker h3 {
padding: 0 0 10px 10px;
border-bottom: 1px solid #A7A7A7;
}
ul {
list-style: none;
padding: 0;
margin: 0;
font-style: italic;
}
ul li {
list-style: none;
height:50px;
padding:7px;
border-bottom: 1px solid #D6CFB8;
}
.cont {
width:60%;
height: 60%;
}
</style>
</head>

<body class="body">
	<header class="mainheader">
		<img class="logo" src="The Comic Web Logo.png">
		<img class="super" src="12.jpg">
		<nav>
			<ul>
			   <li class="active"><a href="Home.html">Home</a></li>
			   <li><a href="#">Masthead</a></li>
			   <li><a href="#">Portfolio</a></li>
			   <li><a href="Contact.html">Contact us</a></li>
			</ul>
 		</nav>
 	</header>
	
	<div class="maincontent">
		<div class="content">
			<article class="topcontent">
				<header>
					<h2><a href="#" title="first post">Payment </a></h2>
				</header>
				<footer>
					<p class="post-info"></p>
		 		</footer>
				<content>
      <form action="paid.html">
      	

 <div class="control-group">
    <p class="pull-left">Payment Types</p>
    <div class="controls span2">
    <br/>
    <br/>
        <label class="checkbox">
            <input type="checkbox" value="option1" id="inlineCheckbox1"> Cash
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option2" id="inlineCheckbox2"> Invoice
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> Discover
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> Financing
        </label>
    </div><br/>
    <div class="controls span2">
        <label class="checkbox">
            <input type="checkbox" value="option1" id="inlineCheckbox1"> Check
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option2" id="inlineCheckbox2"> American Express
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> MasterCard
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> Google Checkout
        </label>
    </div><br/>
    <div class="controls span2">
        <label class="checkbox">
            <input type="checkbox" value="option1" id="inlineCheckbox1"> Traveler's Check
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option2" id="inlineCheckbox2"> Diner's Club
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> Visa
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> Paypal
        </label>
    </div>
    <div class="form-group">
          	<div class="col-xs-offset-2 col-xs-10">
            		<button type="submit" class="btn btn-primary">Check out</button>
           	</div>
      </div>
      <br/>
      <br/>
</div>

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
				 
	
				</content>
			</article>
		</div>
	</div>	
	<article>
		
					
					<div class="top-sidebar">
   <h3>Latest News</h3>
   <ul id="ticker">
       <li>Arrow series reaches new heights</li>
       <li>Ben afflect may disappoint</li>
<ul>
    <li>Jesse Eisenberg ~ Lex luthor, seriously</li>
</ul>
<ul>
    <li>Batman vs superman releases in 2016</li>
</ul>
<ul>
       <li>Bale bails out !</li>
</ul>
</div>
        <br>
        <br>

	</article>
			<footer class="mainfooter">
				<p>Copyright &copy;2014 <a href="a" title="My first Webpage">Google it</a></p>
			</footer>
	
</body>
</html>

