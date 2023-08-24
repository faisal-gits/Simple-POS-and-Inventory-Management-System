<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveuser.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add User</h4></center>
<hr>
<div id="ac">
<span>Full Name : </span><input type="text" style="width:265px; height:30px;" name="name" placeholder="Full Name" Required/><br>
<span>Username : </span><input type="text" style="width:265px; height:30px;" name="username" placeholder="Address"/><br>
<span>Password : </span><input type="password" style="width:265px; height:30px;" name="password" placeholder="Contact"/><br>
<span>Position : </span>
<select name="position" style="width:265px; height:30px; margin-left:-5px;" >
	<option>--</option>
        <option>Cashier</option>
        <option>admin</option>
        <option>receptionist</option>
	</select><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save User</button>
</div>
</div>
</form>