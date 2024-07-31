

$(document).ready(function() {
    // Initialize datepicker with Flatpickr in inline mode
    $('#calendar_container').flatpickr({
        inline: true,
        dateFormat: "Y-m-d",
        minDate: "today", // Prevent selecting past dates
        
    });
});