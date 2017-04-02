<?php include_once 'header.php';
include_once 'isLogged.php';
include_once 'menu.php'; ?>
<?php
$services = Db::queryAll("SELECT * FROM services;");
?>
    <section>
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Storitve</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <?php include_once 'alerts.php'; ?>
            <div class="flex flex--center mt45">
                <form class="col-md-6 col-sm-8" method="POST" action="addService.php">
                    <div class="row flex--center mb20">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="name" required>
                            <hr>
                            <label>Storitev</label>
                        </fieldset>
                    </div>
                    <div class="row flex--center mt35 mb20">
                        <fieldset class="material col-md-12">
                            <textarea id="content" class="form-control row" name="content" required=""></textarea>
                            <hr>
                            <label class="mb30 mt-35">Opis</label>
                        </fieldset>
                    </div>
                    <div class="flex flex--center">
                        <button class="btn__main">DODAJ</button>
                    </div>
                </form>
            </div>
            <div class="row flex--center pt45">
                <?php
                foreach ( $services as $service ) {
                    include 'partials/service.php';
                }
                ?>
            </div>
        </div>
    </section>
    <script>
        function remove(id) {
            $.ajax({
                url: 'deleteService.php',
                type: 'POST',
                data: {id: id},
                success: function (result) {
                    result = JSON.parse(result);
                    if (result.type === "success") {
                        $("div[data-id=" + id + "]").remove();
                    }
                }
            })
        }
    </script>
<?php include_once 'footer.php'; ?>