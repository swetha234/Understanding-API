<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="utf-8"/>
    <title>Send messages</title>
</head>
<body>

<form method="post" class="formForMessage ">
<h1>Send a message</h1>
    <div class="mobile-number" >
        <label>Mobile Number: </label>
        <input type="text" name="num">
	</div>
    <div class="country-code">
	<label>Country Code:</label>
	<select name="Code">
		<option value="" type="select">Select Here...</option>
		<option value="91">India - +91</option>
		<option value="1">USA - +1</option>
	</select>
    </div>
    <div class="message">
	<label>Enter your Message</label>
    <input type="text" name="message" class="message-text"></input>
	<input type="submit" name="submit">
    </div>
</form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
	// Authorisation details.
	$username = "himaswetha234@gmail.com";
	$hash = "02176d08208e3a5d46211d5281866f2ac9ca9d1888ad4875c1756a045a23bc9f";

	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "Testing"; // This is who the message appears to be from.
	$numbers = $_POST["Code"] . $_POST["num"];; // A single number or a comma-seperated list of numbers
	$message = $_POST["message"];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

    if (!$result) {
		?>
		<script>alert('message not sent!')</script>
	<?php
}
else{
	#print the final result
	echo $result;
?>
<script>alert('message sent!')</script>
<?php
}
}
?>