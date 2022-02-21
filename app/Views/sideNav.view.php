<div id="mySidenav" class="sidenav">
    <h1>Colley</h1>
    <h4>Buchhaltungssoftware</h4>
    <hr>
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a href="home"><img src="assets/home.png" alt="Startseite"> Startseite</a>
    <a href="#"><img src="assets/account.jpg" alt="Neues Konto"> Neues Konto</a>
    <a href="bilanz"><img src="assets/balance.png" alt="Bilanz"> Bilanz</a>
    <a href="#"><img src="assets/chart-line.png" alt="Erfolgsrechnung"> Erfolgsrechnung</a>
    <a href="#"><img src="assets/jahresabschluss.jpg" alt="Jahresabschluss"> Jahresabschluss</a>
    <a href="#"><img src="assets/piggy-bank.png" alt="Kalkulation"> Kalkulation</a>
    <hr>
    <div class="eingeloggt">
    <?php
    echo "<p>Angemeldet mit:<br>" . $_SESSION['email'] ."</p>";
    ?>
    </div>
    <button href="logout">Logout</button>
</div>