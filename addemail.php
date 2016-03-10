<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
​
<?php
$dbh = new PDO('mysql:host=localhost;dbname=Shopping_Cart', 'root', 'root');


$query = "INSERT INTO email_list (first_name, last_name, email)  VALUES (?, ?, ?)";

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$stmt = $dbh->prepare($query);
$result = $stmt->execute(
    array($first_name, $last_name, $email)
);

echo 'Account Created.';

?>

​
</body>
</html>