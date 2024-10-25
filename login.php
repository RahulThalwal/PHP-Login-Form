<?php 
include("connection.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM login WHERE username= '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: welcome.php");
    } else {
        echo "<script>
        alert('Login failed. Invalid username or password');
        window.location.href = 'index.php';
        </script>";
    }
}
?>
