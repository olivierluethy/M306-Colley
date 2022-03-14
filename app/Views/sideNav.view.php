<div id="mySidenav" class="sidenav">
    <h1>Colley</h1>
    <h2>Buchhaltungssoftware</h2>
    <hr>
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a href="home"><img src="assets/home.png" alt="Startseite">&nbsp Startseite</a>
    <a href="neues-konto"><img src="assets/account.jpg" alt="Neues Konto">&nbsp Neues Konto</a>
    <a href="bilanz"><img src="assets/balance.png" alt="Bilanz">&nbsp Bilanz</a>
    <a href="#"><img src="assets/chart-line.jpg" alt="Erfolgsrechnung">&nbsp Erfolgsrechnung</a>
    <a href="#"><img src="assets/jahresabschluss.jpg" alt="Jahresabschluss">&nbsp Jahresabschluss</a>
    <a href="#"><img src="assets/piggy-bank.png" alt="Kalkulation">&nbsp Kalkulation</a>
    <hr>
    <div class="eingeloggt">
        <?php
    echo "<p>Angemeldet mit:<br>" . $_SESSION['email'] ."</p>";
    ?>
    </div>
    <button onclick="logout()">Logout</button>
</div>