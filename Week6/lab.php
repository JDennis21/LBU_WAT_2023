<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../style/main.css"/>
		<title>Result</title>
	</head>
	<body>
		<h1>Insert a record</h1>
		<!--set up form id, name, pass-->
		<form method="post" action="insertRecord.php">
			<input type="text" name="txtID" />
			<br />
			<input type="text" name="txtName" />
			<br />
			<input type="text" name="txtPass" />
			<br />
			<input type="submit" value="Submit" name="subUser" />
		</form>
        <?php
        include 'select.php';
        ?>
	</body>
</html>