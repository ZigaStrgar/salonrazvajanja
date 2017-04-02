<?php include_once 'header.php';
include_once 'isLogged.php';
include_once 'menu.php';
$id       = (int)$_GET['id'];
$category = Db::queryOne("SELECT * FROM categories WHERE id = ?", $id);
?>
    <section>
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Urejanje kategorije</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <?php include_once 'alerts.php'; ?>
            <div class="flex flex--center mt45">
                <form class="col-md-6 col-sm-8" method="POST" action="editingCategory.php?id=<?= $id ?>">
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="name" value="<?= $category['name'] ?>" required>
                            <hr>
                            <label>Kategorija</label>
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