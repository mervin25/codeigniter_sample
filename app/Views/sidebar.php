<!-- app/Views/sidebar.php -->
<nav>
    
    <h2>Dashboard</h2>
    <a href="<?= site_url('dashboard') ?>"><i class="fa fa-home"></i>Dashboard</a>
    <?php if (session()->get('user') === 'Admin'): ?>
        <a href="<?= site_url('user_management') ?>"><i class="fa fa-user"></i>User Management</a>
    <?php endif; ?>
</nav>
