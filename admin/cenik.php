<?php include_once 'header.php';
include_once 'isLogged.php';
include_once 'menu.php';
$categories = Db::queryAll("SELECT * FROM categories");
?>
    <section>
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Cenik</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <?php include_once 'alerts.php'; ?>
            <div class="flex flex--center mt45">
                <form class="col-md-6 col-sm-8" method="POST" action="addCategory.php">
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="name" required>
                            <hr>
                            <label>Kategorija</label>
                        </fieldset>
                    </div>
                    <div class="flex flex--center">
                        <button class="btn__main">DODAJ</button>
                    </div>
                </form>
            </div>
            <div class="flex flex--center mt45">
                <form class="col-md-6 col-sm-8" method="POST" action="addPrice.php">
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="name" required>
                            <hr>
                            <label>Storitev</label>
                        </fieldset>
                    </div>
                    <div class="flex mb15">
                        <span class="material">Kategorija</span>
                        <select name="category" class="ml15">
                            <?php foreach ( $categories as $category ): ?>
                                <?= "<option value='{$category["id"]}'>{$category["name"]}</option>" ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="note">
                            <hr>
                            <label>Opomba</label>
                        </fieldset>
                    </div>
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="number" name="price" required>
                            <hr>
                            <label>Cena</label>
                        </fieldset>
                    </div>
                    <div class="flex flex--center">
                        <button class="btn__main">DODAJ</button>
                    </div>
                </form>
            </div>
            <div class="row flex--center pt45">
                <div class="col-md-6 col-sm-12">
                    <div class="table">
                        <table class="responsive bg--white">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function remove(id) {
            $.ajax({
                url: 'deletePrice.php',
                type: 'POST',
                data: {id: id},
                success: function (result) {
                    result = JSON.parse(result);
                    if (result.type === "success") {
                        $("tr[data-id=" + id + "]").remove();
                    }
                }
            })
        }
    </script>
<?php include_once 'footer.php'; ?>