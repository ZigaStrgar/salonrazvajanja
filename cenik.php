<?php include_once 'header.php'; ?>
<?php
$categories = Db::queryAll("SELECT * FROM categories;");
?>
    <section class="line__bottom pb60">
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Cenik</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <div class="row flex--center pt45">
                <div class="col-md-6 col-sm-12">
                    <div class="table">
                        <table class="responsive bg--white">
                            <tbody>
                            <?php
                            foreach ( $categories as $category ) {
                                $prices =
                                    Db::queryAll("SELECT * FROM price_list WHERE category_id = ?", $category["id"]);
                                if ( count($prices) > 0 )
                                    include 'partials/category.php';
                                foreach ( $prices as $price ) {
                                    include 'partials/price_list.php';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt10">Cenik velja od: <?= date("d. m. Y", strtotime($price['date'])) ?>.</p>
                </div>
            </div>
        </div>
    </section>
<?php include_once 'footer.php'; ?>