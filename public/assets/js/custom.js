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

   // Initialize datepicker
$(document).ready(function() {
    // Initialize datepicker with Flatpickr
    $('#appointment_date').flatpickr({
        dateFormat: "Y-m-d",
        minDate: "today", // Prevent selecting past dates
        disable: [
            function(date) {
                return (date.getDay() === 0 || date.getDay() === 6); // Disable weekends
            }
        ],
        onChange: function(selectedDates, dateStr, instance) {
            updateTimeslots(dateStr);
        }
    });

    function updateTimeslots(dateStr) {
        var timeSlots = [];
        var startTime = 9 * 60; // 9:00 AM in minutes
        var endTime = 17 * 60; // 5:00 PM in minutes
        var now = new Date();
        var selectedDate = new Date(dateStr);

        for (var time = startTime; time <= endTime; time += 30) {
            var hours = Math.floor(time / 60);
            var minutes = time % 60;
            var period = hours < 12 ? 'AM' : 'PM';
            hours = hours % 12 || 12;
            var timeString = (hours < 10 ? '0' + hours : hours) + ':' + (minutes < 10 ? '0' + minutes : minutes) + ' ' + period;

            if (selectedDate.toDateString() === now.toDateString()) {
                var currentTime = now.getHours() * 60 + now.getMinutes();
                if (time > currentTime) {
                    timeSlots.push('<option value="' + timeString + '">' + timeString + '</option>');
                }
            } else {
                timeSlots.push('<option value="' + timeString + '">' + timeString + '</option>');
            }
        }

        $('#appointment_time').empty().append(timeSlots.join(''));
    }

    // Populate time slots initially
    var today = new Date().toISOString().split('T')[0];
    updateTimeslots(today);
});
