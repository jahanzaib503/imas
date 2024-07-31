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
                        <form>
                            <h3 class="text-center mb-4">Select a Date and Time</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-4">
                                        <input type="hidden" id="appointment_date" class="form-control">
                                        <div id="calendar_container"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="selected_date_display"></div>
                                    <div class="radio-container">
                                        <label class="radio-button">
                                            <input type="checkbox" name="check1" value="9:00 AM" checked>
                                            <span class="radio-button-label">9:00 AM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check2" value="9:30 AM">
                                            <span class="radio-button-label">9:30 AM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check3" value="10:00 AM">
                                            <span class="radio-button-label">10:00 AM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check4" value="10:30 AM">
                                            <span class="radio-button-label">10:30 AM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check5" value="11:00 AM">
                                            <span class="radio-button-label">11:00 AM</span>
                                        </label>

                                        <label class="radio-button">
                                            <input type="checkbox" name="check6" value="11:30 AM">
                                            <span class="radio-button-label">11:30 AM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check7" value="12:00 PM">
                                            <span class="radio-button-label">12:00 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check8" value="12:30 PM">
                                            <span class="radio-button-label">12:30 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check9" value="01:00 PM">
                                            <span class="radio-button-label">01:00 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check10" value="01:30 PM">
                                            <span class="radio-button-label">01:30 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check11" value="02:00 PM">
                                            <span class="radio-button-label">02:00 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check12" value="02:30 PM">
                                            <span class="radio-button-label">02:30 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check13" value="03:00 PM">
                                            <span class="radio-button-label">03:00 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check14" value="03:30 PM">
                                            <span class="radio-button-label">03:30 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check15" value="04:00 PM">
                                            <span class="radio-button-label">04:00 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check16" value="04:30 PM">
                                            <span class="radio-button-label">04:30 PM</span>
                                        </label>
                                        <label class="radio-button">
                                            <input type="checkbox" name="check17" value="05:00 PM">
                                            <span class="radio-button-label">05:00 PM</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="javascript:void(0);" class="btn theme_btn">Action Button</a>
                                </div>
                            </div>
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

    <script>
        $(document).ready(function() {
            var table = $('#bookings').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
