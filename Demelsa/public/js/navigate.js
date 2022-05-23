/* Navigations launched by buttons */
function goToBilanz() {
    window.location = "bilanz";
}

function goToNeuesKonto() {
    window.location = "neues-konto";
}

/* Navigations from Sidenavigation */
function openNav() {
    document.getElementById("mySidenav").style.width = "280px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function logout() {
    window.location = "logout";
}