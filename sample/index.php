<?php
session_start();
require_once 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = md5($_POST['password']);
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $pass]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() > 0) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?>
            </p>
            <?php endif; ?>
    <div class="login-container">
        <h1>Log in</h1>
        <form method="post">
            <label for="User">Username:</label><br>
            <input type="text" name="username"><br>
            <label for="Pass">Password:</label><br>
            <input type="password" name="password">
            <button type="submit">Log in</button>
        </form>
    </div>
</body>
</html>