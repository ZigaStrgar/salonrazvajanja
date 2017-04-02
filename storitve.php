<?php include_once 'header.php'; ?>
<?php
$services = Db::queryAll("SELECT * FROM services;");
?>
    <section class="line__bottom pb60">
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Storitve</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <div class="row flex--center pt45">
                <?php
                foreach ($services as $service)
                    include 'partials/service.php';
                ?>
            </div>
        </div>
    </section>
<?php include_once 'footer.php'; ?>