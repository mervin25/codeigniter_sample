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
<style>
/* General Table Styles */
table {
    width: 30%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    font-weight: bold;
}

td {
    color: #333;
    font-size: 16px;
}

td a {
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 4px;
    margin-right: 5px;
    color: white;
    transition: background-color 0.3s ease;
}

a.btn-primary {
    background-color: #0b6623;
}

a.btn-primary:hover {
    background-color: #2c3e50;
}
.btn {
    margin-top: 20px;
    display: inline-block;
    padding: 10px 20px;
    text-align: center;
    border-radius: 4px;
    color: #000;
    transition: background-color 0.3s ease;
    text-decoration: none;
}
.error-message {
    color: red;
    font-size: 14px;
}

    </style>
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
            <a href="<?= site_url('user_management') ?>" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>
</html>
