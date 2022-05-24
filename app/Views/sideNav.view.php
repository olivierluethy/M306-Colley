<div id="mySidenav" class="sidenav">
    <div class="toggle-container">
        <input type="checkbox" id="switch" name="theme" /><label id="label" title="Change To Dark Mode" for="switch"></label>
        <p id="mode">Light Mode</p>
    </div>
    <hr>
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
    <button onclick="logout()"><img src="assets/logout.svg" alt="">&nbsp<p>Logout</p></button>
</div>

<script src="public/js/darkLightMode.js"></script>