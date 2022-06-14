var checkbox = document.querySelector('input[name=theme]');
var mode = document.getElementById("mode");
var label = document.getElementById("label");

checkbox.addEventListener('change', function() {
    if (this.checked) {
        trans()
        document.documentElement.setAttribute('data-theme', 'dark')
        mode.innerHTML = "Dark Mode";
        mode.style.setProperty('color', '#818181');
        label.title = "Change to Light Mode";
    } else {
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
        mode.innerHTML = "Light Mode";
        mode.style.setProperty('color', 'white');
        label.title = "Change to Dark Mode";
    }
})

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}