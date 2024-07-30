$(document).ready(function() {
    var table = $('#example2').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print'],
        order: [
            [10, 'desc']
        ]
    });

    table.buttons().container()
        .appendTo('#example2_wrapper');
});