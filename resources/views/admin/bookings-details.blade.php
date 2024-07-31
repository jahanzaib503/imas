@extends('admin/layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                {{-- <div class="card-header text-end">
                    <h5>January</h5>
                </div> --}}
                <div class="card-body">
                    <div class="boxStyle">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="Dummy Name" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="abc@gmail.com" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="(132) 456 7891" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="dob">Date of Birth</label>
                                    <input type="text" class="form-control" id="dob" name="dob" value="July 31, 1980" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="assessment">Assessment</label>
                                    <input type="text" class="form-control" id="assessment" name="assessment" value="Taxi Driver Medical Assessment" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" value="Manchester" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control" id="date" name="date" value="Wednesday, July 31, 2024" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="time">Time</label>
                                    <input type="text" class="form-control" id="time" name="time" value="4:00 PM" disabled>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="aurhority_apply" class="form-label">Which Local Authority are you applying for? (Taxi ONLY)</label>
                                    <input type="text" class="form-control" id="aurhority_apply" name="aurhority_apply" value="This is dummy text" disabled>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="health_condition" class="form-label">Do you have any health conditions? Please include conditions such as diabetes, heart attacks, strokes, etc.</label>
                                    <input type="text" class="form-control" name="health_condition" id="health_condition" value="This is dummy text" disabled>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="taxi_medical" class="form-label">Taxi Medical Applicants MUST bring a Medical Summary or Medical Record (depending on the council) - please check and make sure you have the correct documents. Do you have your Medical Summary available? (Yes/No)</label>
                                    <input type="text" class="form-control" id="taxi_medical" name="taxi_medical" value="This is dummy text" disabled>
                                </div>
                            </div>

                        </div>
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
