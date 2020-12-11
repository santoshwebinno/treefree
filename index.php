	<?php 
require 'shopify.php';

	/* Define your APP`s key and secret*/
	define('SHOPIFY_API_KEY','67c162421f37abf93c3105cd7842f62d');
	define('SHOPIFY_SECRET','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');
	
	/* Define requested scope (access rights) - checkout https://docs.shopify.com/api/authentication/oauth#scopes 	*/
	define('SHOPIFY_SCOPE','read_products,write_products');	//eg: define('SHOPIFY_SCOPE','read_orders,write_orders');
	session_start();
//$_SESSION['token'] = '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';
//$_SESSION['shop'] = 'tfg-dp.myshopify.com';
	if (isset($_GET['code'])) { // if the code param has been sent to this page... we are in Step 2
		// Step 2: do a form POST to get the access token
		$shopifyClient = new ShopifyClient($_GET['shop'], "", SHOPIFY_API_KEY, SHOPIFY_SECRET);
		session_unset();
		
		// Now, request the token and store it in your session.
	echo	$_SESSION['token'] = $shopifyClient->getAccessToken($_GET['code']);
		if ($_SESSION['token'] != '')
	echo	$_SESSION['shop'] = $_GET['shop'];
	
		header("Location: https://netzilatechnologies.com/treefree/");
		exit;		
	}
	// if they posted the form with the shop name
	else if (isset($_POST['shop'])) {
	
		// Step 1: get the shopname from the user and redirect the user to the
		// shopify authorization page where they can choose to authorize this app
		$shop = isset($_POST['shop']) ? $_POST['shop'] : $_GET['shop'];
		$shopifyClient = new ShopifyClient($shop, "", SHOPIFY_API_KEY, SHOPIFY_SECRET);
	
		// get the URL to the current page
		$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") { $pageURL .= "s"; }
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["SCRIPT_NAME"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
		}
	$pageURL = 'https://netzilatechnologies.com/treefree/';
		// redirect to authorize url
		header("Location: " . $shopifyClient->getAuthorizeUrl(SHOPIFY_SCOPE, $pageURL));
		exit;
	}
	
	   $sc = new ShopifyClient($_GET['shop'], '', SHOPIFY_API_KEY, SHOPIFY_SECRET);

    if(!$sc->validateSignature($_GET))
        die('Error: invalid signature.');

	//$products = $sc->call('GET', '/admin/products.json', array('published_status'=>'published'));
//print_r($products);

	// first time to the page, show the form below
?>
	<p>Install this app in a shop to get access to its private admin data.</p> 
 
	<p style="padding-bottom: 1em;">
		<span class="hint">Don&rsquo;t have a shop to install your app in handy? <a href="https://app.shopify.com/services/partners/api_clients/test_shops">Create a test shop.</a></span>
	</p> 
	 
	<form action="" method="post">
	  <label for='shop'><strong>The URL of the Shop</strong> 
	    <span class="hint">(enter it exactly like this: myshop.myshopify.com)</span> 
	  </label> 
	  <p>  
	    <input id="shop" name="shop" size="45" type="text" value="" /> 
	    <input name="commit" type="submit" value="Install" /> 
	  </p> 
	</form>
	
