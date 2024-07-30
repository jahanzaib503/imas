@extends('users/layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-header text-end">
                    <h5>January</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Check-in Day</th>
                                    <th>Check-in Time</th>
                                    <th>Check-out Time</th>
                                    <th>Check-in Date</th>
                                    <th>Check-out Date</th>
                                    <th>Check-in Month</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                @forelse($attendances as $attendance)
                                <tr>
                                    <td>{{ $attendance->checkin_day }}</td>
                                    <td>{{ $attendance->checkin_time }}</td>
                                    <td>{{ $attendance->checkout_time }}</td>
                                    <td>{{ $attendance->checkin_date ? \Carbon\Carbon::parse($attendance->checkin_date)->format('m-d-Y') : '' }}
                                    <td>{{ $attendance->checkout_date ? \Carbon\Carbon::parse($attendance->checkout_date)->format('m-d-Y') : '' }}
                                    <td>{{ $attendance->checkin_month }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">No attendance records found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Working Days: {{workingDaysInCurrentMonth()}}</h6>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>
                               Check-ins: {{getTotalCheckinsInCurrentMonth()}}
                            </h6>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>
                               Absents: {{getTotalAbsencesInCurrentMonth()}}
                            </h6>
                        </div>
                        <div class="col-md-3 text-end">
                            <h6>Salary:</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print']
            } );
         
            table.buttons().container()
                .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
        } );
    </script>
    
@endsection
