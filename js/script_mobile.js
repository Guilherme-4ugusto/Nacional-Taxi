//Menu Toggle
function toggle() {
    var curtain = document.getElementById('curtain');
    curtain.classList.toggle('active');
    var container = document.getElementById('container-css-2');
    container.classList.toggle('active');
    var container2 = document.getElementById('container-css-3');
    container2.classList.toggle('active');
    var toggle = document.getElementById('toggle-mobile');
    toggle.classList.toggle('active');
    var footer = document.getElementById('footer');
    footer.classList.toggle('active');
}