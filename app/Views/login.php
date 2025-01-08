<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <p class="error-message"></p>
        <form action="<?= site_url('login/authenticate') ?>" method="post" onsubmit="validateForm(event)">
            <?= csrf_field() ?>
            <input type="text" name="username" id="username" placeholder="Enter your username">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <button type="submit">Login</button>
        </form>
    </div>
    <!-- Link JavaScript -->
    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>
