</div>
</section>
<footer class="footer pl20 pr20 bg--white ">
    <div class="container pb30 pt30">
        <div class="row flex--center">
            <div class="col-md-10">
                <div class="row footer__main">
                    <div class="col-sm-5">
                        <h4>Salon Razvajanja</h4>
                        <div class="line bg--yellow line__min mb20"></div>
                        <p>Andreja Šmit s.p.</p>
                        <p>Ulica Veljka Vlahovića 64</p>
                        <p>Maribor - Pobrežje</p>
                        <p><a href="tel:051817200">051-817-200</a></p>
                        <p><a href="mailto:info@salonrazvajanja.si">info@salonrazvajanja.si</a></p>
                    </div>
                    <div class="col-sm-7 footer__links flex flex--middle">
                        <div class="flex flex--column">
                            <a href="index.php" class="mb15">Domov</a>
                            <a href="storitve.php" class="mb15">Storitve</a>
                            <a href="cenik.php" class="mb15">Cenik</a>
                            <a href="novice.php" class="mb15">Novice</a>
                            <a href="onas.php" class="mb15">O nas</a>
                            <?php
                            if ( $_SESSION["logged"] ) {
                                echo "<a href='admin/logout.php' class=\"mb15\">Odjava</a>";
                                echo "<a href='admin/index.php'>Urejaj stran</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <div class="container">
            <div class="pr20 pl20 pt15 pb15">Andreja Šmit s.p. © 2017 &nbsp;•&nbsp; <a
                        href="admin/index.php">Prijava</a
                > &nbsp;•&nbsp; Made by: <a href="https://zigastrgar.com"
                                            target="_blank"
                                            rel="noreferrer noopener">Žiga
                    Strgar</a> & <a
                        href="https://gromgasper.com" target="_blank" rel="noreferrer noopener">Gašper Grom</a></div>
        </div>
    </div>
</footer>
</main>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-96594838-1', 'auto');
    ga('send', 'pageview');

</script>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="scripts/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsWjpZewEtkfkblhJLWUJbe6TDcQIoU7U&callback=myMap"></script>
</body>
</html>
