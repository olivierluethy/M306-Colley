<div id="mySidenav" class="sidenav">
    <h1>Colley</h1>
    <h4>Buchhaltungssoftware</h4>
    <hr>
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a href="home"><i class="fas fa-home"></i> Startseite</a>
    <a href="#"><i class="fas fa-stamp"></i> Neues Konto</a>
    <a href="bilanz"><i class="fas fa-balance-scale"></i> Bilanz</a>
    <a href="#"><i class="fas fa-chart-line"></i> Erfolgsrechnung</a>
    <a href="#"><i class="fas fa-book"></i> Jahresabschluss</a>
    <a href="#"><i class="fas fa-piggy-bank"></i> Kalkulation</a>
    <hr>
    <div class="eingeloggt">
    <?php
    echo "<p>Angemeldet mit:<br>" . $_SESSION['email'] ."</p>";
    ?>
    </div>
    <button href="logout">Logout</button>
</div>