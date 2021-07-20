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
    <textarea rows="4" cols="50" name="comment" form="usrform" class="message-text"></textarea>
	<input type="submit" name="submit">
    </div>
</form>
</body>
</html>
