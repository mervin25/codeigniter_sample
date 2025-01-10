<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
        
    <div class="dashboard-container">
        <!-- Include Sidebar -->
        <?= view('sidebar') ?>
        <!-- Main Content -->
        <div class="dashboard-content">
            <h1>Welcome, <?= esc($username) ?>!</h1>
            <!-- Additional content goes here -->
        </div>
    </div>
</body>
</html>
