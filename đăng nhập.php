<?php
require "my.php";

$login = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = logIn($_POST["userName"], $_POST["password"]);
}
?>

<form method="post">
    <h1>nhập userName và password</h1>
    <input type="text" name="userName"><br>
    <input type="text" name="password"><br>
    <input type="submit" value="submit">
</form>
<?php
echo $login;
?>