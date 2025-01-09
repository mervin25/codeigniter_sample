<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        
         <!-- Include Sidebar -->
         <?= view('sidebar') ?>
        <!-- Main Content -->
        <div class="dashboard-content">
            <h1>User Management</h1>
            <a href="<?= site_url('user_management/create') ?>" class="btn btn-primary">Add New User</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>User Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['id']) ?></td>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['user']) ?></td>
                            <td><?= esc($user['first_name']) ?></td>
                            <td><?= esc($user['last_name']) ?></td>
                            <td><?= esc($user['email']) ?></td>
                            <td><?= esc($user['phone_number']) ?></td>
                            <td>
                                <a href="<?= site_url('user_management/edit/'.$user['id']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= site_url('user_management/delete/'.$user['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                <a href="<?= site_url('user_management/view/'.$user['id']) ?>" class="btn btn-info">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
