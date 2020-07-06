<!DOCTYPE html>
<html>
<link rel="stylesheet" href="ighub.css">
<div id="frm" class="jumbotron">
    <h1>Congratulations on your successful Application</h1><br>
    <h4>Welcome to the fellowship</h4>
</div>

</html>



<?php/*

//connect to database
$conn = mysqli_connect('localhost', 'user', '', 'ighub form');


//check the connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}


?>

<?php
$username = $password = '';
$erros = array('username' => '', 'password' => '');

?>
<?php














if (isset($_POST['submit'])) {




    if (empty($_POST['username'])) {
        echo 'A username is required<br />';
    } else {
        echo htmlspecialchars($_POST['username']);
    }

    if (empty($_POST['password'])) {
        echo 'A password is required<br />';
    } else {
        echo htmlspecialchars($_POST['password']);
    }
}

if (array_filter($errors)) {
} else {
    header('Location: insert.php');
}
?> */