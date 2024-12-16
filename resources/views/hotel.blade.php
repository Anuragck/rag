@extends('layouts.app-1')
@section('title', 'Lead Create')
@section('content')
    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Hotel</h5>


                            <!-- Browser Default Validation -->
                            <form action="{{ route('hotel.save') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-4">
                                    <label for="validationDefault01" class="form-label">Hotel Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" name="name" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault04" class="form-label">Location</label>
                                    <select class="form-select" id="validationDefault04" name="location" required>
                                        <option selected disabled value="">Choose...</option>
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id }}"> {{ $location->location }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault04" class="form-label">Available Room Types</label>
                                    <select class="form-select" id="validationDefault04" name="room_type[]" required multiple>
                                        <option selected disabled value="">Select</option>
                                        @foreach ($roomTypes as $roomType )
                                         <option value="{{ $roomType->id }}"> {{ $roomType->name }} </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                            <!-- End Browser Default Validation -->


                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    @endsection
