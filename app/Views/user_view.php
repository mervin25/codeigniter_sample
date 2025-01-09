<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        
         <!-- Include Sidebar -->
         <?= view('sidebar') ?>
        <!-- Main Content -->
        <div class="dashboard-content">
            <h1>User Details</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <td><?= esc($user['id']) ?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><?= esc($user['username']) ?></td>
                </tr>
                <tr>
                    <th>User Type</th>
                    <td><?= esc($user['user']) ?></td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td><?= esc($user['first_name']) ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?= esc($user['last_name']) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= esc($user['email']) ?></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><?= esc($user['phone_number']) ?></td>
                </tr>
            </table>
            <a href="<?= site_url('user_management') ?>" class="btn btn-primary">Back to User Management</a>
        </div>
    </div>
</body>
</html>
