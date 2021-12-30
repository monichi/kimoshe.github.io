<?php
	require 'myconnection.php';
	$result = mysqli_query($connect, 'select * from product');
?>
<br><br><br>
<table style="float:left">
	<link style="text/css" rel="stylesheet" href="styleOrder.css"></link>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Buy</th>
	</tr>
	<?php while($product = mysqli_fetch_object($result)) { ?>
		<tr>
			<td><?php echo $product->id; ?></td>
			<td><?php echo $product->name; ?></td>
			<td><?php echo $product->price; ?></td>
			<td><a href="Order.php?id=<?php echo $product->id; ?>"> <button>Order Now </button></a></td>
		</tr>
	<?php } ?>
</table>

<?php
session_start ();
require 'myconnection.php';
require 'item.php';
if (isset ( $_GET ['id'] ) && !isset($_POST['update'])) {

	$result = mysqli_query ( $connect, 'select * from product where id=' . $_GET ['id'] );
	$product = mysqli_fetch_object ( $result );
	$item = new Item ();
	$item->id = $product->id;
	$item->name = $product->name;
	$item->price = $product->price;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = - 1;
	if (isset ( $_SESSION ['cart'] )) {
		$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		for($i = 0; $i < count ( $cart ); $i ++)
		if ($cart [$i]->id == $_GET ['id']) {
			$index = $i;
			break;
		}
	}
	if ($index == - 1)
	$_SESSION ['cart'] [] = $item;
	else {
		$cart [$index]->quantity ++;
		$_SESSION ['cart'] = $cart;
	}
}

// Delete product in cart
if (isset ( $_GET ['index'] ) && !isset($_POST['update'])) {
	$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
	unset ( $cart [$_GET ['index']] );
	$cart = array_values ( $cart );
	$_SESSION ['cart'] = $cart;
}

// Update quantity in cart
if(isset($_POST['update'])) {
	$arrQuantity = $_POST['quantity'];

	// Check validate quantity
	$valid = 1;
	for($i=0; $i<count($arrQuantity); $i++)
	if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1){
		$valid = 0;
		break;
	}
	if($valid==1){
		$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		for($i = 0; $i < count ( $cart ); $i ++) {
			$cart[$i]->quantity = $arrQuantity[$i];
		}
		$_SESSION ['cart'] = $cart;
	}
	else
		$error = 'Quantity is InValid';
}

?>


<?php echo isset($error) ? $error : ''; ?>
<form method="post">
	<table  class="center" style="float: right">
		<tr valign="top">
			<th>Option</th>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity <input type="submit" name="Submit"><input
				type="hidden" name="update">
			</th>
			<th>Sub Total</th>
		</tr>
		<?php
		$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		$s = 0;
		$index = 0;
		for($i = 0; $i < count ( $cart ); $i ++) {
			$s += $cart [$i]->price * $cart [$i]->quantity;
			?>
		
		<tr>
			<td><a href="Order.php?index=<?php echo $index; ?>"
				onclick="return confirm('Are you sure?')"><input type="button" value="Delete" class="del"></a></td>
			<td><?php echo $cart[$i]->id; ?></td>
			<td><?php echo $cart[$i]->name; ?></td>
			<td><?php echo $cart[$i]->price; ?></td>
			<td><input type="text" value="<?php echo $cart[$i]->quantity; ?>"
				style="width: 50px;" name="quantity[]"></td>
			<td><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
		</tr>
		<?php
		$index ++;
		}
		?>
		
		<tr>
			<td colspan="5" align="right">Sum</td>
			<td align="left"><?php echo $s; ?></td>
		</tr>
	</table>
</form>
<a href="product2.html" style="position: fixed; bottom:0;">
		   <button> Continue Shopping </button> </a>
<a href="http://localhost/Kimoshe/insertForm.html" style="position: fixed; bottom:40;">
	<button>Check Out</button></a>
<html>
<head>
<link rel="stylesheet" style="text/css" href="StyleOrders.css"/>
</head>
<body>
</body>
</html>