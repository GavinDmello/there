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
        <img class="logo" src="images/The Comic Web Logo.png">
        <img class="super" src="images/12.jpg">
        <nav>
            <ul>
               <li class="active"><a href="Home.php">Home</a></li>
               <li><a href="#">Masthead</a></li>
               <li><a href="Contact.php">Contact us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="maincontent">
        <div class="content">
            <article class="topcontent">
                <header>
                    <h2><a href="#" title="first post">Products</a></h2>
                </header>
                <footer>
                    <p class="post-info">Choose from the products</p>
                </footer>
                <content>

               
    <div id="products-wrapper">
    <h1>Products</h1>
    <div class="products">
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
    $results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
    if ($results) { 
    
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
            echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-thumb"><img src="comics/'.$obj->product_img_name.'"></div>';
            echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
            echo '<div class="product-desc">'.$obj->product_desc.'</div>';
            echo '<div class="product-info">';
            echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
            echo '<button class="add_to_cart">Add To Cart</button>';
            echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
    </div>  
</div>


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

<div class="top-sidebar">
<h3>Your Shopping Cart</h3>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
    echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
  
</div>


    </article>
            <footer class="mainfooter">
                <p>Copyright &copy;2014 <a href="a" title="My first Webpage">Google it</a></p>
            </footer>
    
</body>
</html>

