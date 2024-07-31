@extends('admin/layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                {{-- <div class="card-header text-end">
                    <h5>January</h5>
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="bookings" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>DOB</th>
                                    <th>Assessment</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>01</td>
                                    <td>Dummy Name</td>
                                    <td>abc@gmail.com</td>
                                    <td>(132) 456 7891</td>
                                    <td>July 31, 1980</td>
                                    <td>Taxi Driver Medical Assessment</td>
                                    <td>Manchester</td>
                                    <td>Wednesday, July 31, 2024</td>
                                    <td>4:00 PM</td>
                                    <td>
                                        <a href="{{ route('admin.bookings-details') }}">
                                            view more
                                        </a>
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td colspan="6">No records found.</td>
                                </tr> --}}
                            </tbody>
                        </table>
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

    <script>
        $(document).ready(function() {
            var table = $('#bookings').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
