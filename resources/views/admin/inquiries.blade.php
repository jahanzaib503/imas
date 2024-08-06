@extends('admin.layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="inquiries" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th class="w-50">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($inquiries as $index => $inquiry)
                                    <tr>
                                        <td>{{ $inquiry->id }}</td>
                                        <td>{{ $inquiry->name }}</td>
                                        <td>{{ $inquiry->email }}</td>
                                        <td>{{ $inquiry->phone }}</td>
                                        <td>{{ $inquiry->message }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No records found.</td>
                                    </tr>
                                @endforelse
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
            var table = $('#inquiries').DataTable({
                order: [[0, 'desc']],
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
