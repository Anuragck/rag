@extends('layouts.app-1')
@section('title', 'Room Create')
@section('content')
    <main id="main" class="main">


        <section class="section">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Room</h5>


                            <!-- Browser Default Validation -->
                            <form action="{{ route('room.save') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="row mt-3">

                                    <div class="col-md-6 ">
                                        <label for="validationDefault04" class="form-label">Location</label>
                                        <select class="form-select" id="hotelLocation" name="location" required>
                                            <option selected disabled value="">Choose...</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}"> {{ $location->location }}</option>
                                            @endforeach

                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label">Hotel</label>
                                        <select class="form-select" id="hotelSelect" name="hotel" required>
                                            <option selected disabled value="">Select hotel</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row  mt-3">
                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label">Room Type</label>
                                        <select class="form-select" id="roomTypeSelect" name="room_type" required>
                                            <option selected disabled value="">Select room type</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="validationDefault01" class="form-label">Room Name</label>
                                        <input type="text" class="form-control" id="validationDefault01" name="name"
                                            required>
                                    </div>

                                </div>


                                <div class="col-12 ">
                                    <button class="btn btn-primary" type="submit">Add Room</button>
                                </div>
                            </form>
                            <!-- End Browser Default Validation -->

                        </div>

                    </div>
                </div>

            </div>
            </div>

        </section>
    </main>
    @push('scripts')
        <script>
            $('#hotelLocation').change(function() {
                var location = $(this).val();

                $.ajax({
                    url: "{{ route('hotels.get') }}",
                    method: 'GET',
                    data: {
                        location_id: location
                    },
                    success: function(response) {
                        $('#hotelSelect').empty();

                        $('#hotelSelect').append(
                            '<option value="" disabled selected>Select hotel</option>');

                        response.hotels.forEach(function(hotel) {
                            $('#hotelSelect').append('<option value="' + hotel.id + '">' + hotel
                                .name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        alert('failed to fetch hotels');
                        console.error(error);
                    }
                });
            });

            $('#hotelSelect').change(function() {
                var hotel_id = $(this).val();

                $.ajax({
                    url: "{{ route('roomTypes.get') }}",
                    method: 'GET',
                    data: {
                        hotel_id: hotel_id
                    },
                    success: function(response) {
                        $('#roomTypeSelect').empty();

                        $('#roomTypeSelect').append(
                            '<option value="" disabled selected>Select room type</option>');

                        response.roomTypes.forEach(function(roomType) {
                            $('#roomTypeSelect').append('<option value="' + roomType.id + '">' +
                                roomType
                                .name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        alert('failed to fetch room types');
                        console.error(error);
                    }
                });
            });
        </script>
    @endpush

@endsection
