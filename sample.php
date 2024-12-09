<?php
$user = "user";
$pass = "project123";


$notif = "Invalid password for user";
$default = "Username not found, try again";
$correct = "Welcome! Access granted to the admin panel.";
$message = ""; 

// Check if the login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    switch ($username) {
        case $user:
            if ($password === $pass) {
                $message = $correct;
            } else {
                $message = $notif;
            }
            break;
        default:
            $message = $default;
            break;
    }
}

?>


<form method="post"><br>
    <h2>LOGIN PAGE</h2>
    <label for="username">Username <br></label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password <br></label>
    <input type="password" name="password" id="password" required>
    <br><br>    
    <button type="submit" name="login" id="buttons">Login</button>
    <br>
    <?php echo $message; ?>
</form>