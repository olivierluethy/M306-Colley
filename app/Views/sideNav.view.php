<?php include('app/Controllers/inc/arrays/sideNav.inc.php'); ?>
<div id="mySidenav" class="sidenav">
    <div class="toggle-container">
        <input type="checkbox" id="switch" name="theme" /><label id="label" title="Change To Dark Mode"
            for="switch"></label>
        <p id="mode">Light Mode</p>
    </div>
    <hr>
    <h1>Colley</h1>
    <h2>Buchhaltungssoftware</h2>
    <hr>
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <?php for($i=0; $i<count($nav); $i++): ?>
    <a href="<?= $nav[$i][0] ?>"><img src="public/bilder/sideNav/<?= $nav[$i][1] ?>" alt="<?= $nav[$i][2] ?>">&nbsp
        <?= $nav[$i][3] ?></a>
    <?php endfor ?>
    <hr>
    <div class="eingeloggt">
        <?php echo "<p>Angemeldet mit:<br>" . $_SESSION['email'] ."</p>"; ?>
    </div>
    <button onclick="logout()">Logout</button>
</div>