<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="?P=home#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="?P=features" class="nav-link px-2 text-muted">Features</a></li>
            <?php if (IsUserLoggedIn()) : ?>             
                <li class="nav-item"><a href="?P=#" class="nav-link px-2 text-muted">all submissions</a></li>

            <?php endif; ?>
            <li class="nav-item"><a href="?P=about_us" class="nav-link px-2 text-muted">About us</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2021 3Pro, Inc</p>
    </footer>
</div>