document.addEventListener('DOMContentLoaded', function () {
    var menu = document.getElementById('menuToggle');
    var sidebar = document.querySelector('.sidebar');
    if (!menu || !sidebar) return;
    menu.addEventListener('click', function () {
        sidebar.classList.toggle('open');
    });
});
