<?php include_once 'header.php';
if ( $_SESSION['logged'] ) {
    header('Location: main.php');
    exit();
}
?>
    <section>
        <div class="container">
            <div class="vh100 flex flex--center flex--middle">
                <div class="col-md-6 col-sm-8">
                    <?php include_once 'alerts.php'; ?>
                    <h1 class="text-center">Prijava</h1>
                    <form action="login.php" method="POST">
                        <div class="row flex--center mb15">
                            <fieldset class="material">
                                <input type="email" name="email" required>
                                <hr>
                                <label>Uporabniško ime</label>
                            </fieldset>
                        </div>
                        <div class="row flex--center mb20">
                            <fieldset class="material">
                                <input type="password" name="password" required>
                                <hr>
                                <label>Geslo</label>
                            </fieldset>
                        </div>
                        <div class="flex flex--center">
                            <button type="submit" class="btn__main">PRIJAVA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include_once 'footer.php'; ?>