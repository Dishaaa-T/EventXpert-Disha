<!-- forgotpass.php -->
<?php
    include 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        $sql = "UPDATE admis SET password='$new_password' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "Password reset successful";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
    <form method="post">
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="new_password" required placeholder="New Password">
        <button type="submit">Reset Password</button>
    </form>