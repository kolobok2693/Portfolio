menu.onclick = function firstMenu() {
    const a = document.getElementById('bar')
    if (a.className === "topnav") {
        a.className += " responsive"
    } else {
        a.className = "topnav"
    }
}