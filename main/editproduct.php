<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditproduct.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Product</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Brand Name : </span><input type="text" style="width:265px; height:30px;"  name="code" value="<?php echo $row['product_code']; ?>" Required/><br>
<span>Generic Name : </span><input type="text" style="width:265px; height:30px;"  name="gen" value="<?php echo $row['gen_name']; ?>" /><br>
<span>Category / Description : </span><textarea style="width:265px; height:50px;" name="name" ><?php echo $row['product_name']; ?> </textarea><br>
<span>Date Arrival: </span><input type	="date" style="width:265px; height:30px;" name="date_arrival" value="<?php echo $row['date_arrival']; ?>" /><br>
<span>Expiry Date : </span><input type	="date" style="width:265px; height:30px;" name="exdate" value="<?php echo $row['expiry_date']; ?>" /><br>
<span>Selling Price : </span><input type="text" style="width:265px; height:30px;" id="txt1" name="price" value="<?php echo $row['price']; ?>" onkeyup="sum();" Required/><br>
<span>Original Price : </span><input type="text" style="width:265px; height:30px;" id="txt2" name="o_price" value="<?php echo $row['o_price']; ?>" onkeyup="sum();" Required/><br>
<span>Profit : </span><input type="text" style="width:265px; height:30px;" id="txt3" name="profit" value="<?php echo $row['profit']; ?>" readonly><br>
<span>Supplier : </span>
<select name="supplier" style="width:265px; height:30px; margin-left:-5px;" >
	<option><?php echo $row['supplier']; ?></option>
	<?php
	$results = $db->prepare("SELECT * FROM supliers");
		$results->bindParam(':userid', $res);
		$results->execute();
		for($i=0; $rows = $results->fetch(); $i++){
	?>
		<option><?php echo $rows['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>QTY Left: </span><input type="number" style="width:265px; height:30px;" min="0" name="qty" value="<?php echo $row['qty']; ?>" /><br>
<span>Quantity: </span><input type="number" style="width:265px; height:30px;" min="0" name="sold" value="<?php echo $row['qty_sold']; ?>" /><br>

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>