</main>

<footer class="bg-dark text-light py-4 mt-auto">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0 small">&copy; <?php echo date('Y'); ?> <?php echo e(SITE_NAME); ?>. Built for organizations.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <span class="small text-muted">Pure PHP · Secure Document Repository</span>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo strpos($_SERVER['PHP_SELF'], '/admin/') !== false ? '../' : ''; ?>assets/js/app.js"></script>
</body>
</html>
