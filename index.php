<?php include_once 'header.php'; ?>
<?php
$articles = Db::queryAll("SELECT * FROM news ORDER BY id DESC;");
?>
    <section class="line__bottom">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="vh100 flex flex--center flex--middle bg--image"
                     style="background-image: url('images/slika1.jpg')">
                    <div class="flex flex--column">
                        <h1 class="text-center">Salon Razvajanja</h1>
                        <div class="flex flex--center">
                            <div class="line bg--yellow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="vh100 flex flex--center flex--middle bg--image"
                     style="background-image: url('images/slika2.jpg')">
                    <div class="flex flex--column">
                        <h1 class="text-center">Salon Razvajanja</h1>
                        <div class="flex flex--center">
                            <div class="line bg--yellow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="vh100 flex flex--center flex--middle bg--image"
                     style="background-image: url('images/slika3.jpg')">
                    <div class="flex flex--column">
                        <h1 class="text-center">Salon Razvajanja</h1>
                        <div class="flex flex--center">
                            <div class="line bg--yellow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="line__bottom pb60">
        <div class="container pt30">
            <h2 class="text-center">Novice</h2>
            <div class="flex flex--center">
                <div class="line bg--yellow"></div>
            </div>
            <div class="flex flex--center pt45">
                <?php
                foreach ( $articles as $news ) {
                    include 'partials/news.php';
                }
                ?>
            </div>
        </div>
    </section>
<?php include_once 'footer.php'; ?>