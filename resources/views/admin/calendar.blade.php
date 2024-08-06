@extends('admin/layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="boxStyle">
                        <form id="calendarForm" method="POST" action="{{ route('calendars.store') }}">
                            @csrf
                            <h3 class="text-center mb-4">Select a Date and Time</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-4">
                                        <input type="hidden" id="appointment_date" name="appointment_date" class="form-control">
                                        <div id="calendar_container"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="selected_date_display"></div>
                                    <div class="checkbox-container">
                                        @foreach ([
                                            '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM',
                                            '12:00 PM', '12:30 PM', '01:00 PM', '01:30 PM', '02:00 PM', '02:30 PM',
                                            '03:00 PM', '03:30 PM', '04:00 PM', '04:30 PM', '05:00 PM'
                                        ] as $time)
                                            <label class="checkbox-button">
                                                <input type="checkbox" name="time[]" value="{{ $time }}">
                                                <span class="checkbox-button-label">{{ $time }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn theme_btn mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- jQuery UI for the calendar -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $(document).ready(function() {
        $('#calendar_container').datepicker({
            onSelect: function(dateText) {
                var date = new Date(dateText);
                var dayNames = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'];
                var dayName = dayNames[date.getUTCDay()];

                $('#appointment_date').val(dateText);
                $('.selected_date_display').text('Selected day: ' + dayName);
                $.getJSON('{{ url('/calendars/available-times') }}', { day: dayName }, function(data) {
                    $('input[name="time[]"]').prop('checked', false);
                    $('input[name="time[]"]').each(function() {
                        if (data.includes($(this).val())) {
                            $(this).prop('checked', true);
                        }
                    });
                });
            }
        });

        $('#calendarForm').submit(function(event) {
            var selectedDate = $('#appointment_date').val();
            if (!selectedDate) {
                alert('Please select a date.');
                return false;
            }
            var selectedTimes = [];
            $('input[name="time[]"]:checked').each(function() {
                selectedTimes.push($(this).val());
            });

            if (selectedTimes.length === 0) {
                alert('Please select at least one time slot.');
                return false;
            }
            return true;
        });
    });
</script>

@endsection
