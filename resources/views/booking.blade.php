@extends('layouts.main')
@section('content')
<section class="inner_banner" style="background-image: url('{{ asset('public/assets/images/banner/seafarers_medical.jpg') }}')">
    <div class="container">
        <div class="inner_banner_content">
            <h1>
                Book Your Appointment
            </h1>
            <ul class="pagination">
                <li>
                    <a class="first" href="{{ Route('index') }}">Home</a>
                </li>
                <li>Book Your Appointment</li>
            </ul>
        </div>
    </div>
</section>

<section class="appointment_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="appointment_form">
                    <h2>Schedule Your Appointment</h2>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="assessment">Select Assessment</label>
                                    {!! generateMedicalSelectBox() !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="location">Select Location</label>
                                    <select id="location" class="form-select">
                                        <option value="">Choose Location</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="Queen Street, Oldham, OL1 1RD">Queen Street, Oldham, OL1 1RD</option>
                                        <option value="Regent Street, Nelson, BB9 8LJ">Regent Street, Nelson, BB9 8LJ</option>
                                        <option value="Wakefield WF5 9TJ">Wakefield WF5 9TJ</option>
                                        <option value="Warrington, WA5 7XQ">Warrington, WA5 7XQ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label for="appointment_date">Select a Date and Time</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <input type="hidden" id="appointment_date" class="form-control appointment_date" value="">
                                    <div id="calendar_container"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="selected_date_display"></div>
                                <div class="radio-container">
                                    <label class="radio-button">
                                        <input type="radio" name="radio" value="7:00 pm">
                                        <span class="radio-button-label">7:00 pm</span>
                                    </label>
                                    <label class="radio-button">
                                        <input type="radio" name="radio" value="7:30 pm">
                                        <span class="radio-button-label">7:30 pm</span>
                                    </label>
                                    <label class="radio-button">
                                        <input type="radio" name="radio" value="8:00 pm">
                                        <span class="radio-button-label">8:00 pm</span>
                                    </label>
                                    <label class="radio-button">
                                        <input type="radio" name="radio" value="8:30 pm">
                                        <span class="radio-button-label">8:30 pm</span>
                                    </label>
                                    <label class="radio-button">
                                        <input type="radio" name="radio" value="9:00 pm">
                                        <span class="radio-button-label">9:00 pm</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="booking_details">
                                    <h5>Service Details</h5>
                                    <p class="test_name">
                                        <span id="service_name">Taxi Driver Medical Assessment</span>
                                    </p>
                                    <p class="test_date">
                                        <div class="selected_date_display"></div>
                                    </p>
                                    <p class="test_time">
                                        <div id="selected_time_display"></div>
                                    </p>
                                    <p id="service_duration">
                                        30 min duration
                                    </p>
                                    <p id="service_location">
                                        Warrington, WA5 7XQ
                                    </p>
                                   
                                    <p id="service_price">
                                        £50
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('booking-form') }}" class="btn theme-btn" id="nextButton">Next</a>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<script>

$(document).ready(function() {
    $('#calendar_container').flatpickr({
        inline: true,
        dateFormat: "Y-m-d",
        minDate: "today",
        disable: [
            function(date) {
                return (date.getDay() === 0 || date.getDay() === 6);
            }
        ],
        onChange: function(selectedDates, dateStr, instance) {
            if (selectedDates.length > 0) {
                displayFormattedDate(selectedDates[0]);
                var dateStr = formatDate(selectedDates[0]);
                console.log('Formatted Date:', dateStr);
                fetchAvailableTimes(dateStr);
            }
        }
    });

    function displayFormattedDate(date) {
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var formattedDate = date.toLocaleDateString('en-US', options);
        $('.selected_date_display').text(formattedDate);
        $('.appointment_date').val(formatDate(date));
    }

    function formatDate(date) {
        var year = date.getFullYear();
        var month = ('0' + (date.getMonth() + 1)).slice(-2);
        var day = ('0' + date.getDate()).slice(-2);
        return `${year}-${month}-${day}`;
    }

    function fetchAvailableTimes(date) {
        console.log('Fetching available times for date:', date);
        $.ajax({
            url: '{{ route("booking-times") }}',
            type: 'GET',
            data: { date: date },
            success: function(response) {
                console.log('Available times:', response);
                if (typeof response === 'object') {
                    let availableTimes = Object.values(response);
                    populateTimes(availableTimes);
                } else {
                    console.error('Response is not an object:', response);
                }
            },
            error: function(xhr) {
                console.error('Error fetching available times:', xhr);
            }
        });
    }

    function populateTimes(availableTimes) {
        var radioContainer = $('.radio-container');
        radioContainer.empty();
        availableTimes.forEach(function(time) {
            var timeSlot = $('<label class="radio-button">');
            var radio = $('<input type="radio" name="radio" class="radio-input">').val(time);
            var label = $('<span class="radio-button-label">').text(time);

            if (availableTimes.includes(time)) {
                timeSlot.append(radio).append(label);
                radioContainer.append(timeSlot);
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');
    const name = params.get('name');
    const price = params.get('price');
    if (id) {
        const assessmentSelect = document.getElementById('assessment');
        assessmentSelect.value = id;
        const option = assessmentSelect.querySelector(`option[value="${id}"]`);
        if (option) {
            const serviceName = option.textContent;
            document.getElementById('service_name').textContent = serviceName;
            document.getElementById('service_price').textContent = `£${price || '50'}`; // Default price if not provided
        }
        assessmentSelect.disabled = true;
    }

    document.getElementById('location').addEventListener('change', function() {
        const location = this.value;
        const locationElement = document.getElementById('service_location');
        if (locationElement) {
            locationElement.textContent = location;
        }
    });

    document.querySelectorAll('input[name="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked) {
                const selectedTime = this.value;
                document.getElementById('selected_time_display').textContent = `${selectedTime}`;
            }
        });
    });

    document.getElementById('assessment').addEventListener('change', function() {
        const selectedAssessment = this.options[this.selectedIndex].textContent;
        const selectedOption = this.options[this.selectedIndex];
        const detailsElement = document.querySelector('.booking_details .test_name');
        const priceElement = document.getElementById('service_price');
        const selectedPrice = selectedOption.getAttribute('data-price');
        
        if (detailsElement) {
            detailsElement.textContent = selectedAssessment;
        }
        if (priceElement) {
            priceElement.textContent = selectedPrice ? `£${selectedPrice}` : '£0';
        }   
    });

    document.querySelector('.btn.theme-btn').addEventListener('click', function(event) {
        event.preventDefault();

        const assessmentSelect = document.getElementById('assessment');
        const assessment = assessmentSelect.options[assessmentSelect.selectedIndex].text;
        const location = document.getElementById('location').value;
        const date = document.getElementById('appointment_date').value;
        const time = document.querySelector('input[name="radio"]:checked') ? document.querySelector('input[name="radio"]:checked').value : '';
        const priceText = document.getElementById('service_price').textContent;
        const price = priceText ? priceText.replace('£', '').trim() : '0';

        let errorMessage = '';
        if (!assessment) errorMessage += 'Assessment is required.\n';
        if (!location) errorMessage += 'Location is required.\n';
        if (!date) errorMessage += 'Date is required.\n';
        if (!time) errorMessage += 'Time is required.\n';
        if (!price) errorMessage += 'Price is required.\n';

        if (errorMessage) {
            alert(errorMessage.trim());
            return;
        }

        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '{{ route('booking-form') }}';

        const csrfMeta = document.querySelector('meta[name="csrf-token"]');
        if (csrfMeta) {
            const csrfToken = csrfMeta.getAttribute('content');
            const csrfField = document.createElement('input');
            csrfField.type = 'hidden';
            csrfField.name = '_token';
            csrfField.value = csrfToken;
            form.appendChild(csrfField);
        }
        const fields = {
            'assessment': assessment,
            'location': location,
            'date': date,
            'time': time,
            'price': price
        };

        for (const [name, value] of Object.entries(fields)) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = value;
            form.appendChild(input);
        }
        document.body.appendChild(form);
        form.submit();
    });
});

</script>

@endsection