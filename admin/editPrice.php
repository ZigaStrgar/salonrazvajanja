<?php include_once 'header.php';
include_once 'isLogged.php';
include_once 'menu.php';
$id         = (int)$_GET['id'];
$categories = Db::queryAll("SELECT * FROM categories");
$price      = Db::queryOne("SELECT * FROM price_list WHERE id = ?", $id);
?>
    <section>
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Urejanje cenika</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <?php include_once 'alerts.php'; ?>
            <div class="flex flex--center mt45">
                <form class="col-md-6 col-sm-8" method="POST" action="editingPrice.php?id=<?= $id ?>">
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="name" value="<?= $price['name'] ?>" required>
                            <hr>
                            <label>Storitev</label>
                        </fieldset>
                    </div>
                    <div class="flex mb15">
                        <span class="material">Kategorija</span>
                        <select name="category" class="ml15">
                            <?php foreach ( $categories as $category ): ?>
                                <option <?= ( $category['id'] == $price['category_id'] ) ? "selected" : "" ?>
                                        value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="note" value="<?= $price['note'] ?>">
                            <hr>
                            <label>Opomba</label>
                        </fieldset>
                    </div>
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="number" name="price" value="<?= $price['price'] ?>" required>
                            <hr>
                            <label>Cena</label>
                        </fieldset>
                    </div>
                    <div class="flex flex--center">
                        <button class="btn__main">UREDI</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php include_once 'footer.php'; ?>