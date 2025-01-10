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
<style>

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #2c3e50;
    color: #ecf0f1;
}

td {
    color: #333;
}

td a {
    text-decoration: none;
    color: white;
    padding: 6px 10px;
    border-radius: 4px;
    margin-right: 5px;
}
.btn {
    display: inline-block;
    padding: 10px 20px;
    color: #ffffff;
    text-align: center;
    border-radius: 4px;
    transition: background-color 0.3s ease;
    text-decoration: none;
}
.btn-primary {
    background-color: #0b6623;
}

.btn-warning {
    background-color: #ff9800;
}

.btn-danger {
    background-color: #d9534f;
}

.btn-info {
    background-color: #17a2b8;
}

.btn-primary:hover {
    background-color: #2c3e50;
}

.btn-warning:hover {
    background-color: #e68a00;
}

.btn-danger:hover {
    background-color: #c9302c;
}

.btn-info:hover {
    background-color: #138496;
}
    </style>
    
    <div class="dashboard-container">
        
         <!-- Include Sidebar -->
         <?= view('sidebar') ?>
         
        <!-- Main Content -->
        <div class="dashboard-content">
            <h1>User Management</h1>
            <a href="<?= site_url('user_management/create') ?>" class="btn btn-primary">Add New User</a>
             <!-- Display Success Message -->
     <?php if (session()->has('success')) : ?>
            <div class="alert alert-success">
                <?= session('success') ?>
            </div>
        <?php endif; ?>
            <table class="tbuser">
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
                                <a href="<?= site_url('user_management/edit/'.$user['id']) ?>" class="btn-warning">Edit</a>
                                <a href="<?= site_url('user_management/delete/'.$user['id']) ?>" class="btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                <a href="<?= site_url('user_management/view/'.$user['id']) ?>" class="btn-info">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
