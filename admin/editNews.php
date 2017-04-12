<?php include_once 'header.php';
include_once 'isLogged.php';
include_once 'menu.php'; ?>
<?php
$id   = (int)$_GET['id'];
$news = Db::queryOne("SELECT * FROM news WHERE id = ?", $id);
?>
    <section>
        <div class="container">
            <div class="flex flex--column flex--center pt90">
                <h1 class="h2 text-center">Urejanje novice</h1>
                <div class="flex flex--center">
                    <div class="line bg--yellow"></div>
                </div>
            </div>
            <?php include_once 'alerts.php'; ?>
            <div class="flex flex--center mt45">
                <form class="col-md-6 col-sm-8" method="POST" action="editingNews.php?id=<?= $id ?>">
                    <div class="row flex--center mb15">
                        <fieldset class="material col-md-12">
                            <input class="row" type="text" name="title" value="<?= $news['title'] ?>" required>
                            <hr>
                            <label>Naslov</label>
                        </fieldset>
                    </div>
                    <div class="row flex--center mt35 mb20">
                        <fieldset class="material col-md-12">
                            <textarea id="content" class="form-control row" name="content"><?= $news['text'] ?></textarea>
                            <hr>
                            <label class="mt-20">Vsebina</label>
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