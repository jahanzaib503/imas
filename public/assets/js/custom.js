new WOW().init();

document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    const dropdownMenus = document.querySelectorAll('.dropdown-menu');
    const dropdownIcons = document.querySelectorAll('.fa-chevron-down');

    dropdownToggles.forEach((toggle, index) => {
        const menu = dropdownMenus[index];
        const icon = dropdownIcons[index];

        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
                icon.style.transform = 'rotate(0deg)';
            } else {
                dropdownMenus.forEach(m => m.classList.remove('show'));
                dropdownIcons.forEach(i => i.style.transform = 'rotate(0deg)');

                menu.classList.add('show');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});