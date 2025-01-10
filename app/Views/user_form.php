<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($user) ? 'Edit User' : 'Add User' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="dashboard-container">
        
         <!-- Include Sidebar -->
         <?= view('sidebar') ?>
        <!-- Main Content -->
        <div class="dashboard-content">
            <h1><?= isset($user) ? 'Edit User' : 'Add User' ?></h1>
            <form action="<?= isset($user) ? site_url('user_management/update/'.$user['id']) : site_url('user_management/save') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= isset($user) ? esc($user['id']) : '' ?>">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?= isset($user) ? esc($user['username']) : '' ?>" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?= isset($user) ? esc($user['password']) : '' ?>" required><br>

                <label for="user">User Type:</label>
                <select class="dduser" id="user" name="user">
                    <option value="Admin" <?= isset($user) && $user['user'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="Employee" <?= isset($user) && $user['user'] === 'employee' ? 'selected' : '' ?>>Employee</option>
                </select><br>

                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="<?= isset($user) ? esc($user['first_name']) : '' ?>" required><br>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="<?= isset($user) ? esc($user['last_name']) : '' ?>" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= isset($user) ? esc($user['email']) : '' ?>" required><br>

                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" value="<?= isset($user) ? esc($user['phone_number']) : '' ?>" required><br>

                <button type="submit"><?= isset($user) ? 'Update' : 'Add User' ?></button>
            </form>
        </div>
    </div>
</body>
</html>
