<?php
include_once 'funtions.php';
session_start();

echo '<pre>';
print_r($_POST);
echo '<pre>';

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $_SESSION['email']=$email;
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($post = $result->fetch_assoc()) {

}
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Admin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <div class="row">
        <a href="http://localhost:8080/php/session/logout.php">Log Out</a>
    </div>

</div> <!-- /container -->

</html>