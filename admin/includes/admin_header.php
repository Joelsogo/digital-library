<?php
if (!isset($page_title)) $page_title = 'Admin';
$flash = get_flash();
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($page_title); ?> | <?php echo e(SITE_NAME); ?> Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">
            <i class="bi bi-building-library me-2"></i><?php echo e(SITE_NAME); ?> Admin
        </a>
        <div class="d-flex align-items-center gap-3">
            <a href="../index.php" class="btn btn-sm btn-outline-light">View Site</a>
            <span class="text-light small"><?php echo e($_SESSION['user_name'] ?? ''); ?></span>
            <a href="../logout.php" class="btn btn-sm btn-outline-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="admin-wrapper">
    <aside class="admin-sidebar py-3">
        <nav class="nav flex-column">
            <a class="nav-link <?php echo $current === 'dashboard.php' ? 'active' : ''; ?>" href="dashboard.php">
                <i class="bi bi-speedometer2 me-2"></i>Dashboard
            </a>
            <a class="nav-link <?php echo $current === 'upload.php' ? 'active' : ''; ?>" href="upload.php">
                <i class="bi bi-cloud-upload me-2"></i>Upload Document
            </a>
            <a class="nav-link <?php echo $current === 'documents.php' ? 'active' : ''; ?>" href="documents.php">
                <i class="bi bi-files me-2"></i>Manage Documents
            </a>
            <a class="nav-link <?php echo $current === 'categories.php' ? 'active' : ''; ?>" href="categories.php">
                <i class="bi bi-tags me-2"></i>Categories
            </a>
            <a class="nav-link <?php echo $current === 'users.php' ? 'active' : ''; ?>" href="users.php">
                <i class="bi bi-people me-2"></i>Users
            </a>
        </nav>
    </aside>
    <div class="admin-content">
        <?php if ($flash): ?>
        <div class="alert alert-<?php echo e($flash['type']); ?> alert-dismissible fade show">
            <?php echo e($flash['message']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php endif; ?>
