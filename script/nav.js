/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("navBar").style.width = "250px";
    if (document.documentElement.clientWidth > 650) {
        document.getElementById("main").classList.remove('animationClose');
        document.getElementById("main").classList.add('animationOpen')

    }
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("navBar").style.width = "0";
    document.getElementById("main").classList.remove('animationOpen');
    document.getElementById("main").classList.add('animationClose');
}
