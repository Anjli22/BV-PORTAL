var sidebar = document.getElementById('sidebar');
var overlay = document.getElementById('overlay');
var logoutBtn = document.getElementById('logout-btn');
function show_option() {
    sidebar.classList.toggle("open");
    overlay.classList.toggle("overlay-blur");
    

}
logoutBtn.onclick = function(){
    logoutBtn.classList.toggle("active");
}