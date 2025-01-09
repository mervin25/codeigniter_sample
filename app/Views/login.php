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
        <p class="error-message"><?= session()->getFlashdata('error') ?></p>
        <form action="<?= site_url('login/authenticate') ?>" method="post">
            <?= csrf_field() ?>
            <!-- Dropdown for user roles -->
            <select class="dropdown" name="user" id="user">
                <option value="">Select User</option>
                <?php foreach ($users as $user): ?>
                    <option value="<?= esc($user['user']) ?>"><?= esc($user['user']) ?></option>
                <?php endforeach; ?>
            </select>
            <!-- Username input -->
            <input type="text" name="username" id="username" placeholder="Enter your username">
            <!-- Password input -->
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <!-- Submit button -->
            <button type="submit">Login</button>
        </form>
    </div>
    <!-- Link JavaScript -->
    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>
