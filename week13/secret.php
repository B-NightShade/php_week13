<h1>Secret!</h1>
<?php
    $auth = $_SESSION['user_logged_in'] ?? NULL;
    if($auth == NULL){
        header('Location:index.php');
    }
?>
<h2>Hello <?php echo $_SESSION['user']?>, the secret message is cookies!</h2>