<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
    <body>
        <form method="post" action="">
            <table align="center" style="border: solid 1px blue;width: 20%;">
        <tr>
            <td colspan="2"><h3>Login User</h3></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Ketikkan Username"</td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Ketikkan Password"</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="LOGIN" style="font-family:arial black"></td>
        </tr>
        </table>
        </form>
    </body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
     
        $sql = "SELECT * FROM login1 WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            header("Location: login.php");
        } else {
            echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
    ?>