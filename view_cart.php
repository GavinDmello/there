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


</head>
<body>
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
                    <h2><a href="#" title="first post">View Cart</a></h2>
                </header>
                <content>

<div id="products-wrapper">
 
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="paypal-express-checkout/process.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h6>'.$obj->product_name.' (Code :'.$product_code.')</h6> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->product_desc.'</div>';
			echo '</div>';
            echo '</li>';

            $name=$obj->product_name;
            //echo $name;
            $price=$obj->price;
            $quantity=$cart_itm["qty"];
            $description=$obj->product_desc;
           //echo $name;
            $query = "INSERT INTO order(name,price,description,quantity)VALUES ('$name','$price','$description','$quantity')";
            mysql_query($query);
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong>  ';
		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>

    <form action="payment.php">
<div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</form>

    </div>
</div>
 </content>
            </article> 

            
        
                    
     
        <br>
        <br>
</body>
</html>
