<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Arfah Maulidya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= base_url('/') ?>">Home</a>
                <a class="nav-link" href="/pages/about">About</a>
                <a class="nav-link" href="/pages/contact">Contact</a>
                <a class="nav-link" href="/komik">Komik</a>
            </div>
            <?php if(logged_in()) : ?>
                <a class="nav-link" href="/logut">Logout</a>
            
            <?php else : ?>
                <a class="nav-link" href="/login">Login</a>
            <?= endif; ?>
        </div>
    </div>
</nav>