<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM supliers WHERE suplier_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditsupplier.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Supplier</h4></center><hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Supplier Name : </span><input type="text" style="width:265px; height:30px;" name="name" value="<?php echo $row['suplier_name']; ?>" /><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="address" value="<?php echo $row['suplier_address']; ?>" /><br>
<span>Contact Person : </span><input type="text" style="width:265px; height:30px;" name="cperson" value="<?php echo $row['contact_person']; ?>" /><br>
<span>Contact No.: </span><input type="text" style="width:265px; height:30px;" name="contact" value="<?php echo $row['suplier_contact']; ?>" /><br>
<span>Note : </span><textarea style="width:265px; height:80px;" name="note"><?php echo $row['note']; ?></textarea><br>
<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>