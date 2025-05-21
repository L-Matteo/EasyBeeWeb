
function changerMenu(newMenu, ancienMenu) {
    document.getElementById(ancienMenu).classList.add("cacher") // TODO : corriger pour que ça fonctionne
    document.getElementById(newMenu).classList.remove("cacher")
}