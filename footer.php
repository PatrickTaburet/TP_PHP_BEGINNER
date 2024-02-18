
</main><!-- /.container -->
<div class="row text-center ">
    <div class="col-md-4 mx-auto mt-5 bg-secondary text-white">
        <?php
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
        ajouterVue();
        $vues = nombre_vues() 
        ?>
        Il y a eu <?= $vues ?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur ce site.
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
