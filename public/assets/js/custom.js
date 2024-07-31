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

$(document).ready(function() {
    // Initialize datepicker with Flatpickr in inline mode
    $('#calendar_container').flatpickr({
        inline: true,
        dateFormat: "Y-m-d",
        minDate: "today", // Prevent selecting past dates
        disable: [
            function(date) {
                return (date.getDay() === 0 || date.getDay() === 6); // Disable weekends
            }
        ],
        onChange: function(selectedDates, dateStr, instance) {
            displayFormattedDate(selectedDates[0]);
        }
    });

    function displayFormattedDate(date) {
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var formattedDate = date.toLocaleDateString('en-US', options);
        $('.selected_date_display').text(formattedDate);
    }
});
