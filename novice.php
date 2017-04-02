<?php include_once 'header.php'; ?>
<?php
$articles = Db::queryAll("SELECT * FROM news ORDER BY id DESC;");
?>
    <section class="line__bottom pb60">
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Novice</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <div class="row flex--center pt45">
                <?php
                foreach ( $articles as $news )
                    include 'partials/news.php';
                ?>
            </div>
        </div>
    </section>
<?php include_once 'footer.php'; ?>