<?php
include_once("header.php");
?>
<?php
    require_once("database.php");
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phno= $_POST['phno'];
        $message=$_POST['message'];
        
       if($phno!="") $sql="insert into contact values('','$name','$email','$phno','$message')";
       else $sql="insert into contact values('','$name','$email','','$message')";
       
       $database->query($sql);
       $message="Your Query is successfully Posted.";
    }
?>
			<div id="maindata">

			
			<h2>Contact Form:</h2>
			<br /><?php if(!empty($message)) echo $message; ?>
			<br />Post your queries and we'll get back to you as soon as possible.</br>
			<br>
				<form method="post" onclick="" id="contact-form"><br>
					<table>
					<tr>
						<td class="label"><label>* Name:</label></td>
						<td><input name="name" type="name" id="text" placeholder="Your Name" required="true"/></td>
					</tr>
					<tr>
						<td class="label"><label>* E-mail:</label></td>
						<td><input name="email" type="email" id="email" placeholder="example@xyz.com" required="true"/></td>
					</tr>
					<tr>
						<td class="label"><label>Phone No:</label></td>
						<td><input name="phno" type="text" placeholder=""/></td>
					</tr>
					<tr>
						<td class="label"><label>Message:</label></td>
						<td><textarea name="message" cols="30" rows="7" required="true"></textarea></td>
					</tr>
					<tr>
						<td class="label"><label></label></td>
						<td><input name="submit" type="submit" value="Submit" /></td>
					</tr>
					</table>
				</form>
			
            </div>
            
            
<?php include("footer.php"); ?>