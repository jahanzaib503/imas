@extends('admin/layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('admin.add-blog') }}" class="btn theme_btn">Add Blog</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="blogs" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Blog 1</td>
                                    <td>This is blog 1</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="icon_flex">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-check" title="Status"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>
                                        </div>
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
            var table = $('#blogs').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
