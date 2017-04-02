<?php include_once 'header.php';
include_once 'isLogged.php';
include_once 'menu.php'; ?>
<?php
$id      = (int)$_GET['id'];
$service = Db::queryOne("SELECT * FROM services WHERE id = ?;", $id);
?>
    <section>
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Urejanje storitve</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <?php include_once 'alerts.php'; ?>
            <div class="flex flex--center mt45">
                <form class="col-md-6 col-sm-8" method="POST" action="editingService.php?id=<?= $id ?>">
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="name" value="<?= $service['name'] ?>" required>
                            <hr>
                            <label>Storitev</label>
                        </fieldset>
                    </div>
                    <div class="row flex--center mt35 mb20">
                        <fieldset class="material col-md-12">
                            <textarea id="content" class="form-control row" name="content"
                                      required=""><?= $service['text'] ?></textarea>
                            <hr>
                            <label class="mt-20">Opis</label>
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