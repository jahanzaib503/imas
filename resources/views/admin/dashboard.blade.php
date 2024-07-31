@extends('admin/layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="row">
                    <div class="col-md-3">
                        <a class="datacard my-3" href="{{ route('admin.bookings') }}">
                            <span class="h4 text-light">Bookings</span>
                            <div class="numbers">
                                <p>7</p>
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div class="go-corner">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="datacard my-3" href="{{ route('admin.inquiries') }}">
                            <span class="h4 text-light">Inquiries</span>
                            <div class="numbers">
                                <p>2</p>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="go-corner">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        // Add event listener to radio buttons
        const radioButtons = document.querySelectorAll('input[name="action_type"]');
        radioButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Automatically submit the form when a radio button is clicked
                document.getElementById('submitBtn').click();
            });
        });

        document.getElementById('submitBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to check-in/check-out',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, proceed',
            cancelButtonText: 'No, cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                // If user clicks "Yes, proceed", submit the form
                document.getElementById('attendanceForm').submit();
            } else {
                // If user clicks "No, cancel", do nothing
                // You can add more handling here if needed
            }
        });
    });
    </script>     --}}
@endsection
